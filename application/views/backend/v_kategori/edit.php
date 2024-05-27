<form class="" action="<?php echo site_url('Kategori/update/'.$edit['id_kategori']) 
?>" method="post">
 <label>Id Kategori</label><br>
 <input type="text" name="id_kategori" disabled value="<?php echo 
$edit['id_kategori'] ?>"><p></p>
 <input type="text" name="id_kategori" hidden value="<?php echo
$edit['id_kategori'] ?>"><p></p>
 <label>Nama Kategori</label><br>
 <input type="text" name="nama_kategori" value="<?php echo 
$edit['nama_kategori'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Admin') ?>"><button type="button" 
name="button">Batal</button></a>
</form>