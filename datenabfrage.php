<?php

$pdo = new PDO('mysql:host=localhost;dbname=praktikum', 'root', '');

$email = $_POST['email'];
$betreff = $_POST["betreff"];
$anfrage = $_POST["anfrage"];

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || (empty($betreff) || (empty($anfrage))))
    {
        header('Location: http://localhost:8000/index.php?email=' . rawurlencode($email) . '&betreff=' . rawurlencode($betreff) . '&anfrage=' . rawurlencode($anfrage));
        die();
    }

else
    {
        $statement = $pdo->prepare("INSERT INTO kontaktformular (email, betreff, anfrage) VALUES (?, ?, ?)");
        $statement->execute(array($email, $betreff, $anfrage));
        header('Location: http://localhost:8000/index.php?email=' . rawurlencode($email="") . '&betreff=' . rawurlencode($betreff="") . '&anfrage=' . rawurlencode($betreff=""));
    }
?>
