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
        echo $key;
        echo "<h3>" . $message["title"] . "</h3>";
        echo "<p>" . $message["content"] . "</p>" ;
    }
}
else {
    echo "Er zijn nog geen berichten";
}
?>

