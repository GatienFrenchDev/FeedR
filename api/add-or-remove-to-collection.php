<?php

session_start();

if (!isset($_SESSION["id_utilisateur"])) {
    die(json_encode(["error" => "authentification required"]));
    exit;
}

if (!isset($_POST["id_article"])) {
    die(json_encode(["error" => "id_article parameter needed"]));
    exit;
}

if (!isset($_POST["id_collection"])) {
    die(json_encode(["error" => "id_collection parameter needed"]));
    exit;
}

$id_article = $_POST["id_article"];
$id_collection = $_POST["id_collection"];
$id_utilisateur = $_SESSION["id_utilisateur"];

require_once "../model/CollectionModel.php";

// si l'article doit être supprimé de la collection (lors de la vérification on l'ajoute à la collection)
if(!CollectionModel::addToCollection($id_utilisateur, $id_article, $id_collection)){
    CollectionModel::removeFromCollection($id_utilisateur, $id_article, $id_collection);
}
