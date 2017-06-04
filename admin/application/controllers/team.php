<?php
class Team extends MY_Controller{
	public function tlist(){
		$this->load->model('Teammodel');
		$data['datalist']=$this->Teammodel->tlist();
		$data['act']='list';
		$this->load->view('team',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('team',$data);
	}
	public function edit($id=''){
		if(!$id){
			redirect('team/tlist');
		}
		$data['act']='edit';
		$this->load->model('Teammodel');
		$data['datainfo']=$this->Teammodel->singleinfo($id);
		$this->load->view('team',$data);
	}
	public function addsave(){
		$this->load->model('Teammodel');
		$bool=$this->Teammodel->addsave();
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('team/tlist').'";</script>';
		}
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('team/tlist');
		}
		$this->load->model('Teammodel');
		$bool=$this->Teammodel->editsave();
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('team/tlist').'";</script>';
		}
	}
}