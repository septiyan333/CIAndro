<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_transaksi extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('sampah')
                 ->order_by('id_transaksi', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("sampah", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}
?>