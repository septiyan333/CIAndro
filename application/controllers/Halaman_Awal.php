<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman_Awal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// Rules Nama Pengguna
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required', ['nama_pengguna' => 'Nama Pengguna harus diisi!']);
		// Rules Kata Sandi
		$this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'trim|required', ['kata_sandi' => 'Kata Sandi harus diisi!']);

		// Validasi
		// Jika Validasi gagal akan kembalii pada form daftar
		if ($this->form_validation->run() == False) {
			$data['judul'] = 'HI Trash - Masuk';
			$this->load->view('templates/Halaman_awal_header', $data);
			$this->load->view('masuk_view');
			$this->load->view('templates/Halaman_awal_footer');
		} else {

			// validasi berhasil
			$this->_masuk(); //menjalankan method _masuk()
		}
	}

	private function _masuk()
	{
		$nama_pengguna = $this->input->post('nama_pengguna');
		$kata_sandi = $this->input->post('kata_sandi');

		$akun = $this->db->get_where('tb_akun', ['nama_pengguna' => $nama_pengguna])->row_array();
		$sandi = $this->db->get_where('tb_akun', ['kata_sandi' => $kata_sandi])->row_array();


		// Jika akun ada
		if ($akun) {

			// Cek kata sandi
			// Kata Sandi benar
			if ($sandi) {

				$data = [
					'nama_pengguna' => $akun['nama_pengguna'],
					'status' => $akun['status']
				];
				$this->session->set_userdata($data);
				redirect('Pengguna');
			}
			// Kata sandi salah
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Kata sandi salah!</div>');
				redirect('Halaman_Awal');
			}
		}
		// Jika Akun tidak ada
		else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Nama pengguna belum terdaftar!</div>');
			redirect('Halaman_Awal');
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('nama_pengguna');
		$this->session->unset_userdata('status');

		$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Anda telah keluar!</div>');
		redirect('Halaman_Awal');
	}

	public function daftar()
	{
		// Rules Nama Lengkap
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap harus diisi !']);
		// Rules Alamat
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat harus diisi !']);
		// Rules Email
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_akun.email]', [
			'required' => 'Nama Lengkap harus diisi !',
			'valid_email' => 'Email tidak valid !',
			'is_unique' => 'Email telah terdaftar'
		]);
		// Rules No Telpon
		$this->form_validation->set_rules('no_telpon', 'No telpon', 'required|trim|is_unique[tb_akun.no_telpon]', [
			'required' => 'No Telpon harus diisi !',
			'is_unique' => 'No Telpon telah terdaftar'
		]);
		// Rules Nama Pengguna
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required|trim|is_unique[tb_akun.nama_pengguna]', [
			'required' => 'Nama Pengguna harus diisi !',
			'is_unique' => 'Nama Pengguna sudah digunakan'
		]);
		// Rules Kata Sandi
		$this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'required|trim|min_length[3]', [
			'required' => 'Kata Sandi Harus diisi !',
			'min_length' => 'Kata Sandi terlalu pendek !'
		]);
		// Rules Jenis Kelamin
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', [
			'required' => 'Jenis Kelamin harus dipilih !'
		]);

		// Validasi
		// Jika Validasi gagal akan kembalii pada form daftar
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'HI Trash - Daftar';
			$this->load->view('templates/Halaman_awal_header', $data);
			$this->load->view('daftar_view');
			$this->load->view('templates/Halaman_awal_footer');
		} else {
			// Jika Validasi berhasil akan masuk ke database
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'no_telpon' => $this->input->post('no_telpon'),
				'nama_pengguna' => $this->input->post('nama_pengguna'),
				'kata_sandi' => $this->input->post('kata_sandi'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'status' => 'Pengguna',
				'saldo' => 0,
				'Image' => 'default.jpg'
			];
			$this->db->insert('tb_akun', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Pendaftaran Berhasil ! silahkan masuk</div>');
			redirect('Halaman_Awal');
		}
	}
}
