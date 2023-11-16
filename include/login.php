<?php 
require('../actions/database.php');
require('../actions/user/loginAction.php'); 
require('head.php'); 
require('topbox.php'); ?>

    <div class="content">
        <form method="POST">
            <div class="text">
                <h2>CONNEXION</h2>
            </div>
            <div class="input-text" >
                <input type="text" name="emailuser">
            </div>
            <div class="input-text">
                <input type="password" name="password">
            </div>

            <p><? if(isset($errorMessage)){echo $errorMessage;} ?></p>
            <div class="button">
                <input type="reset">
                <input type="submit" name="validate">
            </div>
        </form>
    </div>
</body>
</html>