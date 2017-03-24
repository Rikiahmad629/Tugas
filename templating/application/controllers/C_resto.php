<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_resto extends CI_Controller {
	public $username="Mugia Nurul Matin";
	public function __construct(){
		parent::__construct();
		$this->load->model('M_resto');
	}
	
	public function view_resto()
	{
		global $username;
		$resto=$this->M_resto->select_resto()->result();
		$data2= array(
			'resto'=>$resto
		);
		$content=$this->load->view('V_resto',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'resto'=>$resto
		);
		$this->load->view('V_template',$data);
	}
	public function view_resto2($id)
	{
		global $username;
		$resto=$this->M_resto->select_resto_where_id($id)->row();
		$data2= array(
			'resto'=>$resto
		);
		$content=$this->load->view('V_resto2',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'resto'=>$resto
		);
		$this->load->view('V_template',$data);
	}
	public function delete_resto($id){
		$this->M_pegawai->delete_resto($id);
		redirect(site_url('C_resto/view_resto'));
	}
	public function update_resto($id){
		$data['id']=$this->input->POST('id');
		$data['nama_resto']=$this->input->POST('nama_resto');
		$data['umur_resto']=$this->input->POST('umur_resto');
		$data['owner']=$this->input->POST('owner');
		$data['jabatan']=$this->input->POST('jabatan');
		$data['no_telp']=$this->input->POST('no_telp');
		$data['sistem_sebelumnya']=$this->input->POST('sistem_sebelumnya');
		$data['tanggal_visit']=$this->input->POST('tanggal_visit');
		$data['potensi']=$this->input->POST('potensi');
		$this->M_resto->update_resto($id,$data);
		redirect(site_url('C_resto/view_resto'));
	}
	public function finsert_resto(){
		$content=$this->load->view('V_resto2',"",true);
		$data= array(
			'username'=>$username,
			'content'=>$content
		);
		$this->load->view('V_template',$data);
	}
	public function insert_resto(){
		$data['id']=$this->input->POST('id');
		$data['nama_resto']=$this->input->POST('nama_resto');
		$data['umur_resto']=$this->input->POST('umur_resto');
		$data['owner']=$this->input->POST('owner');
		$data['jabatan']=$this->input->POST('jabatan');
		$data['no_telp']=$this->input->POST('no_telp');
		$data['sistem_sebelumnya']=$this->input->POST('sistem_sebelumnya');
		$data['tanggal_visit']=$this->input->POST('tanggal_visit');
		$data['potensi']=$this->input->POST('potensi');
		$this->M_resto->insert_resto($data);
		redirect(site_url('C_resto/view_resto'));
	}
}
?>