<?php

class Hello_Model extends CI_Model
{
	
	function displayrecords()
	{
		$query=$this->db->query("select * from users");
		return $query->result();

	}


	function displayrecordsById($id)
	{
		$query=$this->db->query("select * from users where user_id='".$id."'");
		return $query->result();
	}

	function updaterecords($name,$email,$mobile,$gender,$hobbies,$address,$city,$avtar)
	{
		$this->db->query("update users SET name='$name',email='$email',mobile='$mobile',gender='$gender',hobbies='$hobbies',address='$address',city='$city',avtar='$avtar' where user_id='".$id."'");
	}

	
	function deleterecords($id)
	{
         $this->db->query("delete from users where user_id='".$id."'");

	}

}
?>