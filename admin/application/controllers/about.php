<?php
class About extends MY_Controller{
	public function aedit($type='gsjj'){
		$data['act']=$type;
		$this->load->model('Aboutmodel');
		$data['datainfo']=$this->Aboutmodel->editlistinfor($type);
		$this->load->view('about',$data);
	}

	public function editsave(){
		$this->load->model('Aboutmodel');
		$bool=$this->Aboutmodel->editsaveinfor();
		if($bool){
			echo '<script>alert("±à¼­³É¹¦");history.back();</script>';	
		}
	}
}