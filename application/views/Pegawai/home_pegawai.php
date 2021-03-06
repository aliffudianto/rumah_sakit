<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  
    <title>Halaman Admin Rumah Sakit</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" /> 


   
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>  

</head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Halaman Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url()?>/pegawai/halamanPegawai">Dashboard</a></li>
           <!--  <li><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo site_url()?>/pegawai/profile/<?php echo $user['username']?>"?>Welcome, <?php echo $user['nama_pegawai'] ?></a></li>
            <li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small><font color="#33FF33">Rumah Sakit</font></small></h1>
          </div>
        </div>
      </div>
    </header>
<br>
  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </section>


<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
      <a href="<?php echo site_url()?>/pegawai/halamanPegawai" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        Dashboard <span class="badge"><?php echo $level ?></span>
      </a>
      
      <a href="<?php echo site_url()?>/pegawai/profile/<?php echo $username ?>" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile<span class="badge"><?php echo $level ?></span></a>
      <a href="<?php echo site_url()?>/pegawai/halamanPasien/<?php echo $username ?>" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Data Pasien<span class="badge"><?php echo $jumlah ?></span></a>
     
      <a href="<?php echo site_url()?>/pegawai/viewTransaksi" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Data Transaksi<span class="badge"><?php echo $nTransaksi ?></span></a>
      
      <a href="<?php echo site_url()?>/pegawai/dataKamar/" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Data Kamar<span class="badge"><?php echo $nKamar ?></span></a>
    </div>

<!--         <div class="well">
          <h4>Disk Space Used</h4>
          <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
<h4>Bandwidth Used</h4>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    40%
  </div>
</div>
        </div> -->
      </div>
      <div class="col-md-9">
          <div class="panel panel-default">
  <div class="panel-heading" style="background-color:  #095f59;">
    <h3 class="panel-title"><div class="text-center">Aktivitas Website </div></h3>
  </div>

  <div class="panel-body">
   <div class="col-md-3">
     <div class="well dash-box">
      <a href="<?php echo site_url()?>/pegawai/kamarAktif">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>
       <h4>Kelola Kamar</h4>
       <br>
      </a>
     </div>
   </div>
    
   <div class="col-md-3">
     <div class="well dash-box">
      <a href="<?php echo site_url()?>/pegawai/createPasien">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>
       <h4>Pendaftaran Pasien</h4>
      </a>
     </div>
   </div>

   <div class="col-md-3">
     <div class="well dash-box">
      <a href="<?php echo site_url()?>/pegawai/tambahPegawai">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>
       <h4>Tambah Pegawai</h4>
      </a>
     </div>
   </div>


   <?php if($tersedia>0){?>
   <div class="col-md-3" data-toggle="modal" data-target="#myModal">
    <?php }else{ ?>
   <div class="col-md-3" data-toggle="modal" data-target="#myModal1">
     <?php }?>

     <a href="#">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>
       <h4>Daftar Kamar</h4>
      </a>
     </div>
   </div>

   
      <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemesanan Kamar</h4>
        </div>
        <div class="modal-body">
          Seluruh Kamar Telah Terpakai
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemesanan Kamar</h4>
        </div>

        <div class="modal-body">
          <?php echo form_open_multipart('pesanKamar/addKamar'); ?>
         <?php echo validation_errors(); ?>

        <div class="form-group">
          <label for="">Nama Kamar : </label>
          <select class="form-control" name="kamar_kosong">
            <?php foreach ($kamar as $key) { ?>
              <option value="<?php echo $key->nama_kamar?>"> <?php echo $key->id_kamar ?> <?php echo $key->nama_kamar?></option>
            <?php } ?>
          </select>
        </div>

      <div class="form-group">
        <label for="">Id Pasien</label>
          <select class="form-control" name="nama_pasien">
            <?php foreach ($pasien as $key) { ?>
              <option value="<?php echo $key->nama_pasien?>"> <?php echo $key->nama_pasien?></option>
            <?php } ?>
          </select>
      </div>

      <div class="form-group">
        <label for="">Tanggal Rawat</label>
        <input type="date" class="form-control" id="tgl" name="tgl" >
      </div>
      
        <!-- <input type="hidden" class="form-control" id="harga" name="harga" value="<?php echo $harga?>">
 -->


      

      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <?php echo form_close(); ?>

      
    </div>
  </div>





    </div>
  </div>
</div>
<!--Latest User-->
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  #095f59;>
    <h3 class="panel-title">Latest Users</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-5">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>

           
            
            <div class="form-group">

            <?php echo form_open_multipart('transaksi/biayaKamar/');?>
              <label for="id_pasien" class="cols-sm-2 control-label">Id Pasien</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="id_pasien" id="id_pasien"  placeholder="Masukkan Id Pasien"/>
                </div>
              </div>
            </div>
      <!-- <a href="<?php echo site_url()?>/transaksi/biayaKamar"> -->
       <h4>Pembayaran Pasien</h4>
      <?php echo form_close(); ?>

      </a>
     </div>
   </div>
  </div>
</div>

      </div>
    </div>
  </div>
</section>


  <footer id="footer">
    <p>CodeIgniter 2018</p>
  </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>