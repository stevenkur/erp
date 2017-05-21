<!DOCTYPE html>
<html>
<head>
  <?php include('header.php'); ?>
</head>
    

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include('dashboard.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penjualan Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Home</a></li>
        <li class="active">Penjualan Barang</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
    <!-- Main content -->
    <section class="col-lg-7">
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
        <h3>Penjualan Barang</h3>
          <table id="barang" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Jumlah</th>
              <th>Harga Beli / unit</th>
              <th>Jual</th>
           
            </tr>
            </thead>
            <tbody>
            <?php
              require 'selectpembelian.php';
              for($i=0; $i<sizeof($hasil); $i++)
              {
                echo '
                  <tr>
                    <td>'.$hasil[$i]['namabarang'].'</td>
                    <td>'.$hasil[$i]['jumlahbarang'].'</td>
                    <td>'.$hasil[$i]['hargabarang'].'</td>';?>
                
              
                    <td><a class="btn btn-success" type="submit" href="<?php echo 'barangpenjualan.php?namabarang='.$result[$i]['namabarang'].'&jumlahbarang='.$result[$i]['jumlahbarang'].'&hargabarang='.$result[$i]['hargabarang']; ?>">Jual</a></td>
                   
            <?php echo '</tr>';}?>                
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </section>

    <!-- Main content -->
    <section class="col-lg-5">
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
        <h3>Beli <?php echo $_GET['namabarang'];?></h3>
        <form action="jualbarang.php" role="form" name="formbarang" method="post">
          <br>
          
          <div class="form-group">
            <label class="col-lg-4"> Nama </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="namabarang" name="namabarang" size="30" value="<?php echo $_GET['namabarang'];?>">
          </div>
          <div class="form-group">
            <label class="col-lg-4"> JumlahBarang </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="jumlahbarang" name="jumlahbarang" size="30" value="<?php echo $_GET['jumlahbarang'];?>">
          </div>
          <div class="form-group">
            <label class="col-lg-4">HargaBeli/Unit</label>
            <label class="col-lg-1">:</label>
            <input type="text" id="idpembelian" name="hargabarang" size="30" value="<?php echo $_GET['hargabarang'];?>">
          </div>
          <div class="form-group">
            <label class="col-lg-4">Id Penjualan</label>
            <label class="col-lg-1">:</label>
            <input type="text" id="idpembelian" name="hargajualbarang" size="30" placeholder="Masukkan Id Penjualan">
          </div>
          <div class="form-group">
            <label class="col-lg-4"> JumlahDijual </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="jumlahbarang" name="jumlahdijual" size="30" placeholder="Masukkan Jumlah Barang">
          </div>
          <div class="form-group">
            <label class="col-lg-4"> HargaJual/Unit </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="hargabarang" name="hargabarang" size="30" placeholder="Masukkan Harga Jual">
          </div>

          <div class="box-footer" align="right">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Jual</button>
          </div>
        </form>
        </div>
          <!-- /.box-body -->
        </div>
    </section>
    </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Steven Kurniawan's Project</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function() {
    $('#barang').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
    });
  });
</script>
</body>
</html>