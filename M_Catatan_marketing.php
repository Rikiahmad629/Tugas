<?php
class M_Catatan_marketing extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function select_catatan_marketing(){
		$this->db->select('catatan_marketing.id, catatan_marketing.id_marketing, catatan_marketing.catatan, catatan_marketing.id_supervisor, catatan_marketing.tanggal');
		$this->db->from('catatan_marketing');
		$this->db->join('marketing','catatan_marketing.id = marketing.id', 'inner');
		
		return $this->db->get();	
	}
	function select_catatan_marketing_where_id($id){
		$this->db->select('catatan_marketing.id, catatan_marketing.id_marketing, catatan_marketing.catatan, catatan_marketing.id_supervisor, catatan_marketing.tanggal, marketing.nama_marketing');
		$this->db->from('catatan_marketing');
		$this->db->join('marketing','catatan_marketing.id = marketing.id', 'left');
		$this->db->where('catatan_marketing.id',$id);
		return $this->db->get();
	}
	 function insert_catatan_marketing($data)
    {
        $this->id   = $data['id']; // please read the below note
        $this->id_marketing = $data['id_marketing'];
        $this->catatan = $data['catatan'];
        $this->id_supervisor    = $data['id_supervisor'];
        $this->tanggal = $data['tanggal'];

        $this->db->insert('C_Catatan_marketing', $this);
    }
	
	function update_catatan_marketing($id,$data){
		$this->db->where('id',$id);
		$this->db->update('catatan_marketing',$data);
	}
	function delete_catatan_marketing($id){
		$this->db->where('id',$id);
		$this->db->delete('catatan_marketing',$data);
	}
}
?>