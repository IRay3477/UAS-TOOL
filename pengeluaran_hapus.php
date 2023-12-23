<?php
  $id     = $_GET['id'];
  $tampil = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE id_pengeluaran='$id'");
  $data   = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
  <h2 align="center">Hapus Data Pengeluaran</h2>
  <form method="POST">
    <div class="form-group">
      <div class="alert alert-danger" role="alert">
      <h6>Yakin Akan Menghapus Data Pengeluaran <b><?php echo $data['tanggal'] ?></b> ?</h6>
      <input type="hidden" name="id_pengeluaran" value="<?php echo $id ?>" required class="form-control">
      <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
      <a href="index.php?hal=pengeluaran" class="btn btn-secondary">Batal</a>
    </div>
  </div>
</form>
</div>

<?php
  if(isset($_POST['hapus'])){
    $id_pengeluaran  = $_POST['id_pengeluaran'];

    $ubah = mysqli_query($koneksi, 'DELETE FROM pengeluaran WHERE id_pengeluaran="'.$id_pengeluaran.'"');
    if ($ubah){
      echo '
        <script>
        alert ("Berhasil Menghapus Data Pengeluaran");
        window.location="index.php?hal=pengeluaran";
        </script>
          ';
    }
  }
?>