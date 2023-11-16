<?php 
require('../actions/user/securityAction.php');
require('../actions/database.php');
require('../actions/tickets/showAllTicketAction.php');
require('head.php');
require('topbox.php'); ?>

    <div class="body">
        <?php require('aside.php'); ?>
        <main>
            <h1 align=center>LISTE DES NOUVEAUX TICKETS</h1>
            <table border="1">
                <thead>
                    <td>N°</td>
                    <td>Description</td>
                    <td>Opérations</td>
                </thead>
                <?php
                foreach($tickets as $tickets){
        ?>
                <tr>
                    <td><?= $tickets['id_ticket']; ?></td>
                    <td><?= $tickets['content']; ?></td>
                    <td>
                        <a href="modifyticket.php?id=<?= $tickets['id_ticket']; ?>">modifier</a>
                    </td>
                </tr>
                <?php
                
                }
                ?>

            </table>
        </main>
        
    </div>
    <?php require('footer.php'); ?>
    <?php require('foot.php'); ?>
