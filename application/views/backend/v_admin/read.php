<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('Admin/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
 <tr>
 <td>No</td>
 <td>Kode</td>
 <td>Nama</td>
 <td>Email</td>
 <td>Hp</td>
 <td>Password</td>
 <td>Aksi</td>
 </tr>
 <?php
 $no=1;
 //$read yang diambil dari control function index
 foreach ($read->result_array() as $row) {
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $row['kd_admin'] ?></td>
 <td><?php echo $row['nama_admin'] ?></td>
 <td><?php echo $row['email_admin'] ?></td>
 <td><?php echo $row['hp_admin'] ?></td>
 <td><?php echo $row['password_admin'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Admin/edit/'.$row['kd_admin'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Admin/delete/'.$row['kd_admin'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['nama_admin'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>
</table>