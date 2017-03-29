<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Catatan_marketing extends CI_Controller {
	public $username="Tubagus";
	public function index()
	{
		$this->load->view('index_catatan_marketing');
	}
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Catatan_marketing');
	}
	
	public function view_catatan_marketing()
	{
		global $username;
		$catatan_marketing=$this->M_Catatan_marketing->select_catatan_marketing()->result();
		$data2= array(
			'catatan_marketing'=>$catatan_marketing
		);
		$content=$this->load->view('V_Catatan_marketing',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'catatan_marketing'=>$catatan_marketing
		);
		$this->load->view('V_template',$data);
	}
	public function view_catatan_marketing2($id)
	{
		global $username;
		$catatan_marketing=$this->M_Catatan_marketing->select_catatan_marketing_where_id($id)->row();
		$data2= array(
			'catatan_marketing'=>$catatan_marketing
		);
		$content=$this->load->view('V_Catatan_marketing2',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'catatan_marketing'=>$catatan_marketing
		);
		$this->load->view('V_template',$data);
	}
	public function delete_catatan_marketing($id){
		$this->M_Catatan_marketing->delete_catatan_marketing($id);
		redirect(site_url('C_Catatan_marketing/view_catatan_marketing'));
	}
	public function update_catatan_marketing($id){
		$data['id']=$this->input->POST('id');
		$data['id_marketing']=$this->input->POST('id_marketing');
		$data['catatan']=$this->input->POST('catatan');
		$data['id_supervisor']=$this->input->POST('id_supervisor');
		$data['tanggal']=$this->input->POST('tanggal');

		$this->M_Catatan_marketing->update_catatan_marketing($id,$data);
		redirect(site_url('C_Catatan_marketing/view_catatan_marketing'));
	}
	public function view_Add_catatan_marketing(){
		$data['id']=$this->input->POST('id');
		$data['id_marketing']=$this->input->POST('id_marketing');
		$data['catatan']=$this->input->POST('catatan');
		$data['id_supervisor']=$this->input->POST('id_supervisor');
		$data['tanggal']=$this->input->POST('tanggal');
		$this->M_Catatan_marketing->insert_catatan_marketing($data);
		redirect(site_url('C_Catatan_marketing/V_Add_catatan_marketing'));
	}
	public function f_view_Add_catatan_marketing(){
		global $username;
		
		$data['username']=$username;
		$data['content']=$this->load->view('V_add_catatan_marketing','',true);
		
		$this->load->view('V_template',$data);
	}
}
?>