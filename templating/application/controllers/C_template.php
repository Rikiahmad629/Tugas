<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_template extends CI_Controller {
	public $username="Mugia Nurul Matin";
	public function index()
	{
		$this->load->view('login');
	}
	public function index_admin()
	{
		global $username;
		$navigasi="
			<li class='active treeview'>
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
		  <li class='treeview'>
		  <a href='".site_url('c_resto/view_resto')."'>
            <i class='fa fa-dashboard'></i> <span>Mengelola User</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  ";
		$content=$this->load->view('index_admin',"",true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'navigasi'=>$navigasi
		);
		
		$this->load->view('V_template',$data);
	}
	public function mengelola()
	{
		global $username;
		$navigasi="
			<li class='active treeview'>
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
		  li class='treeview'>
		  <a href='".site_url('c_resto/view_resto')."'>
            <i class='fa fa-dashboard'></i> <span>Mengelola User</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a></li>
		  ";
		$content=$this->load->view('index_admin',"",true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'navigasi'=>$navigasi
		);
		
		$this->load->view('V_template',$data);
	}
}
