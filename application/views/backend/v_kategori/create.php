<form class="" action="<?php echo site_url ('Kategori/save') ?>" method="post">
 <label>Id Kategori</label><br>
 <input type="text" name="id_kategori" value=""><p></p>
 <label>Nama Kategori</label><br>
 <input type="text" name="nama_kategori" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Admin') ?>"><button type="button"
name="button">Batal</button></a>
</form>