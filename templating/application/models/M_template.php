<?php
class M_template extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function select_all(){
		$this->db->select('*');
		$this->db->from('menu');
		return $this->db->get();
	}
}
?>