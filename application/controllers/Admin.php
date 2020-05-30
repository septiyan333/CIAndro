<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama_pengguna')) {
            redirect('Halaman_Awal');
        } else {
            $status = $this->session->userdata('status');

            if ($status != 'Admin') {
                redirect('Halaman_Awal/blocked');
            }
        }
    }

    public function index()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();

        $this->load->view('Admin/beranda_admin', $data);
    }
}
