
<!DOCTYPE html>
<html>
<head>
	<title>PT. Bintang Rejeki Maju</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PERSEDIAAN</h2>
		
 
	</center>
 
<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_persediaan");
?>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
		    <th width="1%">NO</th>
		    <th width="2%">ID PERSEDIAAN</th>
		    <th width="10%">NAMA PRODUK</th>
		    <th width="3%">HARGA</th>
		    <th width="2%">JUMLAH</th>
		   
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