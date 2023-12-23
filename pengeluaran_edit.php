<?php
  $id		= $_GET['id'];
  $tampil	= mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE id_pengeluaran='$id'");
  $data		= mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
  <h2 align="center">FORM Ubah Data Pengeluaran</h2>
  <form method="POST">
    <div class="form-group">
      <input type="hidden" name="id_pengeluaran" value="<?php echo $id ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pengeluaran">
      <label for="exampleInputEmail1">Tanggal Pengeluaran</label>
      <input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Pengeluaran">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Deskripsi Pengeluaran</label>
      <input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Deskripsi ">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Jumlah</label>
      <input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Jumlah">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jenis Kategori</label>
      <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">
        <?php
        $tampil = mysqli_query($koneksi, 'SELECT * FROM kategori');
        while($data=mysqli_fetch_array($tampil)){
          if($data['id_kategori']==$data2['id_kategori'])
          {
            echo '<option selected="selected" value="'.$data[id_kategori].'">'.$data[nama_kategori].'</option>';
          } else{
            echo '<option value="'.$data[id_kategori].'">'.$data[nama_kategori].'</option>';
          }
        }?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jenis Pembayaran</label>
      <select name="id_metode" class="form-control" id="exampleFormControlSelect1">
        <?php
        $tampil = mysqli_query($koneksi, 'SELECT * FROM metodepembayaran');
        while($data=mysqli_fetch_array($tampil)){
          if($data['id_metode']==$data2['id_metode'])
          {
            echo '<option selected="selected" value="'.$data[id_metode].'">'.$data[nama_metode].'</option>';
          } else{
            echo '<option value="'.$data[id_metode].'">'.$data[nama_metode].'</option>';
          }
        }?>
      </select>
    </div>

    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan Perubahan">
    <a href="index.php?hal=pengeluaran" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?php
  if(isset($_POST['simpan'])){
    $id_pengeluaran = $_POST['id_pengeluaran'];
    $id_kategori = $_POST['id_kategori'];
    $id_metode = $_POST['id_metode'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];

    $ubah = mysqli_query($koneksi, 'UPDATE pengeluaran SET id_kategori="'.$id_kategori.'",id_metode="'.$id_metode.'",tanggal="'.$tanggal.'",deskripsi="'.$deskripsi.'",jumlah="'.$jumlah.'" WHERE id_pengeluaran="'.$id_pengeluaran.'"');
    if ($ubah){
      echo '
        <script>
          alert("Berhasil Mengubah Data Pengeluaran");
          window.location="index.php?hal=pengeluaran";
        </script>
        ';
    }
  }
?>