<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

	public function kamarKosong()
	{
		$this->db->where('ketersediaan', 'tersedia');
		$query= $this->db->get('kamar');
		return $query;
	}

	public function daftarPasien()
	{
		$this->db->where('fk_kamar', NULL);
		$query= $this->db->get('pasien');
		return $query;
	}

	public function addKamarPasien(){
		$kamar=$this->input->post('kamar_kosong');
		$data = array(
			'nama_pasien' => $this->input->post('nama_pasien'),
			'ketersediaan' => 'tidak tersedia',
			'tanggal' => $this->input->post('tgl'),

			);
		$this->db->where('nama_kamar',$kamar);
		$this->db->update('kamar', $data);
	}

	public function ubahStatusPasien(){
		$nama_pasien=$this->input->post('nama_pasien');
		$data = array(
			'fk_kamar' => $this->input->post('kamar_kosong'),
			);
		$this->db->where('nama_pasien',$nama_pasien);
		$this->db->update('pasien', $data);
	}
}

/* End of file Kamar_model.php */
/* Location: ./application/models/Kamar_model.php */