<?php 
require_once('./dbcon.php');
session_start();
if($_SESSION) {
    session_destroy();
    header('location: login.php');
}
session_abort();
?>