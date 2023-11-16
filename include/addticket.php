<?php 
require('../actions/user/securityAction.php');
require('../actions/database.php');
require('../actions/tickets/addTicketAction.php');
require('head.php'); ?>
<?php require('topbox.php'); ?>


    <div class="body">
    <?php require('aside.php'); ?>
        <main>
            <h1 align=center>AJOUTER UN TICKET</h1>
            <form action="addticket.php" method="POST">
                <label for="libelle">
                    <table>
                    <tr>
                        <td>libellé</td>
                        <td><textarea type="text" id="libelle" rows="12" cols="22" name="content"></textarea>
                    </tr>
                </table>
                </label>
                <input type="submit" value="AJOUTER" name="validate">
            </form>
        </main>
        
    </div>
    <?php require('footer.php');
    require('foot.php'); ?>
