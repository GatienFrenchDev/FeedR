<?php

session_start();

if (!isset($_SESSION["id_utilisateur"])) {
    die(json_encode(["error" => "authentification required"]));
    exit;
}

if (!isset($_GET["id_article"])) {
    die(json_encode(["error" => "id_article parameter needed"]));
    exit;
}

if (!isset($_GET["id_espace"])) {
    die(json_encode(["error" => "id_espace parameter needed"]));
    exit;
}

$id_article = $_GET["id_article"];
$id_espace = $_GET["id_espace"];
$id_utilisateur = $_SESSION["id_utilisateur"];

require_once "../model/EspaceModel.php";
require_once "../model/ArticleModel.php";

if(!EspaceModel::espaceAppartientA($id_utilisateur, $id_espace)){
    die(json_encode(["error" => "espace does not belong to you"]));
    exit;
}

ArticleModel::setArticleLu($id_article, $id_espace);