<?php

session_start();

$id_invitation = $_GET["id_invitation"];
$id_utilisateur = $_SESSION["id_utilisateur"];

if (!isset($id_utilisateur)) {
    http_response_code(401);
    die(json_encode(["error" => "authentification required"]));
}

if (!isset($id_invitation)) {
    http_response_code(400);
    die(json_encode(["error" => "id_invitation parameter needed"]));
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/src/model/InvitationModel.php";

if(!InvitationModel::invitationAppartientA($id_utilisateur, $id_invitation)){
    http_response_code(403);
    die(json_encode(["error" => "invitation does not belong to you"]));
}

InvitationModel::accepterInvitation($id_invitation);
header("Location: /");