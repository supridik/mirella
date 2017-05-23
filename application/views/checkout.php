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
					    <li><a href="<?php echo base_url();?>shopping/get_makan">Menu</a></li>
					    <li  class="active" style="float:right;"><a href="#">Checkout</a></li>
					</ul>
				</div>
						
				<div>
                    <div id='tag'>
				        <!-- Formget Fugo logo image -->
				        <img src="<?php echo base_url(); ?>images/head_cart.png"/>
			        </div>
			    <div id="cart" style="color:black">
				    <div id = "heading">
					    <h2 align="center">Pesanan Anda</h2><br><br>
				    </div>
            
                    <div id="text"> 
				        <?php  $cart_check = $this->cart->contents();
            
        				// If cart is empty, this will show below message.
        				 if(empty($cart_check)) {
        					echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
        			} ?> </div>
            
					<table id="table" border="0" cellpadding="5px" cellspacing="1px" style="color:black">
					<?php
					// All values of cart store in "$cart". 
					if ($cart = $this->cart->contents()): ?>
						<tr id= "main_heading">
							<td>Serial</td>
							<td>Nama</td>
							<td>Harga</td>
							<td>Jumlah</td>
							<td>Total Harga</td>
							<td>Cancel Product</td>
						</tr>
						<?php
						 // Create form and send all values in "shopping/update_cart" function.
						echo form_open('shopping/update_cart');
						$grand_total = 0;
						$i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                       <?php echo $i++; ?>
                            </td>
                            <td>
                      <?php echo $item['name']; ?>
                            </td>
                            <td>
                                Rp <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                Rp <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                              
                            <?php 
                            // cancle image.
                            $path = "<img src='http://localhost/codeigniter_cart/img/cart_cross.jpg' width='25px' height='20px'>";
                            echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><b>Order Total: Rp<?php 
                        
                        //Grand Total.
                        echo number_format($grand_total, 2); ?></b></td>
                        
                        <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="5" align="right"><input type="button" class ='fg-button teal' value="Clear Cart" onclick="clear_cart()">
                            
                            <?php //submit button. ?>
                            <input type="submit" class ='fg-button teal' value="Update Cart">
                            <?php echo form_close(); ?>
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <input type="button" class ='fg-button teal' value="Place Order" onclick="window.location = 'billing_view'"></td>
                    </tr>
					<?php endif; ?>
				</table>
			    </div>		
		    </div>
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

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>
        

       
      
    </body>
</html>
