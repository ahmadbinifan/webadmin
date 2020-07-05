<?php 

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'produk_produk':
			$title = "Produk";
			break;
		case 'data_persediaan':
			$title = "Persediaan";
			break;
		case 'data_pelanggan':
			$title = "Pelanggan";
			break;
		case 'data_penjualan':
			$title = "Penjualan";
			break;
		
		default:
			$title = "Halaman Tidak Ditemukan";
			break;
	}
	echo $title;
}
else {
	echo "Halaman Utama";
}

 ?>