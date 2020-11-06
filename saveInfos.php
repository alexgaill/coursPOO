<?php
$post = ["nom" => "Doe", "prenom" => "Janee", "email" => "janee@doe.fr", "password" => "password"];
$array = array_reverse($post);
var_dump($array);
// $post = ["Janee","Doe", "janee@doe.fr", "password"];
try{
    $statement = "INSERT INTO user (nom, prenom, email, password) 
    VALUES (:nom, :prenom, :email, :password)";
    $prepare = $pdo->prepare($statement);
    $prepare->execute($array);

} catch(\PDOException $e){
    echo $e->getMessage();
 }