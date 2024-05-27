<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Berita extends CI_Controller {
private $view = "backend/v_berita/";
private $redirect = "berita";
public function __construct(){
    parent::__construct();
    //Load model
    $this->load->model('M_berita');
    $this->load->model('M_kategori');
    IsAdmin();
    }
    public function index(){
    if ($this->input->get('search')) {
    $q = $this->M_berita->search($this->input->get('search'));
    }
    else{
    $q = $this->M_berita->GetAll();
    }
    $data = array(
    'judul' => "DATA BERITA",
    'sub' => "Lihat Berita",
    'read'=> $q
    );
    $this->template->load('backend/template',$this->view.'read', $data);
    }
    public function create(){
    $data = array(
    'judul' => "DATA BERITA",
    'sub' => "Tambah Berita",
    'kategori' => $this->M_kategori->GetAll(),
    'create'=>''
    );
    $this->template->load('backend/template',$this->view.'create', $data);
    }
    public function save(){
    //img_berita
    $name_imgberita = $_FILES['img_berita']['name'];
    $type_imgberita = $_FILES['img_berita']['type'];
    $tmp_imgberita = $_FILES['img_berita']['tmp_name'];
    //upload img
    if (!empty($tmp_imgberita)){
    if ($type_imgberita != "image/jpeg" AND $type_imgberita != 
    "image/jpg" AND $type_imgberita != "image/png"){
    echo "<script>alert('Format yang digunakan 
    jpeg|jpg|png');</script>";
    redirect($this->redirect,'refresh');
    }
    else{
    $img_berita = 
    UploadImg($_FILES['img_berita'],'./assets/img_berita/','berita',500);
    $data = array(
    'judul_berita'=> $this->input->post('judul_berita'),
    'id_kategori'=> $this->input->post('id_kategori'),
    'st_berita'=> 'Blokir',
    'isi_berita'=> $this->input->post('isi_berita'),
    'tgl_berita'=> date('Y-m-d'),
    'jam_berita'=> date('H:i:s'),
    'kd_admin' => $this->session->userdata('kd_admin'),
    'img_berita'=> $img_berita
    );
    $this->M_berita->save($data);
    redirect($this->redirect,'refresh');
    }
    }
    }
    public function edit(){
    $kd = $this->uri->segment(3);
    $data = array(
    'judul' => "DATA BERITA",
    'sub' => "Ubah Berita",
    'kategori' => $this->M_kategori->GetAll(),
    'edit' => $this->M_berita->edit($kd)
    );
    $this->template->load('backend/template',$this->view.'edit', $data);
    }
    public function update(){
    $kd = $this->uri->segment(3);
    //img_berita
    $name_imgberita = $_FILES['img_berita']['name'];
    $type_imgberita = $_FILES['img_berita']['type'];
    $tmp_imgberita = $_FILES['img_berita']['tmp_name'];
    //upload img
    if (!empty($tmp_imgberita)){
    if ($type_imgberita != "image/jpeg" AND $type_imgberita != 
    "image/jpg" AND $type_imgberita != "image/png"){
    echo "<script>alert('Format yang digunakan 
    jpeg|jpg|png');</script>";
    redirect($this->redirect,'refresh');
    }
    else{
    $img_berita = 
    UploadImg($_FILES['img_berita'],'./assets/img_berita/','berita',500);
    $data = array(
    'judul_berita'=> $this->input-
    post('judul_berita'),
    'id_kategori'=> $this->input-
    post('id_kategori'),
    'isi_berita'=> $this->input->post('isi_berita'),
    'tgl_berita'=> $this->input->post('tgl_berita'),
    'jam_berita'=> $this->input-
    post('jam_berita'),
    'kd_admin' => $this->session-
    userdata('kd_admin'),
    'img_berita' => $img_berita
    );
    }
    }
    else{
    $data = array(
    'judul_berita'=> $this->input->post('judul_berita'),
    'id_kategori'=> $this->input->post('id_kategori'),
    'isi_berita'=> $this->input->post('isi_berita'),
    'tgl_berita'=> $this->input->post('tgl_berita'),
    'jam_berita'=> $this->input->post('jam_berita'),
    'kd_admin' => $this->session-
    userdata('kd_admin'),
    );
    }
    $this->M_berita->update($kd,$data);
    redirect($this->redirect,'refresh');
    }
    public function status(){
    $kd = $this->uri->segment(3);
    $data = array(
    'st_berita' => $this->uri->segment(4)
    );
    $this->M_berita->update($kd,$data);
    redirect($this->redirect,'refresh');
    }
    public function delete(){
    $kd = $this->uri->segment(3);
    $data = array(
    'id_berita' => $kd
    );
    $this->M_berita->delete($data);
    redirect($this->redirect,'refresh');
    }
    }          