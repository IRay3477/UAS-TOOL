<?php

function menu(){
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Pelacak Pengeluaran</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=pengeluaran">Data Pengeluaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=kategori">Data Kategori</a>
        </li>
        <li class="nav-item">
          <div class="col-md-12 ml-7">
          <a class="btn btn-primary" href="index.php?hal=logout"  onclick="return confirm('Apakah Kamu yakin akan keluar dari website pameran Admin ini ??');">logout</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
}

function footer(){
?>
  <div class="alert alert-dark" role="alert" align="center">
  Selamat Datang
</div>
<?php
}
?>


