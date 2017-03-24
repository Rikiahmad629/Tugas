<?php
class M_resto extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert_resto($data){
		$this->db->query("insert into resto values('".$data['id']."','".$data['nama_resto']."','".$data['umur_resto']."','".$data['owner']."','".$data['jabatan']."','".$data['no_telp']."','".$data['sistem_sebelumnya']."','".$data['tanggal_visit']."','".$data['marketing']."','".$data['potensi']."')");
	}
	function select_resto(){
		$this->db->select('resto.id, resto.nama_resto, resto.umur_resto, resto.owner, resto.jabatan, resto.no_telp, resto.sistem_sebelumnya, resto.tanggal_visit, , resto.id_marketing, resto.potensi, marketing.nama_marketing');
		$this->db->from('resto');
		$this->db->join('marketing','resto.id_marketing = marketing.id', 'left');
		return $this->db->get();	
	}
	function select_resto_where_id($id){
		$this->db->select('resto.id, resto.nama_resto, resto.umur_resto, resto.owner, resto.jabatan, resto.no_telp, resto.sistem_sebelumnya, resto.tanggal_visit,  resto.id_marketing, resto.potensi, marketing.nama_marketing');
		$this->db->from('resto');
		$this->db->join('marketing','resto.id_marketing = marketing.id', 'left');
		$this->db->where('resto.id',$id);
		return $this->db->get();
	}
	function update_resto($id,$data){
		$this->db->query("UPDATE `resto` SET `id` = '".$data['id']."', `nama_resto` = '".$data['nama_resto']."', `umur_resto` = '".$data['umur_resto']."', `owner` = '".$data['owner']."', `jabatan` = '".$data['jabatan']."', `no_telp` = '".$data['no_telp']."', `sistem_sebelumnya` = '".$data['sistem_sebelumnya']."', `tanggal_visit` = '".$data['tanggal_visit']."',`id_marketing` = '".$data['marketing']."', `potensi` = '".$data['potensi']."' WHERE `id` = '".$id."'");
	}
	function delete_resto($id){
		$this->db->where('id',$id);
		$this->db->delete('resto');
	}
}
?>