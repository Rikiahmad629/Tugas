<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_report_marketing extends CI_Controller {
	public $username="Tubagus";
	public function index()
	{
		$this->load->view('index_report_marketing');
	}
	public function __construct(){
		parent::__construct();
		$this->load->model('M_report_marketing');
	}
	
	public function view_report_marketing()
	{
		global $username;
		$report_marketing=$this->M_report_marketing->select_report_marketing()->result();
		$data2= array(
			'report_marketing'=>$report_marketing
		);
		$content=$this->load->view('V_report_marketing',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'report_marketing'=>$report_marketing
		);
		$this->load->view('V_template',$data);
	}
	public function view_report_marketing2($id)
	{
		global $username;
		$report_marketing=$this->M_report_marketing->select_report_marketing_where_id($id)->row();
		$data2= array(
			'report_marketing'=>$report_marketing
		);
		$content=$this->load->view('V_report_marketing2',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'report_marketing'=>$report_marketing
		);
		$this->load->view('V_template',$data);
	}
	public function delete_report_marketing($id){
		$this->M_pegawai->delete_report_marketing($id);
		redirect(site_url('C_report_marketing/view_report_marketing'));
	}
	public function update_report_marketing($id){
		$data['id_report']=$this->input->POST('id_report');
		$data['id_jpekerjaan']=$this->input->POST('id_jpekerjaan');
		$data['activity']=$this->input->POST('activity');
		$data['id_marketing']=$this->input->POST('id_marketing');
		$data['id_supervisor_marketing']=$this->input->POST('id_supervisor_marketing');
		$data['tanggal']=$this->input->POST('tanggal');
		redirect(site_url('C_report_marketing/view_report_marketing'));
	}
}
?>