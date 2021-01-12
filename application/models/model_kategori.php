<?php

class Model_kategori extends CI_Model
{

	public function data_gundam()
	{
		return $this->db->get_where('tb_buku', array('kategori' => 'gundam'));
	}

	public function data_nendoroid()
	{
		return $this->db->get_where('tb_buku', array('kategori' => 'nendoroid'));
	}

	public function data_chibi()
	{
		return $this->db->get_where('tb_buku', array('kategori' => 'chibi'));
	}
	public function data_ps2()
	{
		return $this->db->get_where('tb_buku', array('kategori' => 'ps2'));
	}
}
