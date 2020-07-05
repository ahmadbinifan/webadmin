<?php require_once('config/main.php');
$data_produk = mysql_query("select * from tb_produk");
$data_persediaan=mysql_query("select * from tb_persediaan");
$data_pelanggan=mysql_query("select * from tb_pelanggan");
$data_penjualan=mysql_query("select * from tb_penjualan");
 ?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_produk); ?></h3>
          <p>Produk</p>
        </div>
        <div class="icon">
          <i class="fa fa-star-o"></i>
        </div>
        <a href="./?page=data_produk" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_persediaan); ?></h3>
          <p>Persediaan</p>
        </div>
        <div class="icon">
          <i class="fa fa-th-list"></i>
        </div>
        <a href="./?page=data_persediaan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_pelanggan); ?></h3>
          <p>Pelanggan</p>
        </div>
        <div class="icon">
          <i class="fa fa-group"></i>
        </div>
        <a href="./?page=data_pelanggan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_penjualan); ?></h3>
          <p>Penjualan</p>
        </div>
        <div class="icon">
          <i class="fa fa-money"></i>
        </div>
        <a href="./?page=data_penjualan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>