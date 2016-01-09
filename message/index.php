<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <?php

        /**
         * This file will show all messages
         */

        session_start();

        //var_dump($_SESSION['messages']);

        /**
         * Checken of er een bericht in ingevoerd. Zo ja,
         * Dan deze uitvoeren.
         * Zo niet toon bericht geen berichten.
         */
        if (isset($_SESSION['messages'])){
            foreach ($_SESSION['messages'] as $key => $message) {
                //echo $key;
                echo "<h3>" . $message["title"] . "</h3>";
                echo "<p>" . $message["content"] . "</p>" ;
                echo "<a href=\"show.php?message=" . $key . "\">Naar het hele bericht</a>";
                echo "</br>";
            }
        }
        else {
            echo "Er zijn nog geen berichten";
            echo "</br>";
        }
        ?>
        
        <a href="create.php"><button type="button" class="btn btn-primary">Maak een bericht</button></a>
    </body>
</html>