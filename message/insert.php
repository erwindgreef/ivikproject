<?php

/**
 * check created message
 */

session_start();
include '/functions.php';
$_SESSION['post'] = $_POST;

foreach($_SESSION['post'] as $key => $value){      
    test_input($_SESSION['post'][$key]);
    }

if (!empty($_SESSION['post']['title']) && (!empty($_SESSION['post']['content']))) {

    $_SESSION['messages'][] = $_SESSION['post'];
    unset($_SESSION['post']);
    header('location: index.php');
    exit;
    }
    else {
    header('location: create.php');
    exit;    
    }
?>