<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Pasien</title>

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tampilan/tampilan.css" /> 

      <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

</head>

  <body>
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile Pasien : <?php echo $user['nama_pasien']?> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url()?>/assets/uploads/<?php echo $user['foto']?>" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Id Pasien :</td>
                        <td><?php echo $user['id_pasien']?></td>
                      </tr>

                      <tr>
                        <td>Nama:</td>
                        <td><?php echo $user['username']?></td>
                      </tr>
                                
                      <tr>
                        <td>Alamat:</td>
                        <td><?php echo $user['alamat']?></td>
                      </tr>
                      
                      <tr>
                        <td>No Hp</td>
                        <td><?php echo $user['no_hp']?></td>
                      </tr>
                      
                      <tr>
                        <td>Kamar Dirawat</td>
                        <td><?php echo $user['fk_kamar']?></td>
                      </tr>

                      <tr>
                        <td>Sebagai</td>
                        <td><?php echo $user['level']?></td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Edit</a>
                  <a href="javascript:history.go(-1)" class="btn btn-primary">Back</a>
                </div>
              </div>
            </div>
                 
            
          </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  </body>
</html>