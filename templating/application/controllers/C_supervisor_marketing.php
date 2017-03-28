<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_supervisor_marketing extends CI_Controller {
	public $username="Mugia Nurul Matin";
	public function __construct(){
		parent::__construct();
		$this->load->model('M_supervisor_marketing');
	}
	public function view_marketing()
	{
		global $username;
		$marketing=$this->M_supervisor_marketing->select_marketing()->result();
		$data2= array(
			'marketing'=>$marketing
		);
		$content=$this->load->view('V_supervisor_marketing',$data2,true);
		$data= array(
			'username'=>$username,
			'content'=>$content,
			'marketing'=>$marketing
		);
		$this->load->view('V_template',$data);
	}
}
?>