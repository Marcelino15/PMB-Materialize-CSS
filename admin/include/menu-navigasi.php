<?php
include '../config/database.php';
session_start();
?>
<nav class="blue darken-2">
    <div class="nav-wrapper container">
      <a href="dashboard.php" class="brand-logo">ADMIN</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">DASHBOARD</a></li>
        <li><a href="data_pendaftar.php">DATA PENDAFTAR</a></li>
        <li><a href="data_fakultas.php">DATA FAKULTAS</a></li>
        <li><a href="data_jurusan.php">DATA JURUSAN</a></li>
        <li><a href="logout.php" class="waves-effect waves-light btn red darken-3 pulse">LOGOUT</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="dashboard.php">DASHBOARD</a></li>
    <li><a href="data_pendaftar.php">DATA PENDAFTAR</a></li>
    <li><a href="data_fakultas.php">DATA FAKULTAS</a></li>
    <li><a href="data_jurusan.php">DATA JURUSAN</a></li>
    <li><a href="logout.php" class="waves-effect waves-light btn red darken-3 pulse">LOGOUT</a></li>
  </ul>



