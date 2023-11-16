<?php
// validation du formulaire
if(isset($_POST['validate'])){

    // verification si l'utilisateur a rempli tous les champs
    if(!empty($_POST['content'])){
        $ticket_content= htmlspecialchars($_POST['content']);
        $ticket_date= date('d/m/Y');
        // les données a faire passer dans la requête qui possèdent l'id en paramètre
        $new_ticket_content= nl2br(htmlspecialchars($_POST['content'])); 

        // requete d'insertion
        $editTicketOnapp= $bdd->prepare('UPDATE ticket SET content= ?, datepub= ? WHERE id_ticket = ?');
        $editTicketOnapp->execute(Array($ticket_content, $ticket_date, $idOfTicket));

        // redirection vers la page d'affichage apres insertion
        header('Location: index.php');

    }else{
        $errorMessage="veuillez completer tous les champs...";
    }
}