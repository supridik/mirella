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
<body id="home1">
<div class="container">


	<table class="table">
		<thead>
			<th></th>
			<th>kode_barang</th>
			<th>nama_barang</th>
			<th>Harga</th>
			<th>Image</th>
			<th>Action</th>
		</thead>
		<?php echo form_open(site_url('barang/delete')); ?>
		<tbody>
		<?php
		foreach ($barang as $barang_item) { ?>
			<tr>
			<td><input type="checkbox" name="tetet" value="<?php echo $barang_item['id']?>"></td>
				<td><?php echo $barang_item['id']; ?></td>
				<td><?php echo $barang_item['nama']; ?></td>
				<td><?php echo $barang_item['harga']; ?></td>
				<td><img src="<?php echo base_url($barang_item['pic']); ?>" height="42" width="42" /> </td>
				<td>
					<a href="<?php echo base_url()."barang/update"; ?>"><button>Hapus</button></a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<?php echo form_close(); ?>
<a href="<?php echo base_url()."barang/create" ?>"><button>Tambah Menu</button></a>
<a href="<?php echo base_url()."barang/update" ?>"><button>Ubah Harga</button></a>
<a href="<?php echo base_url()."barang/Logout" ?>"><button>Logout</button</a>
<a href="<?php echo base_url()."barang/order" ?>"><button>Back</button</a>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>