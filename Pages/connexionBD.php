<?php
try 
{
    $pdo = new PDO("mysql:host=localhost;dbname=ent","root", "");
}catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>