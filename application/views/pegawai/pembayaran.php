<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Pembayaran</title>

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
            <li class="active"><a href="<?php echo site_url()?>/pegawai/profile/?>">Welcome,  <?php echo $user['nama_pegawai'] ?></a></li>
            <li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Halaman Admin <small><font color="#33FF33">Rumah Sakit</font></small></h1>
          </div>
        </div>
      </div>
    </header>
<br>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <div class="text-left">
          <li class="active"><h1>Pembayaran User : </h1></li>
        </div>
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
    <body>
        <h1 class="text-center">Halaman Pembayaran</h1>

        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <legend>Nama Pasien:</legend>
                </div>
                <!-- panel preview -->
                <div class="col-sm-4">
                    <h4>Total Pembayaran Pasien:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form">
                    <?php echo form_open_multipart('transaksi/bayarKamar/'.$this->uri->segment(3));?>
                        <?php foreach ($total as $key){ ?>
                            
                            <div class="form-group">
                                <label for="id_pasien" class="col-sm-3 control-label">Nama Pasien </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?php echo $key->fk_pasien?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="total" name="total" value="<?php echo $key->jumlah?>">
                                </div>
                            </div> 
                        </div>
                </div> <!-- / panel preview -->
                        <?php } ?>
                </div>
                
                <div class="col-sm-4">
                    <h4>Pembayaran Non Tunai:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form">

                            <div class="form-group">
                                <label for="id_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $key->fk_pasien?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                                </div>
                            </div> 
                        </div>
                </div> <!-- / panel preview -->
                    <div class="row">
                        <div class="col-xs-12">
                            <hr style="border:1px dashed #dddddd;">
                            <a href="javascript:history.go(-1)" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Pembayaran Non Tunai</button>
                            <?php echo form_close(); ?>

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
  
  </body>
</html>