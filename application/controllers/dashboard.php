<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == true) {
			$data['main_view'] = "dashboard_view";
			$this->load->view('template_view', $data);
		}else{
			redirect('login','refresh');
		}
		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */