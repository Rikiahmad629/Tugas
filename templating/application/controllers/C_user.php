<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_user extends CI_Controller {
	public $username="Mugia Nurul Matin";
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}
	public function navigasi(){
	return"
			<li class='treeview'>
			<a href='".site_url('c_template/index_admin')."'>
            <i class='fa fa-dashboard'></i> <span>Beranda</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  <li class='treeview'>
		  <a href='".site_url('c_resto/view_resto')."'>
            <i class='fa fa-dashboard'></i> <span>Mengelola Resto</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  <li class='active treeview'>
		  <a href='".site_url('c_resto/view_resto')."'>
            <i class='fa fa-dashboard'></i> <span>Mengelola User</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  ";
	}
	public function index(){
		global $username;
		$a = new C_user;
		$data['user']=$this->M_user->select_user()->result();
		$navigasi=$a->navigasi();
		$content=$this->load->view('V_user',$data,true);
		$data= array(
			'content'=>$content,
			'username'=>$username,
			'navigasi'=>$navigasi
		);
		$this->load->view('V_template',$data);
	}
	public function form_user()
	{
		global $username;
		$a = new C_user;
		$navigasi=$a->navigasi();
		$content=$this->load->view('form_user',"",true);
		$data= array(
			'content'=>$content,
			'username'=>$username,
			'navigasi'=>$navigasi
		);
		$this->load->view('V_template',$data);
	}
	public function view_user2($id,$hak){
		global $username;
		$a = new C_user;
		$data['user']=$this->M_user->select_user_where_id($id,$hak)->row();
		$navigasi=$a->navigasi();
		$content=$this->load->view('V_user2',$data,true);
		$data= array(
			'content'=>$content,
			'username'=>$username,
			'navigasi'=>$navigasi
		);
		$this->load->view('V_template',$data);
	}
	public function insert_user(){
		$data['hak']=$this->input->POST('hak');
		$data['nama']=$this->input->POST('nama');
		$data['no_telp']=$this->input->POST('no_telp');
		$data['username']=$this->input->POST('username_user');
		$data['password']=$this->input->POST('password_user');
		$data['alamat']=$this->input->POST('alamat');
		$this->M_user->insert_user($data);
		switch($data['hak']){
			case 3:
			$this->M_user->insert_marketing($data);
			break;
			case 4:
			$this->M_user->insert_smarketing($data);
			break;
			case 5:
			$this->M_user->insert_ts($data);
			break;
			case 6:
			$this->M_user->insert_sts($data);
			break;
		}
		redirect(site_url('C_user/index'));
	}
	public function delete_user($id){
		$this->M_user->delete_user($id);
		redirect(site_url('C_user/index'));
	}
	public function update_user($id){
		$data['id']=$this->input->POST('id');
		$data['hak']=$this->input->POST('hak');
		$data['nama']=$this->input->POST('nama');
		$data['no_telp']=$this->input->POST('no_telp');
		$data['username']=$this->input->POST('username_user');
		$data['password']=$this->input->POST('password_user');
		$data['alamat']=$this->input->POST('alamat');
		$this->M_user->update_user($id,$data);
		redirect(site_url('C_user/index'));
	}
	
}
?>