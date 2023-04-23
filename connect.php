<?php
$dsn = "mysql:host=localhost;dbname=lab3var1";
$user = 'root';
$pass = '';

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}
?>