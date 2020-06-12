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

        $this->load->view('ViewAdmin/beranda_admin', $data);
    }

    public function tabletransaksi()
    {

        $this->load->view('ViewAdmin/table_transaksi');
    }

    public function tableriwayat()
    {
        $this->load->view('ViewAdmin/table_riwayat');
    }

    public function transaksipoin()
    {
        $this->load->view('ViewAdmin/transaksi_poin');
    }

    public function riwayattransaksi()
    {
        $this->load->view('ViewAdmin/riwayat_transaksi');
    }

    public function inputjadwal()
    {
        $this->load->view('ViewAdmin/input_jadwal');
    }

    public function tablejadwal()
    {
        $this->load->view('ViewAdmin/table_jadwal');
    }

    public function inputakun()
    {
        $this->load->view('ViewAdmin/input_akun');
    }

    public function tableakun()
    {
        $this->load->view('ViewAdmin/table_akun');
    }
}
