<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Function_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function tampilDataDetailsPasien()
	{
		$query()= $this->db->query('select * from pasien');
		return $query->result_array();
	}

	public function insertDataPasien()
	{
		$data = array('id_pasien' =>$this->input , );
	}
	public function ()
	{
	}



}

/* End of file Function_model.php */
/* Location: ./application/models/Function_model.php */