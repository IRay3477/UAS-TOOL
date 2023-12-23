<div class="alert alert-light" role="alert">
  <h2 align="center">FORM Tambah Data Pengeluaran</h2>
  <form method="POST">
  <label for="exampleInputEmail1">Jenis Kategori</label>
  <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">
        <?php
        $tampil = mysqli_query($koneksi, 'SELECT * FROM kategori');
        while($data=mysqli_fetch_array($tampil))
        {
        ?>
        <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
        <?php } ?>
      </select>
      <label for="exampleInputEmail1">Jenis Pembayaran</label>
      <select name="id_metode" class="form-control" id="exampleFormControlSelect1">
        <?php
        $tampil = mysqli_query($koneksi, 'SELECT * FROM metodepembayaran');
        while($data=mysqli_fetch_array($tampil))
        {
        ?>
        <option value="<?php echo $data['id_metode'] ?>"><?php echo $data['nama_metode'] ?></option>
        <?php } ?>
      </select>
    <div class="form-group">
      <label for="exampleInputEmail1">Tanggal Pengeluaran</label>
      <input type="date" name="tanggal" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pengeluaran">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Deskripsi</label>
      <input type="text" name="deskripsi" required class="form-control" id="exampleInputPassword1" placeholder="Deskripsi Pengeluaran">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Jumlah Pengeluaran</label>
      <input type="number" name="jumlah" required class="form-control" id="exampleInputPassword1" placeholder="Jumlah Pengeluaran">
    </div>

    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=pengeluaran" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?php
  if(isset($_POST['simpan'])){
    $id_kategori = $_POST['id_kategori'];
    $id_metode = $_POST['id_metode'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];

    $simpan = mysqli_query($koneksi, 'INSERT INTO pengeluaran(id_kategori,id_metode, tanggal, deskripsi, jumlah) VALUES ("'.$id_kategori.'","'.$id_metode.'","'.$tanggal.'","'.$deskripsi.'","'.$jumlah.'")');
    if ($simpan){
      echo '
        <script>
          alert("Berhasil Menambah Data Pengeluaran");
          window.location="index.php?hal=pengeluaran";
        </script>
        ';
    }
  }
?>