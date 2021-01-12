<?php

class Kategori extends CI_Controller
{

	public function gundam()
	{
		$data['gundam'] = $this->model_kategori->data_gundam()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('gundam', $data);
		$this->load->view('templates/footer');
	}


	public function nendoroid()
	{
		$data['nendoroid'] = $this->model_kategori->data_nendoroid()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('nendoroid', $data);
		$this->load->view('templates/footer');
	}
	public function chibi()
	{
		$data['chibi'] = $this->model_kategori->data_chibi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('chibi', $data);
		$this->load->view('templates/footer');
	}
	public function ps2()
	{
		$data['ps2'] = $this->model_kategori->data_ps2()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ps2', $data);
		$this->load->view('templates/footer');
	}
}
