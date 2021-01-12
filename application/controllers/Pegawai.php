<?php
defined('BASEPATH') or exit();

class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('My_model', 'm');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "CI AJAX";
        $this->load->view('home', $data);
    }

    public function ambildata()
    {
        $dataBarang = $this->m->ambildata()->result();
        echo json_encode($dataBarang);
    }

    public function tambahdata()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');

        if ($nama == '') {
            $result['pesan'] = "Nama Harus Diisi";
        } else if ($email == '') {
            $result['pesan'] = "Email Harus Diisi";
        } else if ($phone == '') {
            $result['pesan'] = "Phone Harus Diisi";
        } else {
            $result['pesan'] = "";

            $data = array(
                'nama' => $nama,
                'email' => $email,
                'phone' => $phone
            );
            $this->m->tambahdata($data, 'pegawai');
        }
        echo json_encode($result);
    }

    public function ambilId()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $dataMhs = $this->m->ambilId('pegawai', $where)->result();
        echo json_encode($dataMhs);
    }

    public function ubahdata()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');

        if ($nama == '') {
            $result['pesan'] = "Nama Harus Diisi";
        } else if ($email == '') {
            $result['pesan'] = "Email Harus Diisi";
        } else if ($phone == '') {
            $result['pesan'] = "Phone Harus Diisi";
        } else {
            $result['pesan'] = "";

            $where = array('id' => $id);

            $data = array(
                'nama' => $nama,
                'email' => $email,
                'phone' => $phone
            );
            $this->m->updatedata($where, $data, 'pegawai');
        }
        echo json_encode($result);
    }

    public function hapusdata()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $this->m->hapusdata($where, 'pegawai');
    }
}
