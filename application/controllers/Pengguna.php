<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama_pengguna')) {
            redirect('Halaman_Awal');
        } else {
            $status = $this->session->userdata('status');

            if ($status != 'Pengguna') {
                redirect('Halaman_Awal/blocked');
            }
        }
    }

    public function index()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewPengguna/beranda_pengguna', $data);
    }
    public function penjemputan()
    {
        $this->load->view('ViewPengguna/penjemputan');
    }

    public function simpan()
    {
        $data = array(

            'id_transaksi'    => $this->input->post("id_transaksi"),
            'id_akun'         => $this->input->post("id_akun"),
            'nama_lengkap'    => $this->input->post("nama_lengkap"),
            'tanggal'         => $this->input->post("tanggal"),
            'waktu'           => $this->input->post("waktu"),
            'jenis_sampah'    => $this->input->post("jenis_sampah"),
            'berat'           => $this->input->post("berat"),
            'saldo'           => $this->input->post("saldo"),
            'no_telpon'       => $this->input->post("no_telpon"),
            'alamat'          => $this->input->post("alamat"),
            'detail'          => $this->input->post("detail"),
        );

        $this->model_transaksi->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('buku/');

    }

        
    public function jadwal()
    {

        $this->load->view('ViewPengguna/jadwal_pengguna');
    }

    public function riwayat()
    {
        $this->load->view('ViewPengguna/riwayat_pengguna');
    }

    public function poin()
    {
        $this->load->view('ViewPengguna/poin');
    }

    public function profil()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $this->load->view('ViewPengguna/profil_pengguna', $data);
    }
}
