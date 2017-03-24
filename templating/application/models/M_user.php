<?php
class M_user extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function select_resto(){
		$this->db->select('resto.id, resto.nama_resto, resto.umur_resto, resto.owner, resto.jabatan, resto.no_telp, resto.sistem_sebelumnya, resto.tanggal_visit, resto.potensi, marketing.nama_marketing');
		$this->db->from('resto');
		$this->db->join('marketing','resto.id = marketing.id', 'left');
		return $this->db->get();	
	}
	function select_resto_where_id($id){
		$this->db->select('resto.id, resto.nama_resto, resto.umur_resto, resto.owner, resto.jabatan, resto.no_telp, resto.sistem_sebelumnya, resto.tanggal_visit, resto.potensi, marketing.nama_marketing');
		$this->db->from('resto');
		$this->db->join('marketing','resto.id = marketing.id', 'left');
		$this->db->where('resto.id',$id);
		return $this->db->get();
	}
	function update_resto($id,$data){
		$this->db->where('id',$id);
		$this->db->update('resto',$data);
	}
	function insert_user($data){
		$this->db->insert('$users',$data);
	}
	function delete_resto($id){
		$this->db->where('id',$id);
		$this->db->delete('resto',$data);
	}
}
?>