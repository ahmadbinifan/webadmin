
<!DOCTYPE html>
<html>
<head>
	<title>PT. Bintang Rejeki Maju</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PENJUALAN</h2>
		
 
	</center>
 
<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_penjualan");
?>
	<table border="1" style="width: 100%">
			<thead>
				<tr>
				<th>NO</th>
				<th>ID PENJUALAN</th>
				<th>ID PELANGGAN</th>
				<th>NAMA PRODUK</th>
				<th>TANGGAL</th>
				<th>BULAN</th>
				<th>TAHUN</th>
				<th>HARGA</th>
				<th>JUMLAH</th>
				<th>TOTAL</th>
				
			
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				while($q=mysql_fetch_array($query)){
				?>
				<tr>
				<td><?php echo $no++; ?></td>     
				<td><?php echo $q['idPenjualan']?></td>
				<td><?php echo $q['idPelanggan']?></td>
				<td><?php echo $q['namaProduk']?></td>
				<td><?php echo $q['tanggal']?></td>
				<td><?php echo $q['bulan']?></td>
				<td><?php echo $q['tahun']?></td>
				<td><?php echo $q['harga']?></td>
				<td><?php echo $q['jumlah']?></td>
				<td><?php echo $q['total']?></td>
				
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