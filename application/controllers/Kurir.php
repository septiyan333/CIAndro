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

    // ----------- Beranda -----------
    public function index()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewKurir/beranda_kurir', $data);
    }

    // ----------- Poin -----------
    public function poin()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewKurir/poin', $data);
    }

    public function tukar_poin()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewKurir/tukarpoin_kurir', $data);
    }

    // ----------- Penjemputan -----------
    public function penjemputan()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewKurir/penjemputan_kurir', $data);
    }

    // ----------- Riwayat -----------
    public function riwayat()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewKurir/riwayat_kurir', $data);
    }

    // ------------- Profil ------------- 
    public function profil()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $data['judul'] = 'Kurir - Profil';

        $this->load->view('templates/profil_header', $data);
        $this->load->view('ViewKurir/profil_kurir', $data);
        $this->load->view('templates/profil_footer', $data);
    }
}
