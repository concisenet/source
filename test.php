<?php
	class aa{
		private $db;
		function __construct(){
			$this->db=M("user");
		}
		function index(){
			$this->db->where("pid={$pid}")->select();
		}

		function add(){
			$this->db->add($data);
		}

		function update(){
			$this->db->save();
		}
	}

?>