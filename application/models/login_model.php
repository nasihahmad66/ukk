<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function Login($data)
	{
		$username = $data['USERNAME'];
		$password = $data['PASSWORD'];

		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$this->db->where($where);

		$this->db->join('jabatan', 'jabatan.id_jabatan = user.id_jabatan');

		$data = $this->db->get('user')->result();

		$status;

		if (count($data) > 0) {
			$userdata = array(
				'logged_in' => TRUE,
				'id_user' => $data[0]->id_user,
				'nama_lengkap' => $data[0]->nama_lengkap,
				'nama_jabatan' => $data[0]->nama_jabatan,
				'level' => $data[0]->level
			);
			
			$this->session->set_userdata($userdata);

			return "Login Berhasil";
		}else{
			return "username atau password salah";
		}

		
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */