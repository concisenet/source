<?php
//链接管理模块
class LinkAction extends Action {
	private $db;
	public function __construct(){
		parent::__construct();
		$this->db=M('link');
	}
    public function index(){
		$this->_page();//调用私有函数，分页处理函数
		$this->display();
    }
	//add操作，添加链接
	public function add(){
		$this->_getcatname();//获取栏目中文名称
		//$info=$this->_upload();//调用私有函数，文件上传处理函数
		if($_POST['aaa']){
			$this->ajaxReturn($_POST,'成功',1);
		}
		$ajax_path=$info[0]['savepath'].$info[0]['savename'];//将上传的图片的地址Ajax返回
		if($_POST['submit']){
			$condition['link_name']=$_POST['link_name'];
			$condition['link_url']=$_POST['link_url'];
			$condition['_logic']='OR';
			if(is_array($result=$this->db->where($condition)->find())){
				$this->error('已经有该网站的信息');
			}else{
			$link_data['pid']=$_POST['cid'];
			$link_data['link_name']=$_POST['link_name'];
			$link_data['link_url']=$_POST['link_url'];
			$link_data['link_other']=$_POST['link_other'];
			$link_data['link_order']=$_POST['link_order'];
			$link_data['link_logo']=$_POST['link_logo'];
			
			if($this->db->add($link_data))
				$this->success('添加成功');
			}
		}
		$this->display();
	}
	//edit操作，修改链接
	public function edit(){
		//编辑模块遇到技术难题，目前想到的最好的办法是ajax异步传输，进一步研究再写此模块 2013/8/10 16:07
		$this->_getcatname();//获取栏目中文名称
		$this->edit_info=$this->db->where('lid='.$_GET['lid'])->find();
		$this->display();
	}
	//del操作，删除链接
	public function del(){
		//此模块需要加个删除确认框2013/8/10 16:09
		if($this->db->where('lid='.$_GET['lid'])->delete())
			$this->success('删除成功');
	}
	//文件上传处理函数
	private function _upload(){
		import ('ORG.Net.UploadFile');//导入文件上传类
		$upload=new UploadFile();
		$upload->maxSize=2000000;
		$upload->allowExts=array('jpg','gif','png','jpeg');
		$upload->savePath='./Public/uploads/';
		if(!$upload->upload())
			$this->error($upload->getErrorMsg());	
		return $info=$upload->getUploadFileInfo();
	}
	//分页处理函数
	private function _page(){
		import('ORG.Util.Page');//导入分页类
		$count=$this->db->count();//计算总记录条数
		$page=new Page($count,10);//实例化分页类
		$show=$page->show();//分页样式
		$this->link_result=$this->db->order('link_order desc')->limit($page->firstRow.','.$page->listRows)->select();//查询的每页的数据
		$this->assign('page_style',$show);//将分页展示样式分配到模板
	}

	private function _getcatname(){
		$cat_db=M('category');
		$this->cat_info=$cat_db->getField('cid,cat_name,cat_type');
	}
}