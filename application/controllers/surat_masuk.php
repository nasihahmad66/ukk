<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('surat_masuk_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == true) {
			$data['main_view'] = 'surat_masuk_view';
			$this->load->view('template_view', $data);
		}else{
			redirect('login','refresh');
		}
		
	}

	public function SaveSuratMasuk()
	{
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '512';
		
		$result = array(
			'isErrror' => false,
			'message' => '',
			'data' => null
		);
		
		$this->load->library('upload', $config);

		$this->upload->initialize($config);
		// $this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('file_upload')){
			$error = array('error' => $this->upload->display_errors());
			$result['isErrror'] = true;
			$result['message'] = $error;
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$file_name = $data['upload_data']['file_name'];

			$payload = json_decode($this->input->post('Data'), true);

			$insert = $this->surat_masuk_model->InsertSuratMasuk($payload, $file_name);
			if ($insert) {
				$result['isErrror'] = false;
				$result['message'] = "OK";
			}else{
				$result['isErrror'] = true;
				$result['message'] = "gagal menyimpan data surat";
			}
		}

		echo json_encode($result);
	}

	public function GetDataSuratMasuk()
	{
		$data = $this->surat_masuk_model->GetSuratMasuk();

		echo json_encode($data);
	}

}

/* End of file surat_masuk.php */
/* Location: ./application/controllers/surat_masuk.php */