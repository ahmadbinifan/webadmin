<?php 
if (isset($_GET['hapus'])) {
	require "config/main.php";
	switch ($_GET['hapus']) {
		case 'data_produk':
			mysql_query("DELETE FROM tb_produk WHERE idProduk=".$_GET['idProduk']);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'data_persediaan':
			mysql_query("DELETE FROM tb_persediaan WHERE idPersediaan=".$_GET['idPersediaan']);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'data_pelanggan':
			mysql_query("DELETE FROM tb_pelanggan WHERE idPelanggan=".$_GET['idPelanggan']);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'data_penjualan':
			mysql_query("DELETE FROM tb_penjualan WHERE idPenjualan=".$_GET[idPenjualan]);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'admin':
			mysql_query("DELETE FROM admin WHERE id=".$_GET[id]);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		
		default:
			require_once("pages/404.php");
			break;
	}
}
else {
	require_once("pages/home.php");
}

 ?>