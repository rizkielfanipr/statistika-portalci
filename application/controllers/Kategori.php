<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller{  
 /*
 $view berfungsi untuk membaca file view seperti read.php, create.php
 dan edit.php dengan lokasi folder views/backend/v_kategori/
 */
 private $view = "backend/v_kategori/";
 //memanggil control Kategori/index dalam keadaan refresh
 private $redirect = "Kategori";
 public function __construct()
 {
 parent::__construct();
 //control Kategori menghubungkan model M_kategori
 $this->load->model('M_kategori');
 }
 function index(){
 //memanggil model M_kategori dengan function GetAll
 $read = $this->M_kategori->GetAll();
 $data = array(
 //'read' variabel yang akan dipanggil pada view read.php
 'read'=> $read
 );
 /*
 dengan $this->view artinya memanggil private $view="backend/v_kategori/"
 dilanjutkan dengan 'read' untuk memanggil read.php
 */
 $this->load->view($this->view.'read', $data);
 }
 public function create(){
 //untuk create tidak memangil model, langsung ke view dengan data baru
 $data = array(
 'create' => ''
 );
 $this->load->view($this->view.'create', $data);
}
 public function save(){
 $data = array(
 'id_kategori'=> $this->input->post('id_kategori'),
 'nama_kategori'=> $this->input->post('nama_kategori')
 );
 $this->M_kategori->save($data);
 //dengan $this->redirect artinya memanggil private $redirect = "Kategori"
 redirect($this->redirect,'refresh');
 }
 public function edit(){
 /*
 segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
 data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
 */
 $kd = $this->uri->segment(3);
 $data = array(
 //'edit' variabel yang akan dipanggil pada view edit.php
 'edit' => $this->M_kategori->edit($kd)
 );
 $this->load->view($this->view.'edit', $data);
 }
public function update(){
 $kd = $this->uri->segment(3);
 $data = array(
 /*
 'nama_kategori' =nama yang diambil dari fild pada tabel
 $this->input->post('nama_kategori') =nama yang diambil dari form
 */
 'nama_kategori'=> $this->input->post('nama_kategori')
 );
 $this->M_kategori->update($kd,$data);
 redirect($this->redirect,'refresh');
 }
 public function delete(){
 $kd = $this->uri->segment(3);
 $data = array(
 //data akan dihapus sesuai uri->segment(3) yang dipilih
 'id_kategori' => $kd
 );
 $this->M_kategori->delete($data);
 redirect($this->redirect,'refresh');
 }
}