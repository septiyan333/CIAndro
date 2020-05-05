<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index() {
        $data['judul'] = 'HI Trash - Beranda';
        $this->load->view('Pengguna/beranda_view', $data);
	}
}
