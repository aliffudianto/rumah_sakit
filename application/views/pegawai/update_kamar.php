<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Kamar</title>

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" /> 

     
      <link rel="stylesheet" href="<?php echo base_url(); ?> assets/datatables/dataTables.min.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/datatables/dataTables.min.js"></script>

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
            <li class="active"><a href="index.html">Welcome,  <?php echo $user['nama_pegawai'] ?></a></li>
            <li><a href="login.html">Logout</a></li>
          
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
          <div class="col-md-2">
                   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Add Pages</a></li>
    <li><a href="#">Add Posts</a></li>
    <li><a href="#">Add Users</a></li>
  </ul>
</div> 
          </div>
        </div>
      </div>
    </header>
<br>

<legend><h1 class="text-center">Pendaftaran Pasien</h1></legend>
<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
      <a href="<?php echo site_url()?>/pegawai/halamanPegawai" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        Dashboard <span class="badge">12</span>
      </a>
       
       <a href="<?php echo site_url()?>/pegawai/profile" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile<span class="badge">12</span></a>

      <a href="<?php echo site_url()?>/pegawai/halamanPasien" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Data Pasien<span class="badge">12</span></a>
      
      <a href="<?php echo site_url()?>/pegawai/dataPasien" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Data Transaksi<span class="badge">126</span></a>
      
      <a href="<?php echo site_url()?>/pegawai/dataKamar/" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Data Kamar<span class="badge">25</span></a>
    </div>
    </div>
    
  <?php echo form_open_multipart('pegawai/updateKamar/'.$this->uri->segment(3)); ?>
  <?php echo validation_errors(); ?>
  <div class="table-responsive">
    <table class="table table-hover" id="kamar_active">
      <tbody>
      <tr>
          <div class="form-group">
            <td><label for="">Nama Kamar</label></td> 
            <td><input type="text" class="form-control" id="nama" name="nama" value="<?php echo $kamar[0]->nama_kamar ?>"></td>
          </div>
      </tr>

      <tr>
        <div class="form-group">
          <td><label for="">Ketersediaan</label></td>
          <td><input type="text" class="form-control" id="ketersediaan" name="ketersediaan" value="<?php echo $kamar[0]->ketersediaan ?>"></td>
        </div>
      </tr>

      <tr>
          <div class="form-group">
            <td><label for="">Harga</label></td>
            <td><input type="text" class="form-control" id="harga" name="harga" value="<?php echo $kamar[0]->harga ?>"></td>
          </div>
      </tr>

      <tr>
          <div class="form-group">
            <td><label for="">Nama Pasien </label> </td>
            <td><input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?php echo $kamar[0]->nama_pasien ?>"></td>
          </div>
      </tr>

      <tr>
          <div class="form-group">
            <td><label for="">Tanggal</label></td>
            <td><input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo $kamar[0]->tanggal ?>"></td>
          </div>
      </tr>

      <tr>
          <div class="form-group">
            <td><label for="">Foto</label></td>
            <td><input type="file" class="form-control" name="foto" size="20" value="<?php echo $kamar[0]->foto ?>"></td>
          </div>
      </tr>
      </tbody>
      <td>
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Submit</button>
          <?php echo form_close(); ?>
      </td>
      </div>
</table>
</div>
</div>
</div>
  <footer id="footer">
    <p>CodeIgniter 2018</p>
  </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</section>
  
  </body>
</html>