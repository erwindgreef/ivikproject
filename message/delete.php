<?php
session_start();
include '/functions.php';
deleteMessage();
header('location: index.php');
exit;
?>