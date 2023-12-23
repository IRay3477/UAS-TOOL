<h2 align="center">Data Pengeluaran</h2>

<form action="index.php?hal=pengeluaran&" method="get">
  <div class="form-row align-items-center">
  	<div class="col-sm-3 my-1">
     <label class="sr-onyl" for="inlineFormInputName">Name</label>
     <input type="text" name="caripeng" class="form-control" id="inlineFormInputName" placeholder="Pencarian Data Pengeluaran">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Cari Data Pengeluaran</button>
    </div>
    <div class="col-sm-3 my-1">
    	<a href="index.php?hal=pengtambah" class="btn btn-primary">Mulai Nabung!</a>
    </div>
  </div>
</form>

<?php
	if(isset($_GET['caripeng'])){
	$cari = $_GET['caripeng'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
	}
?>

	<table class="table">
	  <thead>
	  	<tr>
	  	  <th scope="col">ID Pengeluaran</th>
	  	  <th scope="col">ID Kategori</th>
	  	  <th scope="col">ID Pembayaran</th>
		  <th scope="col">Tanggal</th>
		  <th scope="col">Deskripsi</th>
		  <th scope="col">Jumlah</th>
	  	  <th scope="col">Aksi</th>
	  	</tr>
	  </thead>
	  <?php
	  if(isset ($_GET['caripeng'])){
	  	$cari = $_GET['caripeng'];
	  	$tampil = mysqli_query($koneksi,"SELECT * FROM pengeluaran WHERE id_pengeluaran like '%".$cari."%'");
	  }else{
	  	$tampil = mysqli_query($koneksi,"SELECT * FROM pengeluaran");
	  }
	  while ($data = mysqli_fetch_Array($tampil)){
	 ?>
	 <tbody>
	 	<tr>
	 	  <th scope="row"><?php echo $data['id_pengeluaran']; ?></th>
	 	  <td><?php echo $data['id_kategori']; ?></td>
	 	  <td><?php echo $data['id_metode']; ?></td>
		  <td><?php echo $data['tanggal']; ?></td>
		  <td><?php echo $data['deskripsi']; ?></td>
		  <td><?php echo $data['jumlah']; ?></td>
	 	  <td>
	 		 <?php
	 		 echo'
	 		   <a href="index.php?hal=pengedit&id='.$data['id_pengeluaran'].'" class="btn btn-warning">Edit</a>
	 		   <a href="index.php?hal=penghapus&id='.$data['id_pengeluaran'].'" class="btn btn-danger">Hapus</a>
	 		  ';?>
	 	  </td>
	 	</tr>
	 </tbody>
	 <?php
	  	}
	 ?>
	 </table>