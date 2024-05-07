<?php

session_start();

$res = [];

if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    die(json_encode(["error" => "authentification required"]));
}

if (!isset($_GET["id_categorie"])) {
    http_response_code(400);
    die(json_encode(["error" => "id_categorie parameter needed"]));
}

$id_categorie = $_GET["id_categorie"];
$id_utilisateur = $_SESSION["user_id"];

require_once "../model/UtilisateurModel.php";
require_once "../model/CategorieModel.php";

if ($id_categorie < 0) {
    $espaces = UtilisateurModel::getEspaces($id_utilisateur);
    die(json_encode(["categories" => $espaces]));
}

if (!CategorieModel::categorieAppartientA($id_utilisateur, $id_categorie)) {
    http_response_code(403);
    die(json_encode(["error" => "id_categorie does not belong to you"]));
}
$articles = CategorieModel::getParentsCategories($id_categorie);
die(json_encode(["categories" => $articles]));
