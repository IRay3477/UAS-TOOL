<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aplikasi Perpustakaan</title>
  </head>
  <body>
    <?php
      include("koneksi.php");
      include("function.php");
      menu();

      if(isset($_GET['caripeng'])){
        include("pengeluaran.php");
      } else if(isset($_GET['carikat'])){
        include("kategori.php");
      } else if(isset($_GET['caripem'])){
        include("pembayaran.php");
        } else if(isset($_GET['hal'])){
        $hal=$_GET['hal'];
        if($hal=='pengeluaran'){
          include("pengeluaran.php");
        }else if($hal=='pengtambah'){
          include("pengeluaran_tambah.php");
        }else if($hal=='pengedit'){
          include("pengeluaran_edit.php");
        }else if($hal=='penghapus'){
          include("pengeluaran_hapus.php");
        }else if($hal=='kategori'){
          include("kategori.php");
        }else if($hal=='kattambah'){
          include("kategori_tambah.php");
        }else if($hal=='katedit'){
          include("kategori_edit.php");
        }else if($hal=='kathapus'){
          include("kategori_hapus.php");
        }else if($hal=='pembayaran'){
          include("pembayaran.php");
        }else if($hal=='pemtambah'){
          include("pembayaran_tambah.php");
        }else if($hal=='pemedit'){
          include("pembayaran_edit.php");
        }else if($hal=='pemhapus'){
          include("pembayaran_hapus.php");
      }else{
        beranda();
      }
    }
      footer();
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>