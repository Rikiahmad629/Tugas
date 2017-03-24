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
		$content=$this->load->view('index_admin',"",true);
		$data= array(
			'username'=>$username,
			'content'=>$content
		);
		$this->load->view('V_template',$data);
	}
}
