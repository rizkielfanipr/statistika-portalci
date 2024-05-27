<!--Form-->
<form method="post" action="<?php echo site_url('berita/save') ?>" 
enctype="multipart/form-data">
 <label>Judul Berita</label><br>
 <input type="text" name="judul_berita" class="" placeholder="Masukan 
Judul Berita" value="" required oninvalid="this.setCustomValidity('Judul 
Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>
 <label>Kategori</label><br>
 <select name="id_kategori" class="" required>
 <option value=0 selected>- Pilih kategori -</option>
 <?php
 foreach ($kategori->result_array() as $r) {
 ?>
 <option value="<?php echo $r['id_kategori'] ?>"><?php echo 
$r['nama_kategori']; ?></option>
 <?php } ?>
 </select><p></p>
 <label>Isi Berita</label><br>
 <textarea name="isi_berita" class="" id="" placeholder="isi Berita" 
rows="20" cols="80" required></textarea><p></p>
 <label>Foto Berita</label><br>
 <input type="file" name="img_berita" required><p></p>
 <button class="" type="submit">Simpan </button>
 <a href="<?php echo site_url('berita') ?>"><button class="" 
type="button">Batal</button></a>
</form>
<!--EndForm-->