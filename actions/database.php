<?php
try{
    $bdd= new PDO('mysql:host=localhost;dbname=gestion_incidents;charset=utf8', 'root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die('une erreur a été trouvée :' . $e->getMessage());
    echo "biro";
}