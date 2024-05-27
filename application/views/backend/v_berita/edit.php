<!--Form-->
<form method="post" action="<?php echo 
site_url('berita/update/'.$edit['id_berita']) ?>" enctype="multipart/form-data">
 <label>Judul Berita</label><br>
 <input type="text" name="judul_berita" class="" placeholder="Masukan Judul 
Berita" value="<?php echo $edit['judul_berita'] ?>" required 
oninvalid="this.setCustomValidity('Judul Berita Harus Di Isi')" 
oninput="setCustomValidity('')"><p></p>
 <label>Tanggal</label><br>
 <input type="date" name="tgl_berita" class="" value="<?php echo 
$edit['tgl_berita'] ?>" required oninvalid="this.setCustomValidity('Judul Berita 
Harus Di Isi')" oninput="setCustomValidity('')"><p></p>
 <label>Jam</label><br>
 <input type="time" name="jam_berita" class="" value="<?php echo 
$edit['jam_berita'] ?>" required oninvalid="this.setCustomValidity('Judul Berita 
Harus Di Isi')" oninput="setCustomValidity('')"><p></p>
 <label>kategori</label><br>
 <select name="id_kategori" class="" required>
 <option value="<?php echo $edit['id_kategori'] ?>"><?php echo 
$edit['nama_kategori'] ?></option>
 <?php
 foreach ($kategori->result_array() as $r) {
 ?>
 <option value="<?php echo $r['id_kategori'] ?>"><?php echo 
$r['nama_kategori']; ?></option>
 <?php } ?>
 </select><p></p>
 <label>Isi Berita</label><br>
 <textarea name="isi_berita" class="" id="" placeholder="isi Berita" rows="20" 
cols="80" required><?php echo $edit['isi_berita'] ?></textarea>
 <p></p>
 <img src="<?php echo base_url('assets/img_berita/'.$edit['img_berita']) ?>" 
 width="400" height="300"><br>
 <label>Ganti Foto</label><br>
 <input type="file" name="img_berita"><p></p>
 <button class="" type="submit">Perbaharui</button>
 <a href="<?php echo site_url('admin') ?>"><button class="" 
type="button">Batal</button></a>
</form>
<!--EndForm-->