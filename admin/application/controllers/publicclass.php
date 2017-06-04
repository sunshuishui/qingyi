<?php
class Publicclass extends MY_Controller{
	public function intro(){
		$data['act']='iedit';
		$this->load->model('Publicclassmodel');
		$data['datainfo']=$this->Publicclassmodel->intro();
		$this->load->view('publicclass',$data);
	}
	public function ieditsave(){
		$this->load->model('Publicclassmodel');
		$bool=$this->Publicclassmodel->ieditsave();
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('publicclass/intro').'"</script>';	
		}
	}
	public function plist(){
		$data['act']='list';
		$this->load->model('Publicclassmodel');
		$data['datalist']=$this->Publicclassmodel->plist();
		$this->load->view('publicclass',$data);	
	}
	public function add(){
		$data['act']='add';
		$this->load->view('publicclass',$data);
	}
	public function addsave(){
		$logo=$this->uploadimg('logo');
		$this->load->model('Publicclassmodel');
		$bool=$this->Publicclassmodel->addsave($logo);
		if($bool){
			echo '<script>alert("添加成功！");location.href="'.site_url('publicclass/plist').'"</script>';		
		}
		
	}
	public function edit($id=''){
		if(!$id){
			redirect('publicclass/plist');
		}
		$data['act']='edit';
		$this->load->model('Publicclassmodel');
		$data['datainfo']=$this->Publicclassmodel->singleinfo($id);
		$this->load->view('publicclass',$data);
	}
	public function editsave(){
		$id=$this->input->post('sid');
		if(!$id){
			redirect('publicclass/plist');
		}
		$logo=$this->uploadimg('logo');
		$this->load->model('Publicclassmodel');
		$bool=$this->Publicclassmodel->editsave($logo);
		if($bool){
			echo '<script>alert("编辑成功！");location.href="'.site_url('publicclass/plist').'"</script>';		
		}
	}
	public function del($id=''){
		if(!$id){
			redirect('publicclass/plist');
		}	
		$this->load->model('Publicclassmodel');	
		$bool=$this->Publicclassmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('publicclass/plist').'";</script>';
		}
	}
	public function uploadimg($name){
		$pimg='';
		if(!empty($_FILES[$name]['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='200';
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