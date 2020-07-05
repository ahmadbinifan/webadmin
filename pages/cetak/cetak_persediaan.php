
<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP </title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		
 
	</center>
 
<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_persediaan");
?>
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
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
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
</body>
</html>