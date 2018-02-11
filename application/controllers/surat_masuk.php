<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'surat_masuk_view';
		$this->load->view('template_view', $data);
	}

}

/* End of file surat_masuk.php */
/* Location: ./application/controllers/surat_masuk.php */