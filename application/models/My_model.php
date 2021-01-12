<?php
defined ('BASEPATH') OR exit();

    class My_model extends CI_Model {

        public function ambildata(){
            return $this->db->get('pegawai');
        }

        public function tambahdata($data, $table){
            return $this->db->insert($table, $data);
        }
        
        public function ambilID($table, $where){
            return $this->db->get_where($table, $where);
        }

        public function updatedata($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function hapusdata($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }
    }
