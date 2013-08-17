<?php
// 后台管理
class IndexAction extends Action {
    public function index(){
			$this->display();
    }
	//后台管理员登陆验证
	public function login(){
		$this->show('后台管理员登陆验证');
	}

	public function logout(){
		$this->show('销毁session,安全退出');
	}
	
}