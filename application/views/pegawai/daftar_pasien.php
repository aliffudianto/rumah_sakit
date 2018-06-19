<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Pasien</title>

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
     
      <link rel="stylesheet" href="<?php echo base_url(); ?> assets/datatables/dataTables.min.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/datatables/dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#kamar_active').DataTable();
} );
</script>

<style>
  
body{
  background: #f4f4f4;
}

.navbar{
  min-height: 33px !important;
  margin-bottom: 0;
  border-radius: 0;

}
.navbar-nav> li>a, .navbar-brand{
  padding-top: 6px !important;
  padding-bottom: 0;
  height: 33px;

}

.main-color-bg{
  background-color: #095f59;
  color: #ffffff !important;
}


/*Header */

#header{
  background: #333333;
  color: #ffffff;
  padding-bottom: 10px;
  margin-bottom: : 15px;
}

#header .create{
  padding-top: 20px;
}

.dash-box{
  text-align: center;
}

#footer{
  background: #333333;
  color: #ffffff;
  text-align: center;
  padding: 30px;
  margin-top: 30px;

}



.navbar-default {
  background-color: #095f59;
  border-color: #689a9b;
}
.navbar-default .navbar-brand {
  color: #efee24;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #010800;
}
.navbar-default .navbar-text {
  color: #efee24;
}
.navbar-default .navbar-nav > li > a {
  color: #efee24;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #010800;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #010800;
  background-color: #689a9b;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #010800;
  background-color: #689a9b;
}
.navbar-default .navbar-toggle {
  border-color: #689a9b;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #689a9b;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #efee24;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #efee24;
}
.navbar-default .navbar-link {
  color: #efee24;
}
.navbar-default .navbar-link:hover {
  color: #010800;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #efee24;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #010800;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #010800;
    background-color: #689a9b;
  }
}

/*Breadcrumb*/

.breadcrumb{
  background: #cccccc;
  color: #333333;
}
.breadcrumb a{
  color: #333333;
}
</style>

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
            <li class="active"><a href="index.html">Welcome, Madhav</a></li>
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
    
  <?php echo form_open_multipart('pegawai/createPasien'); ?>
  <?php echo validation_errors(); ?>
      <div class="form-group">
        <label for="">Username : </label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
      </div>
      
      <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
      </div>

      <div class="form-group">
        <label for="">Nama Pasien</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien">
      </div>
      
      <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
      </div>

      <div class="form-group">
        <label for="">No Hp</label>
        <input type="text" class="form-control" id="no" name="no" placeholder="Masukkan No Hp">
      </div>

      <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto" size="20">
      </div>
      <div class="form-group">
        <input type="hidden" class="form-control" name="akses" size="20" value="user">
      </div>
      
      
      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Submit</button>
      <?php echo form_close(); ?>
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