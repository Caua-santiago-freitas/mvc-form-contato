<?php
// Define páginas válidas no projeto
$paginasValidas = [
    "landing" => __DIR__ . "/views/landing.php",
    "home" => __DIR__ . "/views/home.php",
    "login" => __DIR__ . "/views/login.php",
    "contatos" => __DIR__ . "/views/contato.php",
];

//Captura a página informada na url
$page = $_GET["page"] ?? "landing";

//Verifica se a página existe
if (array_key_exists($page, $paginasValidas)) {
    require $paginasValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}