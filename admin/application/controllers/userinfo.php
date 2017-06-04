<?php
class Userinfo extends MY_Controller{
	public function userlist(){
		$this->load->model('Userinfomodel');	
		$data['datalist']=$this->Userinfomodel->userlist();
		$this->load->view('userinfo',$data);
	}
	public function adduser(){
		$this->load->model('Userinfomodel');
		$bool=$this->Userinfomodel->adduser();
		if($bool){
			echo '<script>alert("添加成功");location.href="'.site_url('userinfo/userlist').'"</script>';
		}else{
			echo '<script>alert("添加失败，请重新添加")location.href="'.site_url('userinfo/userlist').'"</script>';	
		}
	}
	public function deleteuser($id=''){
		$this->load->model('Userinfomodel');	
		$bool=$this->Userinfomodel->deleteuser($id);
		if($bool){
			echo '<script>location.href="'.site_url('userinfo/userlist').'"</script>';
		}else{
			echo '<script>alert("删除失败，请重新删除");location.href="'.site_url('userinfo/userlist').'"</script>';	
		}	
	}
	public function editsave(){
		$this->load->model('Userinfomodel');	
		$bool=$this->Userinfomodel->editsave();
		if($bool){
			echo '<script>alert("编辑成功");location.href="'.site_url('userinfo/userlist').'"</script>';
		}else{
			echo '<script>alert("编辑失败，请重新操作")location.href="'.site_url('userinfo/userlist').'"</script>';	
		}
	}
}