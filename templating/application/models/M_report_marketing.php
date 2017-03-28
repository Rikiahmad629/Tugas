<?php
class M_report_marketing extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function select_report_marketing(){
		$this->db->select('report_marketing.id_report, jenis_pekerjaan.jenis_pekerjaan, report_marketing.activity, marketing.id, supervisor_marketing.nama_supervisor, report_marketing.tanggal');
		$this->db->from('report_marketing');
		$this->db->join('marketing','report_marketing.id_report = marketing.id', 'inner');
		$this->db->join('jenis_pekerjaan','report_marketing.id_jpekerjaan = jenis_pekerjaan.id_pekerjaan', 'inner');
		$this->db->join('supervisor_marketing','report_marketing.id_report = supervisor_marketing.id', 'inner');
		return $this->db->get();	
	}
	function select_report_marketing_where_id($id){
		$this->db->select('report_marketing.id_report, jenis_pekerjaan.jenis_pekerjaan, report_marketing.activity, marketing.id, supervisor_marketing.nama_supervisor, report_marketing.tanggal');
		$this->db->from('report_marketing');
		$this->db->join('marketing','report_marketing.id_report = marketing.id', 'inner');
		$this->db->join('jenis_pekerjaan','report_marketing.id_jpekerjaan = jenis_pekerjaan.id_pekerjaan', 'inner');
		$this->db->join('supervisor_marketing','report_marketing.id_report = supervisor_marketing.id', 'inner');
		$this->db->where('report_marketing.id_report',$id);
		return $this->db->get();
	}
	function update_report_marketing($id,$data){
		$this->db->where('id_report',$id);
		$this->db->update('report_marketing',$data);
	}
	function delete_report_marketing($id){
		$this->db->where('id_report',$id);
		$this->db->delete('report_marketing',$data);
	}
}
?>