<?php
//反馈留言板管理模块
//单纯为了用户反馈使用，设计之初并未打算将留言显示在前台页面，所有有些操作可留空，以便后期扩展使用
class MessageAction extends Action {
	//列表显示所有留言标题
    public function index(){
		$this->show('所有留言列表，分页显示');
    }
	//审核留言
	public function audit(){
		$this->show('审核留言，可留空，为后期扩展设计');
	}
	//显示单条留言的详细信息
	public function detail(){
		$this->show('单条留言的详细信息');
	}
	//对留言进行编辑（其实没必要，不会将留言在前台显示，词操作可以留空，以便后期扩展使用）
	public function edit(){
		$this->show('对留言进行编辑');
	}
	public function del(){
		$this->show('删除留言');
	}
}