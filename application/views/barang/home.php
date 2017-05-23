
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
<p>create</p>
<?php echo form_open(base_url('barang/create')) ?>
 <label for="id">ID</label>
    <input type="input" name="kode_barang" /><br />

    <label for="nama">Nama</label>
    <input type="input" name="nama_barang" /><br />

    <label for="harga">Harga</label>
    <input type="input" name="harga" /><br />

    <label for="deskripsi">Deskripsi</label>
    <input type="input" name="kategori" /><br />


    <input type="submit" name="submit" value="Create new barang" />
<?php echo form_close(); ?><br>
<a href="<?php echo base_url().'read'  ?>"<button>Read</button></a>
</body>
</html>