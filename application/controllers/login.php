<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == true) {
			redirect('dashboard','refresh');
		}else{
			$this->load->view('login_view');
		}
	}

	public function DoLogin()
	{
		$payload = $this->input->post('Data');

		$result = $this->login_model->Login($payload);

		echo json_encode($result);
	}

	public function DoLogout()
	{
		session_destroy();
		redirect('login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */