<?php
session_start();
if ($_SESSION['status'] != "aktif") {
  header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tampil dan Download Raport </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-latest.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Program Raport</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    </div>

    <span class="navbar-text">
      <a href="logout.php">Logout</a>
    </span>
  </nav>
