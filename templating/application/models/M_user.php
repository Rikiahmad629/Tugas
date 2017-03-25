<?php
class M_user extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function select_user(){
		$this->db->select('users.id, users.username, users.email, groups.name, users.phone');
		$this->db->from('users_groups');
		$this->db->join('groups','groups.id = users_groups.group_id', 'inner');
		$this->db->join('users','users.id = users_groups.user_id', 'inner');
		return $this->db->get();	
	}
	function select_user_where_id($id,$hak){
		$this->db->select('users.id, users.username, users.email, users.password, groups.name, users.phone');
		$this->db->from('users_groups');
		$this->db->join('groups','groups.id = users_groups.group_id', 'left');
		$this->db->join('users','users.id = users_groups.user_id', 'left');
		$this->db->where('users.id',$id);
		return $this->db->get();
	}
	function update_user($id,$data){
		$this->db->query("update users set username='".$data['nama']."', password='".$data['password']."' ,email='".$data['username']."',phone='".$data['no_telp']."' where id='$id'");
		$this->db->query("update users_groups set group_id='".$data['hak']."' where user_id='$id'");
	}
	function insert_user($data){
		$this->db->query("insert into users(username,password,email,phone) values('".$data['nama']."','".$data['password']."','".$data['username']."','".$data['no_telp']."');");
		$this->db->query("insert into users_groups values(null,last_insert_id(),'".$data['hak']."')");
	}
	function insert_marketing($data){
		$this->db->query("insert into marketing values(null, '".$data['nama']."','".$data['alamat']."',last_insert_id())");
	}
	function insert_smarketing($data){
		$this->db->query("insert into supervisor_marketing values(null, '".$data['nama']."','".$data['alamat']."',last_insert_id())");
	}
	function insert_ts($data){
		$this->db->query("insert into technical_support values(null, '".$data['nama']."','".$data['alamat']."',last_insert_id())");
	}
	function insert_sts($data){
		$this->db->query("insert into supervisor_ts values(null, '".$data['nama']."','".$data['alamat']."',last_insert_id())");
	}
	function delete_user($id){
		$this->db->where('id',$id);
		$this->db->delete('users');
	}
}
?>