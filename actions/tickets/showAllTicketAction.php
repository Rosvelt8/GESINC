<?php

$getAllTickets= $bdd->prepare('SELECT DISTINCT id_ticket, content, datepub, id_agent FROM ticket WHERE id_agent=? ORDER BY id_agent DESC');
$getAllTickets->execute(array($_SESSION['id']));
$tickets= $getAllTickets->fetchAll();