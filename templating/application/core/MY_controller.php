<?php
class MY_Controller extends CI_Controller {
	function page($data){
		$this->load->models('V_Home',$data);
	}
}
?>