<?php
	class AjaxtestAction extends Action{
		function index(){
			if($_POST['uname']){
				$info=$this->_upload();
				$return_path=$info[0]['savepath'].$info[0]['savename'];
				$this->ajaxReturn($return_path,'OK',1);
			}
			
			$this->nowdate=date("Y-m-d H:i:s");
			$this->display();
		}

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
	}
?>