<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_persediaan");
?>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Persediaan ( Terdapat <?php echo mysql_num_rows($query); ?> Data)</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <?php if (isset($_SESSION['username'])): ?>
     <a href="tambah.php?tambah=data_persediaan" style="margin-bottom: 10px;" class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Tambah Persediaan</a><?php endif; ?>
     <?php if ($_SESSION['username'] == "eksekutif") : ?> <a href="cetak_persediaan.php" style="margin-bottom: 10px;" class="btn btn-danger"> <i class="fa fa-print"></i> Cetak Laporan</a>
 <?php endif; ?>
		<table class="table table-bordered" id="tabel">
		<thead>
			<tr>
		    <th>NO</th>
		    <th>ID PERSEDIAAN</th>
		    <th>NAMA PRODUK</th>
		    <th>HARGA</th>
		    <th>JUMLAH</th>
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
		    <td><?php echo $q['idPersediaan']?></td>
		    <td><?php echo $q['namaProduk']?></td>
		    <td><?php echo $q['harga']?></td>
		    <td><?php echo $q['jumlah']?></td>
		    <?php if (isset($_SESSION['username'])): ?>
		    <td>
		    	<a class="btn btn-success" href="edit.php?edit=<?php echo $_GET['page']; ?>&idPersediaan=<?php echo $q['idPersediaan']; ?>">Edit</a>
		    	<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="hapus.php?hapus=<?php echo $_GET['page']; ?>&idPersediaan=<?php echo $q['idPersediaan']; ?>">Hapus</a>
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