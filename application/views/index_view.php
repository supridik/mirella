<html>
    <head>
	
	
   	 <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mirella Jaya Delivery</title>
 
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
	   <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">

    <!-- Slider
    ================================================== -->
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
    </head>
    <body>


  <body>

    <!-- Off Canvas Navigation
    ================================================== -->
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas" id="navbar"> <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <div class="add-margin"></div>
        <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="<?php echo base_url(); ?>shopping/get_makan" class="page-scroll">menu</a></li>
		</ul>
	</div> <!--- End Off Canvas Side Menu -->

    <!-- Home Section -->
    <div id="home">
        <div class="container text-center">
            <!-- Navigation -->
            <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav>

            <div class="content">
                <h4 style="font-size:50px">Mirella Jaya</h4>
                <hr>
                <div class="header-text btn">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>
	
            <a href="#bagian1" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>
	
	
	<div id="bagian1" class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
		<div id="makan" class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
				<h1 id="keterangan" style="font-size:20px; font-size: 1.5vw">Makanan</h2>
					<p id="keterangan" style="font-size:20px; font-size: 1.5vw">Kami memasak makanan ketika anda melakukan pemesanan. kami sangat ingin membuat anda puas. Kami sajikan makanan hangat di tempat anda. Ayam kami di dapat dari ayam ayam pilihan yang diproses dengan hati. Dan dimasak dengan temperature yang pas , sehingga bakteri dalam ayan mati sedangkan rasa tetap lezat.kami menggunakan alat masak yang higienis serta membungkus makanan dengan rapat. Sehingga anda tidak perlu khawatir dengan kesehatan anda dan keluarga.
					</p>
					<a href="<?php echo base_url(); ?>shopping/get_makan" class="page-scroll"><button type="submit" value="Order" name="order" class="pesan pesan1"> order </button></a>
			</div>
			<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
				<img id="gambar" src="<?php echo base_url(); ?>img/about/makanan.jpg"></img>
			</div>
		</div>

		<div id="deliv" class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
	
			<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
				<img id="gambar" src="<?php echo base_url(); ?>img/about/deliv.jpg"></img>
			</div>
			
			<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
				<h1 id="keterangan" style="font-size:20px; font-size: 1.5vw">Delivery</h2>
				<p id="keterangan" style="font-size:20px; font-size: 1.5vw">Kami merupakan restoran pertama di kalitidu yang siap mengantarkan makanan kesukaan anda tepat ke depan rumah anda. Kami menggunakan pengendara lokal untuk mengirim makanan ke rumah anda, sehingga anda tidak perlu menunggu lama untuk makan makanan kesukaan anda. Kami inginkan makanan anda masih hangat saat sampai dirumah anda dan tentunya masih nikmat untuk disantap bersama keluarga anda tanpa membuang waktu untuk pergi ke restoran.
				</p>
				<a href="<?php echo base_url(); ?>shopping/get_makan" class="page-scroll"><button type="submit" value="Order" name="order" class="pesan pesan1"> order </button>
			</div>
		</div>
	</div>          
		
	<script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jasny-bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["We make Fresh & healthly Food", "Fast Delivery Only 30 minutes" ],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
      });
    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>
        
    <!-- Contact Section -->
    <div id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Us</h2>
                <hr>
            </div>
            <div class="space"></div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    <address>
                        <strong>Address</strong><br>
                        <br>
                        Mirellajaya.com<br>
                        Desa Mojodelik RT 18 RW 04 Kec Gayam , Kab Bojonegoro<br>
                        62115, Indonesia<br>
                        Phone: +6285235658859/+6282334827138
                        <ul class="social">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                          </ul>
                    </address>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
