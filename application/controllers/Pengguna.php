<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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

    // ------------- Penjemputan ------------- 
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

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase. </div>');

        //redirect
        redirect('buku/');
    }

    // ------------- Jadwal ------------- 
    public function jadwal()
    {

        $this->load->view('ViewPengguna/jadwal_pengguna');
    }

    // ------------- Riwayat ------------- 
    public function riwayat()
    {
        $this->load->view('ViewPengguna/riwayat_pengguna');
    }

    // ------------- Poin ------------- 
    public function poin()
    {
        $this->load->view('ViewPengguna/poin');
    }

    // ------------- Profil ------------- 
    public function profil()
    {
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();
        $data['judul'] = 'HI-Trash - Profil';

        $this->load->view('templates/profil_header', $data);
        $this->load->view('ViewPengguna/profil_pengguna', $data);
        $this->load->view('templates/profil_footer', $data);
    }

    public function ubah_profil()
    {
        $data['judul'] = 'HI-Trash - Ubah Profil';
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();

        $this->load->view('templates/profil_header', $data);
        $this->load->view('ViewPengguna/ubah_profil', $data);
        $this->load->view('templates/profil_footer', $data);
    }

    public function simpan_profil()
    {
        $data['judul'] = 'HI-Trash - Ubah Profil';
        $data['akun'] = $this->db->get_where('tb_akun', ['nama_pengguna' => $this->session->userdata('nama_pengguna')])->row_array();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim',  ['required' => 'Nama Lengkap harus diisi !']);
        $this->form_validation->set_rules('no_telpon', 'No. Telpon', 'required|trim',  ['required' => 'No. Telpon harus diisi !']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/profil_header', $data);
            $this->load->view('ViewPengguna/ubah_profil', $data);
            $this->load->view('templates/profil_footer', $data);
        } else {
            $nama_pengguna = $this->input->post('nama_pengguna');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');

            // Foto Profil
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'png|jpg|svg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['akun']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . 'Format foto hanya untuk jpg, png, dan svg. Ukuran foto maksimal 2mb' . '</div>');
                    redirect('Pengguna/ubah_profil');
                }
            }
            // $array = array(
            //     'nama_lengkap' => $nama_lengkap,
            //     'alamat' => $alamat,
            //     'email' => $email,
            //     'no_telpon' => $no_telpon,
            //     'Image' => $new_image
            // );
            // $this->db->set($array);

            $this->db->set('nama_lengkap', $nama_lengkap);
            $this->db->set('alamat', $alamat);
            $this->db->set('email', $email);
            $this->db->set('nama_lengkap', $nama_lengkap);
            $this->db->set('no_telpon', $no_telpon);

            $this->db->where('nama_pengguna', $nama_pengguna);
            $this->db->update('tb_akun');

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Profil telah diubah !</div>');
            redirect('Pengguna/profil');
        }
    }
}
