<?php

// verifier si l'id du ticket est bien passé en paramètre

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $idOfTicket = $_GET['id'];
// requête de retrait des information dans la BD
    $checkIfTicketExists= $bdd->prepare('SELECT * FROM ticket WHERE id_ticket= ?');
    $checkIfTicketExists->execute(array($idOfTicket));

    // verification de l'existence de la ticket
    if($checkIfTicketExists->rowCount() > 0){

        // recupération des données de la ticket
        $ticketInfos = $checkIfTicketExists->fetch();
        if($ticketInfos['id_agent'] == $_SESSION['id']){
            $ticket_content = $ticketInfos['content'];
            $ticket_content = str_replace('<br />', '', $ticket_content);

        }else{
            $errorMessage= "Vous n'êtes pas l'auteur de ce ticket";
        }


    }else{
    $errorMessage = "Aucun ticket n'a été trouvée";
}
}else{
    $errorMessage = "Aucune ticket n'a été trouvée";
}