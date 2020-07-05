<?php require_once('config/main.php');
$query=mysql_query("select * from tb_pelanggan where idPelanggan='$_GET[idPelanggan]'");
$data = mysql_fetch_array($query);

 ?>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Edit Pelanggan</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <input type="hidden" name="idPelanggan" value="<?php echo $data['idPelanggan']; ?>">
	            <input type="hidden" name="type" value="data_pelanggan">
	            <input type="hidden" name="cmd" value="edit">
	            <div class="form-group">
	              <label>Nama Pelanggan</label>
	              <input type="text" name="namaPelanggan" class="form-control" placeholder="NamaPelanggan" value="<?php echo $data['namaPelanggan']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>Alamat</label>
	              <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $data['alamat']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>No. Handphone</label>
	              <input type="text" name="nohp" class="form-control" placeholder="nohp" value="<?php echo $data['nohp']; ?>"/>
	            </div>
	             <div class="form-group">
	              <label>Email</label>
	              <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $data['email']; ?>"/>
	            </div>
         
	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=data_pelanggan" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>