<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk_model extends CI_Model {

	public function InsertSuratMasuk($payload, $file_name)
	{
		$data = array(
			'tanggal_terima' => $payload['tanggal_terima'],
			'nomor_surat' => $payload['nomor_surat'],
			'tanggal_surat' => $payload['tangal_surat'],
			'pengirim_surat' => $payload['pengirim_surat'],
			'tujuan_surat' => $payload['tujuan_surat'],
			'subjek_surat' => $payload['subjek_surat'],
			'deskripsi' => $payload['deskripsi'],
			'file_upload' => $file_name,
			'tipe_surat' => 'masuk',
			'id_user' => $this->session->userdata('id_user')
		);

		$this->db->insert('surat', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function GetSuratMasuk()
	{
		$this->db->order_by('id_surat', 'desc');
		return $this->db->get('surat')->result();
	}

}

/* End of file surat_masuk_model.php */
/* Location: ./application/models/surat_masuk_model.php */