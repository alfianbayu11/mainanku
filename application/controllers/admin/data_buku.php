<?php

class Data_buku extends CI_Controller{

    public function __construct(){
    parent::__construct();

    if($this->session->userdata('role_id') != '1'){
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Anda Belum Login!!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
      redirect('auth/login');
    }
  }
  
  public function index(){
    $data['buku'] = $this->model_buku->tampil_data()->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_buku', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_aksi(){
    $nama_buku    = $this->input->post('nama_buku');
    $keterangan   = $this->input->post('keterangan');
    $kategori     = $this->input->post('kategori');
    $harga        = $this->input->post('harga');

    $gambar       = $_FILES['gambar']['name'];

      $config ['upload_path'] = './uploads/';
      $config ['allowed_types'] = 'jpg|jpeg|png|gif';

      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('gambar')){
        echo "Gambar Gagal di Upload";
      }else {
        $gambar = $this->upload->data("file_name");
      }

    $data = array(
      'nama_buku'     => $nama_buku,
      'keterangan'    => $keterangan,
      'kategori'      => $kategori,
      'harga'         => $harga,
      'gambar'        => $gambar
    );

    $this->model_buku->tambah_buku($data, 'tb_buku');
    redirect('admin/data_buku/index');
  }

  public function edit($id){
    $where = array('id_buku' => $id);
    $data['buku'] = $this->model_buku->edit_buku($where, 'tb_buku')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/edit_buku', $data);
    $this->load->view('templates_admin/footer');
  }

  public function update(){
    $id           = $this->input->post('id_buku');
    $nama_buku    = $this->input->post('nama_buku');
    $keterangan   = $this->input->post('keterangan');
    $kategori     = $this->input->post('kategori');
    $harga        = $this->input->post('harga');
   
     
    $data = array(
        'nama_buku' => $nama_buku,
        'keterangan' => $keterangan,
        'kategori'  => $kategori,
        'harga'   => $harga,
        

    );

    $where = array(

      'id_buku' => $id

    );

    $this->model_buku->update_data($where, $data, 'tb_buku');
    redirect('admin/data_buku/index');
  }

  public function hapus ($id){
    $where = array('id_buku' => $id);
    $this->model_buku->hapus_data($where, 'tb_buku');
    redirect('admin/data_buku/index');

  }
}

 ?>
