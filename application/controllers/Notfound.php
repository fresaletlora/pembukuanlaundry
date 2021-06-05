<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notfound extends CI_Controller {
	
	public function index()
	{
		$d['title'] = 'Maaf, halaman tidak ditemukan';
		$this->load->view('notfoundview', $d);
	}
}

?>
