
<!DOCTYPE html>
<html>
<head>
	<title>PT. Bintang Rejeki Maju</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PELANGGAN</h2>
		
 
	</center>
 
<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_pelanggan");
?>
		<table border="1" style="width: 100%">
		<thead>
			 <tr>
		    <th>NO</th>
		    <th>ID PELANGGAN</th>
			<th>NAMA PELANGGAN</th>
			<th>ALAMAT</th>
		    <th>NO. HANDPHONE</th>
		    <th>EMAIL</th>
		  
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
		  
		  </tr>
		  <?php
		  }
		  ?>
		</tbody>
		</table>

	 <script>
		window.print();
	</script>

</body>
</html>