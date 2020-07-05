<?php require_once('config/main.php');
$query=mysql_query("select * from tb_persediaan where idPersediaan='$_GET[idPersediaan]'");
$data = mysql_fetch_array($query);

 ?>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Edit Pembelian</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <input type="hidden" name="idPersediaan" value="<?php echo $data['idPersediaan']; ?>">
	            <input type="hidden" name="type" value="data_persediaan">
	            <input type="hidden" name="cmd" value="edit">
	            <div class="form-group">
	              <label>Nama Produk</label>
	              <input type="text" name="namaProduk" class="form-control" placeholder="NamaProduk" value="<?php echo $data['namaProduk']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>Harga</label>
	              <input type="text" name="harga" class="form-control" placeholder="harga" value="<?php echo $data['harga']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>Jumlah</label>
	              <input type="text" name="jumlah" class="form-control" placeholder="jumlah" value="<?php echo $data['jumlah']; ?>"/>
	            </div>
         
	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=data_persediaan" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>