<?php
class Rongyu extends MY_Controller{
	public function qlist(){
		$data['act']='qlist';
		$this->load->model('Rongyumodel');
		$data['datalist']=$this->Rongyumodel->qlist();
		$this->load->view('rongyu',$data);
	}
	public function jlist(){
		$data['act']='jlist';
		$this->load->model('Rongyumodel');
		$data['datalist']=$this->Rongyumodel->jlist();
		$this->load->view('rongyu',$data);
	}	
	public function qadd(){
		$pic='';
		if(!empty($_FILES['pic']['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('pic')){
				$rdata=$this->upload->data();
				$pic=$rdata['file_name'];
			}else{
				$pic='';
			}
		}
		$this->load->model('Rongyumodel');
		$bool=$this->Rongyumodel->qaddsave($pic);
		if($bool){
			echo '<script>alert("添加成功");location.href="'.site_url('rongyu/qlist').'"</script>';
		}
	}
	public function jadd(){
		$pic='';
		if(!empty($_FILES['pic']['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('pic')){
				$rdata=$this->upload->data();
				$pic=$rdata['file_name'];
			}else{
				$pic='';
			}
		}
		$this->load->model('Rongyumodel');
		$bool=$this->Rongyumodel->jaddsave($pic);
		if($bool){
			echo '<script>alert("添加成功");location.href="'.site_url('rongyu/jlist').'"</script>';
		}
	}
	public function edit(){
		$pic='';
		if(!empty($_FILES['pic']['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('pic')){
				$rdata=$this->upload->data();
				$pic=$rdata['file_name'];
			}else{
				$pic='';
			}
		}
		$this->load->model('Rongyumodel');
		$bool=$this->Rongyumodel->editsave($pic);
		if($bool){
			echo '<script>alert("编辑成功");location.href="'.site_url('rongyu/qlist').'"</script>';
		}
	}
	public function jedit(){
		$pic='';
		if(!empty($_FILES['pic']['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('pic')){
				$rdata=$this->upload->data();
				$pic=$rdata['file_name'];
			}else{
				$pic='';
			}
		}
		$this->load->model('Rongyumodel');
		$bool=$this->Rongyumodel->jeditsave($pic);
		if($bool){
			echo '<script>alert("编辑成功");location.href="'.site_url('rongyu/jlist').'"</script>';
		}
	}
	public function delete($id){
		if(!$id){
			redirect('rongyu/qlist');
		}
		$this->load->model('Rongyumodel');
		$bool=$this->Rongyumodel->delete($id);
		if($bool){
			redirect('rongyu/qlist');
		}
	}
	public function jdelete($id){
		if(!$id){
			redirect('rongyu/jlist');
		}
		$this->load->model('Rongyumodel');
		$bool=$this->Rongyumodel->delete($id);
		if($bool){
			redirect('rongyu/jlist');
		}
	}
}