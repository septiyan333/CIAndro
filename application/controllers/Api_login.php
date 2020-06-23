<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_login extends CI_Controller {
 
 	function masuk()
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
	

				if ($data['status'] == 'Pengguna') {
					$response = array(
					'status' => "Pengguna",
					'message' => "Login berhasil"
				);
				echo json_encode($response);
				} else if ($data['status'] == 'Admin') {
					$response = array(
					'status' => "Admin",
					'message' => "Login berhasil"
				);
				echo json_encode($response);
				} else if ($data['status'] == 'Kurir') {
					$response = array(
					'status' => "Kurir",
					'message' => "Login berhasil"
				);
				echo json_encode($response);
				}
			}
			// Kata sandi salah
			else {
				$response = array(
					'status' => "False",
					'message' => "Kata Sandi Salah"
				);
				echo json_encode($response);
			}
		}
		// Jika Akun tidak ada
		else {
			$response = array(
					'status' => "False",
					'message' => "Akun Tidak Ada"
				);
				echo json_encode($response);
		}
	}
	
  function register(){

	$data['nam_leng'] = $this->input->post('nam_leng');
    $data['no_telp'] = $this->input->post('no_telp');
	$data['alamat'] = $this->input->post('alamat');
    $data['email'] = $this->input->post('email');
	$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
    $data['pembuatan_data'] = time();
   
		$cek = $this->db->get_where('tb_customer',['email'=>$data['email']])->row_array();
		if ($cek==0) {
			$regis = $this->Patukang_model->registerAkun1($data,'tb_customer');
			if ($regis!=0) {
				$response = array(
					'status' => "success",
					'message' => "Registrasi berhasil"
				);
				echo json_encode($response);
			}else {
				$response = array(
					'status' => "fail",
					'message' => "Registrasi gagal"
				);
				echo json_encode($response);
			}
		}else {
			$response = array(
				'status' => "fail",
				'message' => "Email telah terdaftar"
			);
			echo json_encode($response);
		}
	}
}
