<?php
require 'vendor\autoload.php';


// Twig initialisieren
$loader = new \Twig\Loader\FilesystemLoader('C:\Users\Robin\PhpstormProjects\Kontaktformular\vendor\twig\Templates');
$twig = new \Twig\Environment($loader);

//variablen deklarieren
$email = '';
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
$betreff ='';
if (isset($_GET['betreff'])) {
    $betreff = $_GET['betreff'];
}
$anfrage = '';
if (isset($_GET['anfrage'])) {
    $anfrage = $_GET['anfrage'];
}

//
$pdo = new PDO('mysql:host=localhost;dbname=praktikum', 'root', '');

$sql = "SELECT email, betreff, anfrage FROM kontaktformular";
$erg = $pdo -> query($sql);

while ($row = $erg -> fetchAll(pdo::FETCH_ASSOC)){
    $row['email'] = $email2;
    $row['betreff'] = $betreff2;
    $row['anfrage'] = $anfrage2;
}
//
echo $twig->render('index.html', [
    'email' => $email,
    'betreff' => $betreff,
    'anfrage' => $anfrage,
    $row['email2'] => $email2,
    $row['betreff2'] => $betreff2,
    $row['anfrage2'] => $anfrage2,
]);
