<?php
/**
 * Vul als parameter de pagina naam in.
 * Bij het aanroepen van de functie in de navbar wordt de link
 * op de desbetreffende pagina actief.
 */
function navActive($module, $pagina) {
    $url = $_SERVER['PHP_SELF'];
    if ($url == "/$module/$pagina.php"){
        echo "active";
    }
    elseif ($pagina === "index" && $url === "/$module/show.php"){
        echo "active";
    }
    else {
        echo "";
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

/**
 * listTable toont een table van messages of users. Ligt aan de parameter.
 * $Contains = "messages" of "users"
 */
function listTable($contains){
    switch ($contains) {
    case "messages":
        $key1 = "title";
        $key2 = "content";
        break;
    case "users":
        $key1 = "name";
        $key2 = "aboutMe";
        break;
    }
    if (!empty($_SESSION[$contains])){
        foreach ($_SESSION[$contains] as $key => $id) {
            echo "<tr>";
            echo "<td><bold>" . $id[$key1] . "</bold></td>";
            echo "<td>" . substr($id[$key2], 0, 100) . "...</br>" ;
            echo '<a href="show.php?id=' . $key . '">Naar het hele bericht</a></td>';
            echo '<td><a href="update.php?id=' . $key . '"><button type="button" class="btn btn-warning">Wijzig</button></a> <a href="delete.php?id=' . $key . '"><button type="button" class="btn btn-danger">Delete</button></a></td>';
            echo "</tr>";
        }
    }
    else {
        echo "<tr>There are no $contains.</tr>";
    }
}
/**
 * deleteItem, parameter kan zijn "messages" of "users"
 */  
function deleteItem($contains){
    unset($_SESSION[$contains][$_GET['id']]);
}

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

/**
 * Use the name of formfield as parameter $name
 */         
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

/**
 * update ingave in formulier
 * $contains = "messages" of "users"
 * $name = name of field
 */
function update($contains, $name){
    echo $_SESSION[$contains][$_GET['id']][$name];
}

/**
 * pager maakt gebruik van parameters "messages" of "users"
 */
function pager($contains){
    switch ($contains) {
    case "messages":
        $key1 = "Message";
        break;
    case "users":
        $key1 = "User";
        break;
    }
    // Maak een array van de keys van $contains
    $arrayKeys = array_keys($_SESSION[$contains]);
    // Flip deze keys zodat je een nette volgorde in de keys krijgt en de values de id worden van $contains. (bv. keys 0, 1, 2 => values 3, 5, 6, 8)
    $flipArrayKeys = array_flip($arrayKeys);
    // De pager kan nu door de messages lopen met + 1 en -1.
    if ($_GET['id'] > min($arrayKeys)){
    echo '<li class="previous"><a href="show.php?id=' . $arrayKeys[$flipArrayKeys[$_GET['id']] - 1] . '"><span aria-hidden="true">&larr;</span> Older ' . $key1 . '</a></li>';
    }
    if ($_GET['id'] < max($arrayKeys)){
    echo '<li class="next"><a href="show.php?id=' . $arrayKeys[$flipArrayKeys[$_GET['id']] + 1] . '">Newer ' . $key1 . '<span aria-hidden="true">&rarr;</span></a></li>';
    }
}

/**
 * Gebruik parameter "messages" om een message toe te voegen
 * Gebruik parameter "users" om een user toe te voegen
 */

function insert($contains){
    $_SESSION['post'] = $_POST;

    switch ($contains) {
    case "messages":
        $key1 = "title";
        $key2 = "content";
        break;
    case "users":
        $key1 = "name";
        $key2 = "aboutMe";
        break;
    }
    
    if (!empty($_SESSION['post'][$key1]) && (!empty($_SESSION['post'][$key2]))) {

        $_SESSION[$contains][] = $_SESSION['post'];
        unset($_SESSION['post']);
        header('location: index.php');
        exit;
        }
        else {
        header('location: create.php');
        exit;    
        }
}

/**
 * Edit
 * $contains is "messages" or "users"
 */

function edit($contains){
    $_SESSION['post'] = $_POST;
    switch ($contains) {
    case "messages":
        $key1 = "title";
        $key2 = "content";
        break;
    case "users":
        $key1 = "name";
        $key2 = "aboutMe";
        break;
    }

    if (!empty($_SESSION['post'][$key1]) && (!empty($_SESSION['post'][$key2]))) {

        $_SESSION[$contains][$_GET['id']] = $_SESSION['post'];
        unset($_SESSION['post']);
        header('location: index.php');
        exit;
        }
        else {
        $_SESSION[$contains][$_GET['id']] = $_SESSION['post'];
        header('location: update.php?id=' . $_GET['id']);
        exit;    
        }
}

