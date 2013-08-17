<?php
//栏目管理模块
class CategoryAction extends Action {
		private $db;
		public function __construct(){
			parent::__construct();
			$this->db=M('category');
		}
    public function index(){
		$this->result=$this->db->select();
		$this->display();
    }
	//add操作，添加栏目
	public function add(){
		if($_POST['cat_name']){
			array_pop($_POST);
			array_pop($_POST);
			$condition['cat_name']=$_POST['cat_name'];
			$condition['cat_name_en']=$_POST['cat_name_en'];
			$condition['_logic']='OR';
			$resu=$this->db->where($condition)->select();
			if(is_array($resu[0])){
				$this->error("已经有该栏目或者该英文名字存在");
			}else{
				if($this->db->add($_POST))
					$this->success("添加成功");
			}
		}
		$this->display();
	}
	//edit操作，修改栏目
	public function edit(){
		$this->info=$this->db->where('cid='.$_GET['cid'])->find();
		if($_POST['update']){
			array_pop($_POST);
			array_pop($_POST);
			if($this->db->where('cid='.$_POST['cid'])->save($_POST))
				$this->success('修改成功');
		}
		$this->display();
	}
	//del操作，删除栏目
	public function del(){
		if($this->db->where('cid='.$_GET['cid'])->delete())
			$this->success('删除成功');
	}
}