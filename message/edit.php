<?php

/**
 * check updated message
 */

session_start();
include '/functions.php';
$messageNumber = $_GET['message'];
$_SESSION['post'] = $_POST;

foreach($_SESSION['post'] as $key => $value){      
    test_input($_SESSION['post'][$key]);
    }

if (!empty($_SESSION['post']['title']) && (!empty($_SESSION['post']['content']))) {

    $_SESSION['messages'][$messageNumber] = $_SESSION['post'];
    unset($_SESSION['post']);
    header('location: index.php');
    exit;
    }
    else {
    $_SESSION['messages'][$messageNumber] = $_SESSION['post'];
    header('location: update.php?message=' . $messageNumber);
    exit;    
    }
?>

