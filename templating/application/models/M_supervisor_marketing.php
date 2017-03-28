<?php
class M_supervisor_marketing extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function select_marketing(){
		$this->db->select('nama_marketing,alamat,no_telp,tempat_lahir,tanggal_lahir');
		$this->db->from('marketing');
		return $this->db->get();	
	}
}
?>