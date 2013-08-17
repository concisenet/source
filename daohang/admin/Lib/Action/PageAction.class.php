<?php
//单页管理模块
class PageAction extends Action {
    public function index(){
		$this->display();
    }
	//add操作，添加单页
	public function add(){
		$this->display();
	}
	//edit操作，修改单页
	public function edit(){
		$this->show('后台page模块的edit操作');
	}
	//del操作，删除单页
	public function del(){
		$this->show('后台page模块的del操作');
	}
}