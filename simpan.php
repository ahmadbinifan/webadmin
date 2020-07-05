<?php 

require "config/main.php";
$type = trim($_POST['type']);
$cmd = trim($_POST['cmd']);

switch ($type) {
	case 'data_produk':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO tb_produk(namaProduk,total,keterangan)
			VALUES(
					'$_POST[namaProduk]',
					'$_POST[total]',
					'$_POST[keterangan]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE tb_produk SET 
				namaProduk='$_POST[namaProduk]',
				total='$_POST[total]',
				keterangan='$_POST[keterangan]'
				WHERE idProduk='$_POST[idProduk]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_produk');
		break;
		case 'data_persediaan':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO tb_persediaan(namaProduk,harga,jumlah)
			VALUES('$_POST[namaProduk]',
					'$_POST[harga]',
					'$_POST[jumlah]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE tb_persediaan SET namaProduk='$_POST[namaProduk] ',
				harga='$_POST[harga]',
				jumlah='$_POST[jumlah]'			
				WHERE idPersediaan='$_POST[idPersediaan]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_persediaan');
		break;
		case 'data_pelanggan':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO tb_pelanggan(namaPelanggan,alamat,nohp,email)
			VALUES('$_POST[namaPelanggan]',
					'$_POST[alamat]',
					'$_POST[nohp]',
					'$_POST[email]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE tb_pelanggan SET namaPelanggan='$_POST[namaPelanggan] ',
				alamat='$_POST[alamat]',
				nohp='$_POST[nohp]',
				email='$_POST[email]'			
				WHERE idPelanggan='$_POST[idPelanggan]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_pelanggan');
		break;
	case 'data_penjualan':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO tb_penjualan(idPelanggan,namaProduk,tanggal,bulan,tahun,harga,jumlah,total)
			VALUES(
			'$_POST[idPelanggan]',
			'$_POST[namaProduk]',
			'$_POST[tanggal]',
			'$_POST[bulan]',
			'$_POST[tahun]',
			'$_POST[harga]',
			'$_POST[jumlah]',
			'$_POST[total]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE tb_penjualan SET 
				idPelanggan='$_POST[idPelanggan]',
				namaProduk='$_POST[namaProduk]',
				tanggal='$_POST[tanggal]',
				bulan='$_POST[bulan]',
				tahun='$_POST[tahun]',
				harga='$_POST[harga]',
				jumlah='$_POST[jumlah]',
				total='$_POST[total]'
				WHERE idPenjualan='$_POST[idPenjualan]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_penjualan');
		break;
	case 'admin':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO admin(nama,username,password)
			VALUES('$_POST[nama]',
			'$_POST[username]',
			'$_POST[password]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE admin SET nama='$_POST[nama]',
				username='$_POST[username]',
				password='$_POST[password]'
				WHERE id=".$_POST[id]);
			
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=admin');
		break;
	
	default:
		require_once("pages/404.php");
		break;
}

 ?>