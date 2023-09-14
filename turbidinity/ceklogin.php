<?php
session_start();
if(empty($_SESSION['user']) || !isset($_SESSION['user'])){
    header("location:login.php");
}
?>