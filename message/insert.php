<?php

/**
 * message is post
 */

session_start();

$_SESSION['messages'][] = $_POST;

header('location: index.php');
exit;



