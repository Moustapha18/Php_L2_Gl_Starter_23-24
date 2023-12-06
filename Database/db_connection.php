<?php
$hote = "localhost";
$user = "root";
$password = "";
$dbname = "l2_gl_starter";

$dsn = "mysql:host=$hote;dbname=$dbname;charset=utf8";
try{
    $connexion = new PDO($dsn , $user , $password);
    //die("connexion reussie !");

}catch(PDOException $e){
    die("erreur de connexion:" . $e->getMessage());
}

?>