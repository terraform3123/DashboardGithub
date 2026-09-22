<?php

include_once __DIR__ . '/view.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/index.php');
    exit;
}

$username = htmlspecialchars($_POST['username']);

$url = "http://localhost:8000/usuario/{$username}";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "Erro: " . curl_error($ch);
}

curl_close($ch);
$data = json_decode($response, true);

$_SESSION['data'] = $data;

header('Location: ../public/index.php');
exit;
?>