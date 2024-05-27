<a href="<?php echo site_url('berita/create'); ?>" title="Tambah Data"> <button 
type="button">Tambah</button> </a>
<!--Table-->
<table border="1" width=70%>
<tr>
<th>No</th>
<th>Kategori</th>
<th>Tanggal</th>
<th>Status</th>
<th>Judul</th>
<th>Author</th>
<th>Aksi</th>
</tr>
<?php
$no=1;
foreach ($read->result_array() as $row) {
?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['nama_kategori'] ?></td>
<td><?php echo $row['tgl_berita'];echo' ';echo 
$row['jam_berita'] ?></td>
<td><?php echo $row['st_berita'] ?></td>
<td><?php echo $row['judul_berita'] ?></td>
<td><?php echo $row['kd_admin'] ?></td>
<td>
<?php
if($row['st_berita']=='Publik'){
?>
<a href="<?php echo 
site_url('berita/status/'.$row['id_berita']).'/'.'Blokir'; ?>" title="Ubah status ke 
Blok">
<button class="">Blokir</button></a>
<?php
}elseif($row['st_berita']=='Blokir'){
?>
<a href="<?php echo 
site_url('berita/status/'.$row['id_berita']).'/'.'Publik'; ?>" title="Ubah status ke 
Publik">
<button class="">Publik</button></a>
<?php
}
?>
<a href="<?php echo site_url('berita/edit/'.$row['id_berita']) 
?>" title="Ubah">
<button class="">Ubah</button></a>
<a href="<?php echo 
site_url('berita/delete/'.$row['id_berita']) ?>" title="Delete" onclick="javascript: 
return confirm('Yakin Mau dihapus <?php echo $row['judul_berita'];?>')">
<button class="">Hapus</button></a>
</td>
</tr>
<?php
$no++;
}
?>
</table>
<!--EndTable-->