<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Medically a Medical Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>

  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Medically Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); }
  </script>
  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="<?php echo base_url()?>assets/css/bootstrap1.css" rel="stylesheet" type="text/css" media="all">

  <!--//booststrap end-->

  <!-- font-awesome icons -->
  <link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/chocolat.css" type="text/css" media="screen" />
  <!-- gallery-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css" type="text/css" media="all">
  <!-- clients-->

  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css" type="text/css" media="screen" />
  <!-- banner text slider-->
  <!--stylesheets-->
  <link href="<?php echo base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' media="all">
  <!-- banner text slider-->

  <link href="//fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600" rel="stylesheet">
  <!--//style sheet end here-->
</head>

<body>
  <div class="banner-w3" id="home">
    <div class="w3-agile-logo">
      <div class=" head-wl">
        <div class="agileinfo-social-grids">
          <ul>
            <li class="active"><font color="white" ><a href="<?php echo site_url()?>/pasien/profilePasien/<?php echo $user['username']?>"?>Welcome, <?php echo $user['nama_pasien'] ?></font></a></li>
          </ul>
        </div>
        <div class="w3-header-top-right">
          <div class="email-right">
            <p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:mail@example.com" class="info"> info@medically.co.id</a></p>

          </div>
          <div class="w3-header-top-right-text">

            <p><span class="fa fa-phone" aria-hidden="true"></span> (031)798 456</p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="header-w3layouts">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <h1><a class="navbar-brand " href="home_pasien.php">Medically</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
            <li><a class="page-scroll" href="<?php echo site_url()?>/pasien/index">Home</a></li>
            <li><a class="page-scroll scroll" href="#home">About</a></li>
            <li><a class="page-scroll " href="<?php echo site_url()?>/pasien/layanan">Layanan</a></li>
            <li><a class="page-scroll " href="<?php echo site_url()?>/pasien/kamar">Daftar Kamar</a></li>
            <li><a class="page-scroll scroll" href="#contact">Contact</a></li>
            <li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
          </ul>
          <br></br>
          <br></br>

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
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>
  </div>
</div>

  <!--//about -->
  <!--services -->
  
  <!--//services -->
  <!--gallery-->
  
        
          
  <!--//gallery-->
  <!-- team-->
  
          

        
  <!-- //testimonials-->
  <!--subscribe-->

  <!--//subscribe-->
  <!--contact-->
  <div class="contact" id="contact">
    <div class="container">
      <h3 class="title">CONTACT US</h3>

      <div class=" col-md-7 contact-address">
        <h4>Medically</h4>
        <div class="para-left">
          <p>Sebagai rumah sakit pilihan pertama yang berkualitas prima, kami menyediakan berbagai fasilitas layanan sesuai kebutuhan masyarakat dengan akses yang mudah dan ramah. 
          </p>
        </div>
        <div class="contact-left">
          <div class="address-contact-left ">
            <h5>Address:</h5>
            <p><span class="fa fa-home"></span> Malang </p>
          </div>
          <div class="address-contact-left ">
            <h5>Phones:</h5>
            <p><span class="fa fa-phone"></span> +9900887766</p>
            <p><span class="fa fa-phone"></span> +11 222 333</p>
          </div>
          <div class="address-contact-left ">
            <h5>Email:</h5>
            <p><span class="fa fa-envelope"></span> <a href="mailto:info@example.com">info@medically.co.id</a></p>
          </div>
        </div>
      </div>
      <div class=" col-md-5 contact-top">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.60094834752!2d112.58405792765772!3d-7.977619465897827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C+Malang+City%2C+East+Java%2C+Indonesia!5e0!3m2!1sen!2sin!4v1530497204263" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="clearfix"> </div>


    </div>
  </div>
  <!--//contact-->

  <!--footer-->

  <div class="footer">
    <nav>
      <ul class="nav-buttom">
        <li><a class="page-scroll" href="<?php echo site_url()?>/pasien/index">Home</a></li>
        <li><a class="page-scroll scroll" href="#home">About</a></li>
        <li><a class="page-scroll " href="<?php echo site_url()?>/pasien/layanan">Layanan</a></li>
        <li><a class="page-scroll " href="<?php echo site_url()?>/pasien/kamar">Daftar Kamar</a></li>
        <li><a class="page-scroll scroll" href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="container">
    <div class="colr-row col-md-6  ">
      <div class="col-md-6 col-sm-6 col-xs-6  bottom-head bottm-grid">
        <h2><a href="index.html">Medically</a></h2>
        <span class="cap"></span>
        <div class="clearfix"> </div>
      </div>
      
      <div class="col-md-6 col-sm-6 col-xs-6 copyright bottm-grid">
        <h3>Follow us</h3>
        <div class="icons">
          <ul>
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-rss"></span></a></li>
            <li><a href="#"><span class="fa fa-vk"></span></a></li>
          </ul>

        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      </div>
      <div class="colr-row  col-md-6">
      <div class="col-md-6 col-sm-6 col-xs-6 one bottm-grid">
        <h3>About us</h3>
        <p> Visi : Menjadi Rumah Sakit Pilihan Pertama Yang Berkualitas Prima 
            Motto : Layanan Prima adalah Komitmen Kami </p>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 three bottm-grid">
        <h3>Contact</h3>
        <div class="addres up-out">
          <p><span class="fa fa-map-marker icons-left" aria-hidden="true"></span>Malang</p>

          <p><span class="fa fa-phone icons-left" aria-hidden="true"></span>Call us:+9900887766</p>

        </div>
        <div class="clearfix"> </div>
      </div>
      <!-- //Copyright -->
      <div class="clearfix"> </div>
    </div>
    </div>
  </div>
  <footer>
    <p>&copy;2018 Medically. All Rights Reserved</a></p>
  </footer>
  <!--menu script-->
  <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery-2.2.3.min.js'></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
  <!--//menu script-->
  <!--FlexSlider banner-->

  <script defer src="<?php echo base_url()?>assets/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!--End-slider-script-->
  <!-- OnScroll-Number-Increase-JavaScript -->
  <script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //OnScroll-Number-Increase-JavaScript -->
  <script src="<?php echo base_url()?>assets/js/jquery.chocolat.js"></script>

  <!--light-box-files -->
  <script type="text/javascript">
    $(function () {
      $('.w3_agile_gallery_grid a').Chocolat();
    });
  </script>
  <!-- //gallery -->
  <!--client carousel -->
  <script src="<?php echo base_url()?>assets/js/owl.carousel.js"></script>
  <script>
    $(document).ready(function () {
      $("#owl-demo").owlCarousel({
        items: 1,
        itemsDesktop: [768, 1],
        itemsDesktopSmall: [414, 1],
        lazyLoad: true,
        autoPlay: true,
        navigation: true,

        navigationText: false,
        pagination: true,

      });

    });
  </script>
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/move-top.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->

  <!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function () {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */

      $().UItoTop({ easingType: 'easeOutQuart' });

    });
  </script>
  <!-- //here ends scrolling icon -->
</body>

</html>