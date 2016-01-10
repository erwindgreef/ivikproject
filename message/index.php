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
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/message/index.php">Messageboard</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/message/index.php">Messages <span class="sr-only">(current)</span></a></li>
                            <li><a href="/message/create.php">Create</a></li>
                        </ul> 
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <header><h1>Messages</h1></header>
            <div class="col-md-8">
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
                        echo "<p>" . substr($message["content"], 0, 10) . "...</p>" ;
                        echo "<a href=\"show.php?message=" . $key . "\">Naar het hele bericht</a>";
                        echo "</br>";

                    }
                }
                else {
                    echo "Er zijn nog geen berichten";
                    echo "</br>";
                }
                ?>

                <a href="create.php"><button  style="margin-top: 30px;" type="button" class="btn btn-primary">Maak een bericht</button></a>
            </div>
        </div>
    </body>
</html>