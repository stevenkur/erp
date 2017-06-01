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
       Hitung ROP
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-bag"></i> Home</a></li>
        <li class="active">Hitung ROP</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
    <!-- Main content -->
    <section class="col-lg-7">
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
        <h3>Hitung ROP</h3>
          <table id="barang" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Jumlah</th>
              <th>Harga Beli / unit</th>
              <th>Hitung ROP</th>
           
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
                
              
                    <td><a class="btn btn-success" type="submit" href="<?php echo 'barangpenjualan.php?namabarang='.$result[$i]['namabarang'].'&jumlahbarang='.$result[$i]['jumlahbarang'].'&hargabarang='.$result[$i]['hargabarang']; ?>">Hitung</a></td>
                   
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
        <h3>Hitung EOQ dari <?php echo $_GET['namabarang'];?></h3>
        <form action="hitunghitungrop.php" role="form" name="formbarang" method="post">
          <br>
          
          <div class="form-group">
            <label class="col-lg-4"> Nama </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="namabarang" name="namabarang" size="30" value="<?php echo $_GET['namabarang'];?>">
          </div>
          
          <div class="form-group">
            <label class="col-lg-4">HargaBeli/Unit</label>
            <label class="col-lg-1">:</label>
            <input type="text" id="idpembelian" name="hargabarang" size="30" value="<?php echo $_GET['hargabarang'];?>">
          </div>
          
          <div class="form-group">
            <label class="col-lg-4"> Penjualan/tahun </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="jualtahun" name="jualtahun" size="30" placeholder="Masukkan Penjualan/ tahun">
          </div>
          <div class="form-group">
            <label class="col-lg-4"> Order Fee </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="tenggangwaktu" name="tenggangwaktu" size="30" placeholder="Masukkan Order Fee">
          </div>
           <div class="form-group">
            <label class="col-lg-4"> Booking Fee </label>
            <label class="col-lg-1">:</label>
            <input type="text" id="safetystock" name="safetystock" size="30" placeholder="Masukkan Booking Fee ">
          </div>


          <div class="box-footer" align="right">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
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