<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Function_model extends CI_Model {

	public function tampilDataDetailsPasien(){
		$query()= $this->db->query('select * from pasien');
		return $query->result_array();
	}	

}

/* End of file Function_model.php */
/* Location: ./application/models/Function_model.php */