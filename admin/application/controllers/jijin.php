<?php
class Jijin extends MY_Controller{
	public function index(){
		$this->load->model('Jijinmodel');
		$data['datainfo']=$this->Jijinmodel->infor();
		$this->load->view('jijin',$data);
	}
	public function editsave(){
		$this->load->model('Jijinmodel');
		$bool=$this->Jijinmodel->editsave();
		if($bool){
			echo '<script>alert("±£´æ³É¹¦£¡");location.href="'.site_url('jijin/index').'";</script>';
		}
	}
}