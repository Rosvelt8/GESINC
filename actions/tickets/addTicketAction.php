<?php
if(isset($_POST['validate'])){
if(!empty($_POST['content'])){
        
        // recuperation des informations de la question
        $ticket_content= htmlspecialchars($_POST['content']);
        $ticket_date= date('d/m/Y');
        $ticket_id_agent= $_SESSION['id'];

        // preparation de la requête d'insertion dans la BD

        $insertticketonapp= $bdd->prepare("INSERT INTO `ticket` (`content`,`datepub`, `id_agent`) VALUES (:content, :datepub, :id_ticket)");

        // execution de la requête 
        $insertticketonapp->bindParam(':content', $ticket_content);
        $insertticketonapp->bindParam(':datepub', $ticket_date);
        $insertticketonapp->bindParam(':id_ticket', $ticket_id_agent);
        $insertticketonapp->execute();
        header('location: index.php');

        // message de validation
        $successMessage= "votre question a bien été publier sur le site...";





    }else{
        // message d'erreur
        $errorMessage= "veuillez completer tous les champs....";
    }
}



// <?php
// session_start();
// $serveur = "localhost";
// $login = "root";
// $pass = "";

// try{

//       $connexion = new PDO("mysql:host=$serveur;dbname=soutenance",$login,$pass);
//       $connexion->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//       $requete = $connexion->prepare(
//        "INSERT INTO user(nom , prenom , mail , date_de_naiss , telephone , sexe , localisation , sm , password)
//    VALUES (:nom,:prenom, :mail,:date_de_naiss,:telephone,:sexe,:localisation,:sm,:password)"
//    );
//    $requete->bindParam(':nom', $username);
//    $requete->bindParam(':prenom', $fullname);
//    $requete->bindParam(':mail', $email);
//    $requete->bindParam(':date_de_naiss', $date);
//    $requete->bindParam(':telephone', $telephone);
//    $requete->bindParam(':sexe', $genre);
//    $requete->bindParam(':localisation', $localisation);
//    $requete->bindParam(':sm', $sm);
//    $requete->bindParam(':password', $password);

//    $username = $_POST['username'];
//    $fullname = $_POST['fullname'];
//    $email = $_POST['email'];
//    $date = $_POST['date'];
//    $telephone = $_POST['telephone'];
//    $localisation = $_POST['localisation'];
//    $password = $_POST['password'];
//    $genre = $_POST['genre'];
//    $sm = $_POST['sm'];
//    $repass = $_POST['repassword'];
//    $terms = $_POST['terms'];

//    if($username !== "" && $password !== ""  && $tel !== ""  && $date !== ""  && $localisation !== ""  && $genre !== "" && $sm !== "" && $fullname !== "" )
// {
//   if($password == $repass)  

//     {   $requete->execute();
//       header('Location: ../forms/user.php?ID=1');
//     }
//    else
//    {
//       header('Location: register.php?erreur=1'); 
//    }
// }
// else
// {
//   header('Location: register.php?erreur=2');
// }

// mysqli_close($db); 
//   }
  

// catch(PDOException $e){
//   echo 'erreur : ' .$e->getMessage();
//  }

// ?>