<?php
include('/functions.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <?php include "../bootstrap.php"; ?>
        <title></title>
    </head>
    <body>
        <div class="container">
            <header>
                <?php include '../templates/header.php'; ?>
                <h1>Messages</h1>
            </header>
            <div class="col-md-10">
                <?php
                session_start();
                //Show all messages
                include '../templates/list.php';
                ?>
                <a href="create.php"><button  style="margin-top: 30px;" type="button" class="btn btn-primary">Maak een bericht</button></a>
                
            </div>
        </div>
    </body>
</html>