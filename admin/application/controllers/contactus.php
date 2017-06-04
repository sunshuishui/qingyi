<?php
class Contactus extends MY_Controller{
	public function clist(){
		$data['act']='list';
		$this->load->model('Contactusmodel');
		$data['datalist']=$this->Contactusmodel->clist();
		$this->load->view('contactus',$data);
	}
	public function cadd(){
		$this->load->model('Contactusmodel');
		$id=$this->Contactusmodel->add();
		if($id){
			echo '<script>location.href="'.site_url('contactus/cedit/'.$id).'"</script>';
		}
	}
	public function cdel($id=''){
		if(!$id){
			redirect('contactus/clist');
		}
		$this->load->model('Contactusmodel');
		$bool=$this->Contactusmodel->delete($id);
		if($bool){
			redirect('contactus/clist');
		}
	}
	public function cedit($id=''){
		$data['id']=$id;
		$data['act']='edit';
		$this->load->model('Contactusmodel');
		$data['datalist']=$this->Contactusmodel->clist();
		$data['datainfo']=$this->Contactusmodel->edit($id);
		$this->load->view('contactus',$data);
	}
	public function ceditsave(){
		$this->load->model('Contactusmodel');
		$id=$this->Contactusmodel->cupdate();
		echo '<script>alert("±£´æ³É¹¦£¡");location.href="'.site_url('contactus/cedit/'.$id).'";</script>';
	}
}