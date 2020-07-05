<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Pelanggan</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          	<input type="hidden" name="type" value="data_pelanggan">
	            <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Nama Pelanggan</label>
	              <input type="text" name="namaPelanggan" class="form-control" placeholder="namaPelanggan" value=""/>
	            </div>
	                <div class="form-group">
	              <label>Alamat</label>
	              <input type="text" name="alamat" class="form-control" placeholder="alamat" value=""/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>No. Handphone</label>
	              <input type="text" class="form-control" name="nohp" placeholder="nohp" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Email</label>
	              <input type="text" class="form-control" name="email" placeholder="email" value=""/>
	            </div>
	         
	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_pelanggan" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>