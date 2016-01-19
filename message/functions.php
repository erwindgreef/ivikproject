<?php
/**
 * Vul als parameter de pagina naam in.
 * Bij het aanroepen van de functie in de navbar wordt deze de link
 * op de desbetreffende pagina actief.
 */
function navActive($pagina) {
    $url = $_SERVER['PHP_SELF'];
    if ($url == "/message/$pagina.php"){
        echo "active";
    }
    elseif ($pagina === "index" && $url === "/message/show.php"){
        echo "active";
    }
}

/**
 * Voegt de sr-only class toe aan het menu
 */
function navCurrent($pagina) {
    $url = $_SERVER['PHP_SELF'];
    if ($url == "/message/$pagina.php"){
        echo '<span class="sr-only">(current)</span>';
    } 
}

/**
 * Laat een lijst zien
 */

function messageList(){  
    if (!empty($_SESSION['messages'])){
        foreach ($_SESSION['messages'] as $key => $message) {
            echo "<tr>";
            echo "<td><bold>" . $message["title"] . "</bold></td>";
            echo "<td>" . substr($message["content"], 0, 100) . "...</br>" ;
            echo "<a href=\"show.php?message=" . $key . "\">Naar het hele bericht</a></td>";
            echo '<td><a href="update.php?message=' . $key . '"><button type="button" class="btn btn-warning">Wijzig</button></a> ' .
                 '<a href="delete.php?message=' . $key . '"><button type="button" class="btn btn-danger">Delete</button></a></td>';
            echo "</tr>";
        }
    }
    else {
        echo "<tr>Er zijn nog geen berichten</tr>";
    }
}
    
function deleteMessage(){
    $messageNumber = $_GET['message'];
    unset($_SESSION['messages'][$messageNumber]);
}

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         
function formError($name){
    if (isset($_SESSION['post'][$name])){
        if (empty($_SESSION['post'][$name])) {
            echo $name . ' is required';
        }
    }
}

function formContentSession($name){
    if (isset($_SESSION['post'][$name])){
        if (!empty($_SESSION['post'][$name])) {
            echo $_SESSION['post'][$name];
        }
    }
}

function updateMessage($name){
    $messageNumber = $_GET['message'];
    echo $_SESSION['messages'][$messageNumber][$name];
}