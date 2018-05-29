<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Function_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function tampilUser($username)
	{
		$this->db->where('username', $username);
		$query= $this->db->get('user');
		$this->db->join('*', 'user.username = pegawai.username', 'inner');
		return $query->result();
	}


	public function tampilDataDetailsPasien()
	{
		$query= $this->db->query('select * from pasien');
		return $query->result_array();
	}

	public function insertDataPasien()
	{
		$data = array('id_pasien' =>$this->input->post('id'),
		 );
	}
	public function seleksiPasien($id)
	{
		$this->db->where('id_pasien', $id);
		$query= $this->db->get('pasien');
		return $query->result();
	}

	public function hapusPasien($id){
		$this->db->where('id_pasien',$id);
		$this->db->delete('pasien');	
	}

	public function tampilDataKamar(){
		$query=$this->db->get('kamar');
		return $query->result();
	}

	public function totalPasien(){
		$query= $this->db->query('select count(*) from pasien as jumlah');
		return $query->result();
	}


}

/* End of file Function_model.php */
/* Location: ./application/models/Function_model.php */