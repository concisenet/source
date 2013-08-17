<?php
//文章管理模块
class ArticleAction extends Action {
    public function index(){
	$this->show('这是后台的article模块index操作');
    }
	//add操作，添加文章
	public function add(){
		$this->show('后台article模块的add操作');
	}
	//edit操作，修改文章
	public function edit(){
		$this->show('后台article模块的edit操作');
	}
	//del操作，删除文章
	public function del(){
		$this->show('后台article模块的del操作');
	}
}