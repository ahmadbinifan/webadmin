<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Produk</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <input type="hidden" name="type" value="data_produk">
	            <input type="hidden" name="cmd" value="tambah">
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Nama Produk</label>
	              <input type="text" class="form-control" name="namaProduk" placeholder="namaProduk"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Total</label>
	              <input type="text" class="form-control" name="total" placeholder="total" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Keterangan</label>
	              <input type="text" class="form-control" name="keterangan" placeholder="keterangan" value=""/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_user" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>