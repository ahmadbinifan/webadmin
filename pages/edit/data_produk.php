<?php require_once('config/main.php'); 
$query=mysql_query("select * from tb_produk where idProduk=".$_GET['idProduk']);

$data = mysql_fetch_array($query);
?>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Edit Produk</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="idProduk" value="<?php echo $data['idProduk']; ?>">
	           <input type="hidden" name="type" value="data_produk">
	            <input type="hidden" name="cmd" value="edit">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Id Produk</label>
	              <input type="text" class="form-control" name="id produk" placeholder="Id Produk" disabled="disabled" value="<?php echo $data['idProduk']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>Nama Produk</label>
	              <input type="text" class="form-control" name="namaProduk" placeholder="namaProduk" value="<?php echo $data['namaProduk']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>Total</label>
	              <input type="text" class="form-control" name="total" placeholder="total" value="<?php echo $data['total']; ?>"/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Keterangan</label>
	              <textarea class="form-control" rows="3" name="keterangan" placeholder="keterangan"><?php echo $data['keterangan']; ?></textarea>
	            </div>
	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=data_user" class="btn btn-danger"> <i class="fa fa-times"></i>  Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>