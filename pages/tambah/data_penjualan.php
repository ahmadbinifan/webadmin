<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Penjualan</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          	<input type="hidden" name="type" value="data_penjualan">
	           <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Id Pelanggan</label>
	              <input type="text" class="form-control" name="idPelanggan" placeholder="idPelanggan" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Nama Produk</label>
	              <input type="text" class="form-control" name="namaProduk" placeholder="namaProduk" value="" />
	            </div>
	              <div class="form-group">
	              <label>Tanggal</label>
	              <input type="text" class="form-control" name="tanggal" placeholder="tanggal" value=""/>
	            </div>
	              <div class="form-group">
	              <label>Bulan</label>
	              <input type="text" class="form-control" name="bulan" placeholder="bulan" value=""/>
	            </div>
	              <div class="form-group">
	              <label>Tahun</label>
	              <input type="text" class="form-control" name="tahun" placeholder="tahun" value=""/>
	            </div>
	           
	              <div class="form-group">
	              <label>Harga</label>
	              <input type="text" class="form-control" name="harga" placeholder="harga" value=""/>
	            </div>
	            
	              <div class="form-group">
	              <label>Jumlah</label>
	              <input type="text" class="form-control" name="jumlah" placeholder="jumlah" value=""/>
	            </div>
	             
	              <div class="form-group">
	              <label>Total</label>
	              <input type="text" class="form-control" name="total" placeholder="total" value=""/>
	            </div>

	           
	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_penjualan" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>