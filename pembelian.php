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
        Pembelian Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Home</a></li>
        <li class="active">Pembelian Barang</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
    <!-- Main content -->
    <section class="col-lg-7">
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
        <h3>Pembelian Barang</h3>
          <table id="barang" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Stock</th>
              <th>Beli</th>
              
            </tr>
            </thead>
            <tbody>
            <?php
              require 'selectbarang.php';
              for($i=0; $i<sizeof($hasil); $i++)
              {
                echo '
                  <tr>
                    <td>'.$hasil[$i]['idbarang'].'</td>
                    <td>'.$hasil[$i]['namabarang'].'</td>
                    <td>'.$hasil[$i]['stockbarang'].'</td>';?>            
                    <td><a class="btn btn-success" type="submit" href="<?php echo 'barangpembelian.php?idbarang='.$hasil[$i]['idbarang'].'&namabarang='.$hasil[$i]['namabarang'].'&stockbarang='.$hasil[$i]['stockbarang'];?>">Beli</a></td>
                   
            <?php echo '</tr>';}?>                
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </section>

    <!-- Main content -->
    <!-- <section class="col-lg-5">
      <div class="box box-primary"> -->
        <!-- /.box-header -->
        <!-- <div class="box-body">
        <h3>Pembelian Barang</h3>
        <form action="insertbarang.php" role="form" name="formbarang" method="post">
          <br>
          <div class="form-group">
            <label class="col-lg-2"> ID </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="idbarang" name="idbarang" size="30" placeholder="Masukkan ID Barang">
          </div>
          <div class="form-group">
            <label class="col-lg-2"> Nama </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="namabarang" name="namabarang" size="30" placeholder="Masukkan Nama Barang">
          </div>
          <div class="form-group">
            <label class="col-lg-2"> Stock </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="stockbarang" name="stockbarang" size="30" placeholder="Masukkan Stock Barang">
          </div>
          <div class="form-group">
            <label class="col-lg-2"> Jumlah </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="jumlahbarang" name="jumlahbarang" size="30" placeholder="Masukkan Jumlah Barang">
          </div>
          <div class="form-group">
            <label class="col-lg-2"> Harga/ Unit </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="hargabarang" name="hargabarang" size="30" placeholder="Masukkan Harga Barang">
          </div>

          <div class="box-footer" align="right">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Beli</button>
          </div>
        </form>
        </div> -->
          <!-- /.box-body -->
    <!--     </div>
    </section>
    </div>
    </section>
  </div> -->
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