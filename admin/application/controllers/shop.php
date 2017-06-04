<?php
class Shop extends MY_Controller{
	public function slist(){
		$this->load->model('Shopmodel');
		$data['datalist']=$this->Shopmodel->slist();
		$data['act']='list';
		$this->load->view('shop',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('shop',$data);	
	}
	public function addsave(){
		$logo=$this->uploadimg('logo');
		$infor=$this->uploadimg('infor');
		$this->load->model('Shopmodel');
		$bool=$this->Shopmodel->addsave($logo,$infor);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('shop/slist').'";</script>';
		}
	}
	public function edit($id){
		if(!$id){
			redirect('shop/slist');
		}
		$data['act']='edit';
		$this->load->model('Shopmodel');
		$data['datainfo']=$this->Shopmodel->singleinfo($id);
		$this->load->view('shop',$data);	
	}
	public function editsave(){
		$id=$this->input->post('sid');
		if(!$id){
			redirect('shop/slist');
		}
		$logo=$this->uploadimg('logo');
		$infor=$this->uploadimg('infor');
		$this->load->model('Shopmodel');
		$bool=$this->Shopmodel->editsave($logo,$infor);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('shop/slist').'";</script>';
		}
	}
	public function del($id){
		if(!$id){
			redirect('shop/slist');
		}
		$this->load->model('Shopmodel');
		$bool=$this->Shopmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('shop/slist').'";</script>';
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