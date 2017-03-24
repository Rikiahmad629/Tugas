<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_resto extends CI_Controller {
	public $username="Mugia Nurul Matin";
	public function navigasi(){
	return"
			<li class='treeview'>
			<a href='".site_url('c_template/index_admin')."'>
            <i class='fa fa-dashboard'></i> <span>Beranda</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  <li class='active treeview'>
		  <a href='".site_url('c_resto/view_resto')."'>
            <i class='fa fa-dashboard'></i> <span>Mengelola Resto</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  ";
	}
	public function __construct(){
		parent::__construct();
		$this->load->model('M_resto');
		$this->load->helper('form');
	}
	
	public function view_resto()
	{
		global $username;
		$a = new C_resto;
		$navigasi=$a->navigasi();
		$resto=$this->M_resto->select_resto()->result();
		$data2= array(
			'resto'=>$resto
		);
		$content=$this->load->view('V_resto',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'resto'=>$resto,
			'navigasi'=>$navigasi
		);
		$this->load->view('V_template',$data);
	}
	public function view_resto2($id)
	{
		global $username;
		$a = new C_resto;
		$navigasi=$a->navigasi();
		$resto=$this->M_resto->select_resto_where_id($id)->row();
		$data2= array(
			'resto'=>$resto,
			'navigasi'=>$navigasi
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
		$this->M_resto->delete_resto($id);
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
		$data['marketing']=$this->input->POST('marketing');
		$this->M_resto->update_resto($id,$data);
		redirect(site_url('C_resto/view_resto'));
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
		$data['marketing']=$this->input->POST('marketing');
		$this->M_resto->insert_resto($data);
		redirect(site_url('C_resto/view_resto'));
	}
	public function f_insert_resto(){
		global $username;
		$a = new C_resto;
		$navigasi=$a->navigasi();
		$data['username']=$username;
		$data['content']=$this->load->view('insert_resto','',true);
		$data['navigasi']=$navigasi;
		$this->load->view('V_template',$data);
	}
}
?>	