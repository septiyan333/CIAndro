<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama_pengguna')) {
            redirect('Halaman_Awal');
        } else {
            $status = $this->session->userdata('status');

            if ($status != 'Kurir') {
                redirect('Halaman_Awal/blocked');
            }
        }
    }

     public function jadwal()
    {

        $this->load->view('ViewKurir/jadwal_kurir');
    }

    public function riwayat()
    {
        $this->load->view('ViewKurir/riwayat_kurir');
    }

    public function poin()
    {
        $this->load->view('ViewKurir/poin');
    }
    
    public function index()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewKurir/beranda_kurir', $data);
    }
}
