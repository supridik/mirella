<?php echo validation_errors(); ?>

<?php echo form_open('barang/update'); ?>

    <label for="id">ID</label>
    <input type="input" name="id" /><br />


    <label for="harga">Harga</label>
    <input type="input" name="harga" /><br />

<?php
$tambah = array(
    'name'        => 'operasi',
   'id'          => 'operasi_jumlah',
   'value'       => '1',
   'checked'     => TRUE,
);
$kurangi = array(
    'name'        => 'operasi',
   'id'          => 'operasi_kurangi',
   'value'       => '0',
   'checked'     => FALSE,
);
    echo form_radio($tambah). "Tambah";
    echo "<br />";
    echo form_radio($kurangi). "Kurangi";
    echo "<br />";
 ?>

    <input type="submit" name="submit" value="Update barang"/>
</form>
<a href="<?php echo base_url()."barang/view" ?>"><button>Back</button</a>
