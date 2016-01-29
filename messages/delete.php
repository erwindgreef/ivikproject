<?php
/**
 * Delete message
 */
session_start();
include '../functions.php';
deleteItem("messages");
header('location: index.php');
exit;
?>
