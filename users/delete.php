<?php
/**
 * Delete user
 */
session_start();
include '/../functions.php';
deleteItem("users");
header('location: index.php');
exit;
?>

