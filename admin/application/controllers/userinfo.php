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
			echo '<script>alert("��ӳɹ�");location.href="'.site_url('userinfo/userlist').'"</script>';
		}else{
			echo '<script>alert("���ʧ�ܣ����������")location.href="'.site_url('userinfo/userlist').'"</script>';	
		}
	}
	public function deleteuser($id=''){
		$this->load->model('Userinfomodel');	
		$bool=$this->Userinfomodel->deleteuser($id);
		if($bool){
			echo '<script>location.href="'.site_url('userinfo/userlist').'"</script>';
		}else{
			echo '<script>alert("ɾ��ʧ�ܣ�������ɾ��");location.href="'.site_url('userinfo/userlist').'"</script>';	
		}	
	}
	public function editsave(){
		$this->load->model('Userinfomodel');	
		$bool=$this->Userinfomodel->editsave();
		if($bool){
			echo '<script>alert("�༭�ɹ�");location.href="'.site_url('userinfo/userlist').'"</script>';
		}else{
			echo '<script>alert("�༭ʧ�ܣ������²���")location.href="'.site_url('userinfo/userlist').'"</script>';	
		}
	}
}