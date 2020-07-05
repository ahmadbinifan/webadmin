<?php require_once('config/main.php');
$query=mysql_query("select * from tb_penjualan where idPenjualan=".$_GET['idPenjualan']);
$data = mysql_fetch_array($query);
 ?>

<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Edit Penjualan</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="idPenjualan" value="<?php echo $data['idPenjualan']; ?>">
	          <input type="hidden" name="type" value="data_penjualan">
	          <input type="hidden" name="cmd" value="edit">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Id Pelanggan</label>
	              <input type="text" name="idPelanggan" class="form-control" placeholder="idPelanggan" value="<?php echo $data['idPelanggan']; ?>"/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Nama Produk</label>
	              <input type="text" class="form-control" name="namaProduk" placeholder="namaProduk" value="<?php echo $data['namaProduk']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Tanggal</label>
	              <input type="text" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo $data['tanggal']; ?>"/>
	            </div>
	              <label>Bulan</label>
	              <input type="text" class="form-control" name="bulan" placeholder="bulan" value="<?php echo $data['bulan']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Tahun</label>
	              <input type="text" class="form-control" name="tahun" placeholder="tahun" value="<?php echo $data['tahun']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Harga</label>
	              <input type="text" class="form-control" name="harga" placeholder="harga" value="<?php echo $data['harga']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Jumlah</label>
	              <input type="text" class="form-control" name="jumlah" placeholder="jumlah" value="<?php echo $data['jumlah']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Total</label>
	              <input type="text" class="form-control" name="total" placeholder="total" value="<?php echo $data['total']; ?>"/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=data_penjualan" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>