<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>portalci</title>
</head>
<body>
 <h2>Halaman Kategori</h2>
</body>
</html>
<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('Kategori/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
 <tr>
 <td>No</td>
 <td>Id Kategori</td>
 <td>Nama Kategori</td>
 <td>Aksi</td>
 </tr>
 <?php
 $no=1;
 //$read yang diambil dari control function index
 foreach ($read->result_array() as $row) {
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $row['id_kategori'] ?></td>
 <td><?php echo $row['nama_kategori'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Kategori/edit/'.$row['id_kategori'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Kategori/delete/'.$row['id_kategori'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['nama_kategori'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>
</table>