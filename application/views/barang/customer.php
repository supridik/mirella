 <!-- Latest compiled and minified CSS --><head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

</head>

<div class="container">

<body id="home1">
	<table class="table">
		<thead>
<th></th>
			<th>ID</th>
			<th>nama pembeli</th>
			<th>alamat</th>
			<th>nomor telepon</th>
			<th>Menu</th>
			<th>Harga</th>
			<th>jumlah</th>
			<th>tanggal</th>
			<th>total pembayaran</th>
		</thead>
		<?php echo form_open_multipart(site_url('barang/deletebarang')); ?>
		<tbody>
		
		<?php 
            if(is_array($psn)) { foreach($psn as $orderus) { ?>
			<tr>
			<td><input type="radio" name="tomer" value="<?php echo $orderus['id']?>"></td>
			
			<td><?= $orderus['id'] ?></td>
			<td><?= $orderus['name'] ?></td>
			<td><?= $orderus['address'] ?></td>
			<td><?= $orderus['phone'] ?></td>
			<td><?= $orderus['nama'] ?></td>
			<td><?= $orderus['price'] ?></td>
			<td><?= $orderus['quantity'] ?></td>
			<td><?= $orderus['date'] ?></td>
			<td><?= $orderus['price']*$orderus['quantity'] ?></td>
			<?php } ?>
			</tr>
		<?php } ?>
		</tbody>
	</table><br><br>
	<input type="submit" name='action' value="Order Selesai" style="color:black"/>
	
<?php echo form_close(); ?>
	<a href="<?php echo base_url()."barang/view"; ?>"><button>Lihat Menu</button></a>
	<a href="<?php echo base_url()."barang/Logout" ?>"><button>Logout</button</a>
				

</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>