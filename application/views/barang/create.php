<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

</head>

<div id="menuu">
	
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('barang/create/'); ?>
<br><br>
	<br>
    <label for="nama">Nama</label>
    <input type="input" name="nama"  style="float:right; margin-right:1080px" required/><br />
	<br>
    <label for="harga">Harga</label>
    <input type="input" name="harga"  style="float:right; margin-right:1080px" required/><br />
	<br>
	<label for="kategori">Kategori :</label>
		<input type="radio" name="kategori" value="makanan" checked> Makanan
		<input type="radio" name="kategori" value="minuman"> Minuman
		<input type="radio" name="kategori" value="chinese"> Chinese

	<br><br>
	<p>Upload Gambar :</p><?php echo form_upload("pic"); ?>
    <br>
	


    <br />

    <?php echo form_submit("submit","Save"); ?>

</form>
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
