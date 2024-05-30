<?php

/**
 * Ensemble de fonctions "boite à outils" du projet.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/src" . "/model/FluxModel.php";

function extractMainDomain(string $url): string | null
{
    $parsedUrl = parse_url($url);
    if (isset($parsedUrl['host'])) {
        $hostParts = explode('.', $parsedUrl['host']);
        // Si le domaine contient plus de deux parties (par exemple : www.example.com)
        if (count($hostParts) > 2) {
            $domain = $hostParts[count($hostParts) - 2] . '.' . $hostParts[count($hostParts) - 1];
        } else {
            $domain = $parsedUrl['host'];
        }
        return $domain;
    } else {
        return null;
    }
}

/**
 * Permet de récupérer l'identifiant d'une chaine YouTube en utilisant l'API
 * de YouTube.
 * Nécessite une clé d'API à définir dans la constante intitulée `YTB_API_KEY` dans le fichier .env
 * 
 * @author GatienFrenchDev <contact@gatiendev.fr>
 * @param username - username de la chaine Youtube. ( eg. `nobodyplaylists`)
 * @return channelID - identifiant de la chaine youtube correspondante (eg. `UCsBjURrPoezykLs9EqgamOA`),
 *                     `null` si aucune chaine YouTube trouvée.
 */
function getIDFromYoutubeChannel(string $username): string | null
{

    $env = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/src" . "/.env");

    $res = file_get_contents(sprintf("https://youtube.googleapis.com/youtube/v3/channels?part=id&forHandle=%s&key=%s", urlencode($username), $env["YTB_API_KEY"]));
    $json = json_decode($res, true);

    if (isset($json["items"])) {
        return $json["items"][0]["id"];
    }
    return null;
}

/**
 * Permet d'extraire le nom d'utilisateur d'une url d'une chaine YouTube.
 * e.g. : getUsernameFromYouTubeUrl(`https://www.youtube.com/@code`) == "code"
 */
function getUsernameFromYouTubeUrl($url)
{
    // Extraire le chemin de l'URL
    $path = parse_url($url, PHP_URL_PATH);

    // Appliquer une expression régulière pour extraire le nom d'utilisateur
    preg_match('/\/@([^\/]+)/', $path, $matches);

    // Vérifier si un match a été trouvé
    if (isset($matches[1])) {
        return $matches[1];
    } else {
        return false; // Aucun nom d'utilisateur trouvé
    }
}

/**
 * Interroge le flux RSS et renvoie une liste contenant tous les articles.
 */
function getArticlesFromRSSFlux(int $id_flux, string $url): array
{

    require_once "../classes/Article.php";

    $articles = [];

    $xml = new DOMDocument();

    if (!$xml->load($url)) {
        return $articles;
    }

    if (count($xml->getElementsByTagName("channel")) == 0) {
        return $articles;
    }

    if (count($xml->getElementsByTagName("title")) == 0) {
        return $articles;
    }

    
    $titre = $xml->getElementsByTagName("title")->item(0)->nodeValue;
    
    // pour supprimer le `loc:FR - BingActualités` du titre du flux bing news
    if (str_starts_with($url, "https://www.bing.com/news/search")) {
        $titre = str_replace("loc:FR - BingActualités", "", $titre);
        $titre = $titre . " - Bing News";
    }

    FluxModel::updateNomFromFlux($id_flux, $titre);

    // cas d'un flux YouTube
    if (str_starts_with($url, "https://www.youtube.com/feeds/videos.xml?channel_id=")) {

        foreach ($xml->getElementsByTagName("entry") as $node) {
            $titre = $node->getElementsByTagName('title')->item(0)->nodeValue;
            $description = $node->getElementsByTagName('description')->item(0)->nodeValue;
            $lien = $node->getElementsByTagName('link')->item(0)->getAttribute('href');
            $date_pub = (int) strtotime($node->getElementsByTagName('published')->item(0)->nodeValue);
            $articles[] = new Article($titre, $description, $lien, $date_pub, "");
        }
    }

    // cas d'un flux rss générique
    else {
        foreach ($xml->getElementsByTagName("item") as $node) {
            $titre = $node->getElementsByTagName('title')->item(0)->nodeValue;

            $lien = $node->getElementsByTagName('link')->item(0)->nodeValue;

            $description = "";
            $url_image = "";
            $ts = 0;

            if (count($node->getElementsByTagName('description')) > 0) {
                $description = $node->getElementsByTagName('description')->item(0)->nodeValue;
            }

            if (count($node->getElementsByTagName('pubDate')) > 0) {
                $ts = (int) strtotime($node->getElementsByTagName('pubDate')->item(0)->nodeValue);
            }

            if (count($node->getElementsByTagName('content')) > 0) {
                $url_image = $node->getElementsByTagName('content')->item(0)->getAttribute('url');
            }

            if (count($node->getElementsByTagName('enclosure')) > 0) {
                $url_image = $node->getElementsByTagName('enclosure')->item(0)->getAttribute('url');
            }

            if ($ts > time()) {
                $ts = time();
            }
            if ($ts < 946681200) {
                $ts = 946681200;
            }

            $articles[] = new Article(strip_tags($titre, "<br><b><i>"), strip_tags($description, "<br><b><i>"), $lien, $ts, $url_image);
        }
    }

    return $articles;
}

/**
 * Retourne vrai si la chaine de caractère est bien au format yyyy-mm-dd
 */
function correctFormatForFormDate(string $str): bool
{
    return date("Y-m-d", strtotime($str)) == $str;
}