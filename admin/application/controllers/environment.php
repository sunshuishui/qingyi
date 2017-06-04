<?php
class Environment extends MY_Controller{
	public function index(){
		$this->load->model('Environmentmodel');	
		$data['datainfo']=$this->Environmentmodel->elist();
		$this->load->view('environment',$data);
	}
	public function editsave(){
		$oldpic=$this->input->post('oldimg');
		if(!is_array($oldpic)){
			$oldpic=array();	
		}
		$oldpiclen=intval(count($oldpic));
		
		$tolpic=$this->input->post('tolpic');
		
		$num=$this->input->post('num');
		if(($tolpic-$oldpiclen+$num)>8){
			$num_=8-($tolpic-$oldpiclen);
		}else{
			$num_=$num;
		}
		$this->load->model('Environmentmodel');	
		$res=$this->Environmentmodel->elist();
		$ximg=explode('$',$res['pic']);
		if(!is_array($ximg)){
			$ximg=array();	
		}
		
		$img_now=array_diff($ximg,$oldpic);
		$img_now=implode('$',$img_now);
		$pic='';
		for($i=1;$i<=$num_;$i++){
			$tmpimg=$this->uploadimg('pic'.$i);
			if($tmpimg){
				if($pic){
					$pic=$pic.'$'.$tmpimg;
				}else{
					$pic=$tmpimg;
				}
			}
		}
		if($pic){
			if($img_now){
				$img_now=$img_now.'$'.$pic;	
			}else{
				$img_now=$pic;	
			}
		}
		$bool=$this->Environmentmodel->editsave($img_now,$oldpic);
		if($bool){
			echo '<script>alert("±£´æ³É¹¦£¡");location.href="'.site_url('environment/index').'";</script>';
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