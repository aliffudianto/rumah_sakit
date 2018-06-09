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
		 if($query->num_rows()>0){
            return $query->result();
        }
	}

	public function dataKamarAktif(){

		$query=$this->db->query('select * from kamar');
		return $query->result();
	}
	public function jumlahKamar(){
		$kamar=$this->db->get('kamar');
		$jumlah=$kamar->num_rows();
		return $jumlah;
	}

	public function tampilDataTransaksi(){
		$query=$this->db->get('transaksi');
		return $query->result();
	}



	public function totalPasien(){
		$query= $this->db->query('select * from pasien');
		$total= $query->num_rows();
		return $total;
	}

	public function addKamar()
    {
        $data= $this->input->post();
        $this->db->insert('kamar', $data);
    }

    public function deleteKamar($id)
    {
        $this->db->where('id_kamar', $id);
        $this->db->delete('kamar');
    }

    public function updateKamar($id)
    {
        $this->db->where('id_kamar', $id);
        $data= $this->input->post();
        $this->db->update('kamar',$data);
    }


}

/* End of file Function_model.php */
/* Location: ./application/models/Function_model.php */