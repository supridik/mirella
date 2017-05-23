<html>
    <head>
   	 <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mirella Jaya Delivery</title>
       
	
    <!-- clear_cart
    ================================================== -->
	<script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('anda yakin ingin menghapus semua pesanan?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>shopping/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
	
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
   <body id="menuu">

	<div>
		<div id="menumakanan">
			<div class="category-tab"><!--category-tab-->
				<div class="col-sm-14">
					<ul class="nav nav-tabs">
						<li><a href="<?php echo base_url(); ?>">Mirella Jaya</a></li>
					    <li class="active"><a href="#">Menu</a></li>
					    <li style="float:right;"><a href="<?php echo base_url();?>shopping/cek">Checkout</a></li>
					</ul>
				</div>
						
				<div class="tab-content">
					<?php
						foreach ($makanan as $makan) {
						$id = $makan['id'];
						$name = $makan['nama'];
						$price = $makan['harga'];
					?> 
					<div class="tab-pane fade active in" id="makanan" >
						<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url() . $makan['pic']?>"/>
										<h2 style="font-size:1vw"><?php echo $price; ?></h2>
										<p style="font-size:1vw"><?php echo $name; ?></p>
										<?php
                        
										// Create form and send values in 'shopping/add' function.
										echo form_open('shopping/add');
										echo form_hidden('id', $id);
										echo form_hidden('name', $name);
										echo form_hidden('price', $price);
										?>
										<?php
										$btn = array(
											'class' => 'fg-button teal',
											'value' => 'Add to Cart',
											'name' => 'action',
											'style' => 'font-size:0.8vw; width:30%; min-width:50px; max-width:500px;'
										);
                        
										// Submit Button.
										echo form_submit($btn);
										echo form_close();
										?>
                        
									</div>											
								</div>
							</div>	
						</div>								
					</div>					
					<?php } ?>
				</div>
			</div>
			
					<div class="page" style="text-align:center; color:white"><?php 
						echo $this->pagination->create_links();
					?></div>
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

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>
        

       
      
    </body>
</html>
