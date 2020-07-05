<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_pelanggan");
?>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Pelanggan ( Terdapat <?php echo mysql_num_rows($query); ?> Data)</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <?php if (isset($_SESSION['username'])): ?>
    <a href="tambah.php?tambah=data_pelanggan" style="margin-bottom: 10px;" class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Tambah Pelanggan</a><?php endif; ?>
              
   <?php if ($_SESSION['username'] == "eksekutif") : ?>
   	<a href="cetak_pelanggan.php" style="margin-bottom: 10px;" class="btn btn-danger" > <i class="fa fa-print"></i> Cetak Laporan</a><?php endif; ?>

    <br>
		<table class="table table-bordered" id="tabel">
		<thead>
			 <tr>
		    <th>NO</th>
		    <th>ID PELANGGAN</th>
			<th>NAMA PELANGGAN</th>
			<th>ALAMAT</th>
		    <th>NO. HANDPHONE</th>
		    <th>EMAIL</th>
		    <?php if (isset($_SESSION['username'])): ?>
		    <th></th>
			<?php endif; ?>
		  </tr>
		</thead>
		<tbody>
			<?php
		  $no=1;
		  while($q=mysql_fetch_array($query)){
		  ?>
		  <tr>
		    <td><?php echo $no++; ?></td>          
		    <td><?php echo $q['idPelanggan']?></td>
			<td><?php echo $q['namaPelanggan']?></td>
			<td><?php echo $q['alamat']?></td>
		    <td><?php echo $q['nohp']?></td>
		    <td><?php echo $q['email']?></td>
		    <?php if (isset($_SESSION['username'])): ?>
		    <td>
		    	<a class="btn btn-success" href="edit.php?edit=<?php echo $_GET['page']; ?>&idPelanggan=<?php echo $q['idPelanggan']; ?>">Edit</a>
		    	<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="hapus.php?hapus=<?php echo $_GET['page']; ?>&idPelanggan=<?php echo $q['idPelanggan']; ?>">Hapus</a>
		    </td>
			<?php endif; ?>
		  </tr>
		  <?php
		  }
		  ?>
		</tbody>
		</table>
	</div>
</div>

<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
 <script type="text/javascript">
	 $(document).ready(function() {
	 	$('#tabel').dataTable({
	          "bPaginate": true,
	          "bLengthChange": true,
	          "bFilter": true,
	          "bSort": true,
	          "bInfo": true,
	          "bAutoWidth": true
	    });
	 });
</script>