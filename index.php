<?php
// toggle error reporting
ini_set('display_errors', 1);
error_reporting(~0);
include 'includes/autoLoad.inc.php';

$users = new UsersView();

$users->showUser(1);
?>
