<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $comentario = $_POST["comentario"];

    $query = "INSERT INTO mensagens(nome, email, comentario) 
              VALUES ('$nome', '$email', '$comentario')";

    if ($link->query($query) === TRUE) {
        echo json_encode(["status" => "ok"]);
    } else {
        echo json_encode(["status" => "erro", "msg" => $link->error]);
    }
}
?>
