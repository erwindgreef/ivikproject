<?php
include('/functions.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include_once ("../bootstrap.php"); ?>
        <title></title>
    </head>
    <body>
        <div class="container">
            <?php include '../templates/header.php'; ?>
            <div class="col-md-8">
                <?php

                    /**
                     * This file will show one messages
                     * 
                     */
                    session_start();


                    /**
                     * message nummer wordt uit de URL gehaald met GET
                     */
                    $messageKey = $_GET['message'];  
                    $message = $_SESSION['messages'][$messageKey];

                    echo "<h3>" . $message["title"] . "</h3>";
                    echo "<p>" . $message["content"] . "</p>";
                    echo "</br>";
                    
                    // Maak een array van de keys van de messages
                    $messageKeys = array_keys($_SESSION['messages']);
                    // Flip deze keys zodat je een nette volgorde krijgt van de messages. (bv. keys 0, 1, 2 => values 3, 5, 6, 8)
                    $flipMessageKeys = array_flip($messageKeys);
                    // De pager kan nu door de messages lopen met messageKeys + 1 en -1. De waarde is dan de key van de message ($flipMessageKeys) 
                 
                ?>
                <nav>
                    <ul class="pager">
                        <?php
                        if ($messageKey > min(array_keys($_SESSION['messages']))){
                        echo '<li class="previous"><a href="show.php?message=' . $messageKeys[$flipMessageKeys[$_GET['message']] - 1] . '"><span aria-hidden="true">&larr;</span> Older message</a></li>';
                        }
                        if ($messageKey < max(array_keys($_SESSION['messages']))){
                        echo '<li class="next"><a href="show.php?message=' . $messageKeys[$flipMessageKeys[$_GET['message']] + 1] . '">Newer message<span aria-hidden="true">&rarr;</span></a></li>';
                        }
                        ?>
                    </ul>
                    <a href="index.php"><button style="margin-top: 0px;" type="button" class="btn btn-primary">Terug naar alle berichten</button></a>
                </nav>
                
            </div>
        </div>
    </body>
</html>