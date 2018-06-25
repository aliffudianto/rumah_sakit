<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

	public function kamarKosong()
	{
		$this->db->where('ketersediaan', 'tersedia');
		$query= $this->db->get('kamar');
		return $query;
	}


	public function addKamarPasien(){
		$id_kamar=$this->input->post('kamar_kosong');
		$data = array(
			'id_pasien' => $this->input->post('id_pasien'),
			'ketersediaan' => 'tidak tersedia'
			);
		$this->db->where('id_kamar',$id_kamar);
		$this->db->update('kamar', $data);
	}
}

/* End of file Kamar_model.php */
/* Location: ./application/models/Kamar_model.php */