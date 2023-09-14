<?php
// include "ceklogin.php";
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turbidinity</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="icon" type="image/png" href="assets/turbiditymeter.png" />
</head>
<nav class="bg-light  navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="index.php"><i class="fas fa-book">Turbidinity</i>&nbsp;</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick="javascript: return confirm('Anda yakin ingin logout ?')"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </li>
        </ul>
    </div>
</nav>