<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_user extends CI_Controller {
	public $username="Mugia Nurul Matin";
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}
	public function form_user()
	{
		global $username;
		$content=$this->load->view('form_user',"",true);
		$data= array(
			'content'=>$content,
			'username'=>$username
		);
		$this->load->view('V_template',$data);
	}
	public function insert_user(){
		$data['id']=$this->input->POST('id');
		$data['nama_user']=$this->input->POST('nama_user');
		$data['umur_user']=$this->input->POST('umur_user');
		$data['owner']=$this->input->POST('owner');
		$data['jabatan']=$this->input->POST('jabatan');
		$data['no_telp']=$this->input->POST('no_telp');
		$data['sistem_sebelumnya']=$this->input->POST('sistem_sebelumnya');
		$data['tanggal_visit']=$this->input->POST('tanggal_visit');
		$data['potensi']=$this->input->POST('potensi');
		$this->M_user->insert_user($data);
		redirect(site_url('C_user/view_user'));
	}
}
?>