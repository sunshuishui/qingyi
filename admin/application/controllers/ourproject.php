<?php
class Ourproject extends MY_Controller{
	public function olist(){
		$this->load->model('Ourprojectmodel');
		$this->load->library('pagination');
		$pagesize=15;
		$config['base_url']=site_url('ourproject/olist');
		$row=$this->Ourprojectmodel->olist('','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 3;
		$tiaoguo=intval($this->uri->segment(3));
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Ourprojectmodel->olist($tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$this->load->view('ourproject',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('ourproject',$data);
	}
	public function addsave(){
		$pic=$this->uploadimg('pic');
		$this->load->model('Ourprojectmodel');
		$bool=$this->Ourprojectmodel->addsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('ourproject/olist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('ourproject/olist');
		}
		$data['act']='edit';
		$this->load->model('Ourprojectmodel');
		$data['datainfo']=$this->Ourprojectmodel->singleinfo($id);
		$this->load->view('ourproject',$data);
	}
	public function editsave(){
		$id=$this->input->post('sid');
		if(!$id){
			redirect('ourproject/olist');
		}
		$pic=$this->uploadimg('pic');
		$this->load->model('Ourprojectmodel');
		$bool=$this->Ourprojectmodel->editsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('ourproject/olist').'";</script>';
		}
	}
	public function del($id=''){
		if(!$id){
			redirect('ourproject/olist');
		}	
		$this->load->model('Ourprojectmodel');	
		$bool=$this->Ourprojectmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('ourproject/olist').'";</script>';
		}
	}
	public function uploadimg($name){
		$pimg='';
		if(!empty($_FILES[$name]['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload($name)){
				$rdata=$this->upload->data();
				$pimg=$rdata['file_name'];
			}else{
				$pimg='';
			}
		}
		return $pimg;
	}
}