<?php
session_start();



// validation du formulaire

if(isset($_POST['validate'])){

    // verification d'entrée de valeur dans les champs
    if(!empty($_POST['emailuser']) AND !empty($_POST['password'])){
        
        // les données de l'user
        $user_email= htmlspecialchars($_POST['emailuser']);
        $user_password= htmlspecialchars($_POST['password']);

        $checkIfUserExists= $bdd->prepare('SELECT * FROM agent WHERE Email= ?');
        $checkIfUserExists->execute(Array($user_email));

        if($checkIfUserExists->rowCount() > 0){

            $usersInfos= $checkIfUserExists->fetch();
            if(password_verify($user_password, $usersInfos['password'])){
                // authentification de l'utilisateur
                $_SESSION['auth']= true;
                $_SESSION['id']= $usersInfos['id_agent'];
                $_SESSION['lastName']= $usersInfos['name'];
                $_SESSION['firtsName']= $usersInfos['surname'];
                $_SESSION['pseudo']= $usersInfos['agence'];

            // renvoie vers la page d'acceuil 
                header('Location: index.php');
                echo "good";

            }else{
                $errorMessage="Votre mot de passe est incorrecte";
            }
        }else{
            $errorMessage= "Votre pseudo est incorrect";
        }

    }else{
        $errorMessage= "Veuillez compléter tous les champs...";
    }
}