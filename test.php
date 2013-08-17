<?php
	class aa{
		private $db;
		function __construct(){
			$this->db=M("user");
		}
		function index(){
			$this->db->where("id=1")->select();
		}

		function add(){
		
		}

		function save(){
		
		}
	}

?>