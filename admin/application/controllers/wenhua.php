<?php
class Wenhua extends MY_Controller{
	public function wlist(){
		$data['act']='list';
		$this->load->model('Wenhuamodel');
		$this->load->library('pagination');
		$pagesize=15;
		$config['base_url']=site_url('wenhua/wlist');
		$row=$this->Wenhuamodel->wlist('','');
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
		$data['datalist']=$this->Wenhuamodel->wlist($tiaoguo,$pagesize);
		$data['link']=$link;
		$this->load->view('wenhua',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('wenhua',$data);
	}
	public function edit($id=''){
		if(!$id){
			redirect('wenhua/wlist');	
		}
		$data['act']='edit';
		$this->load->model('Wenhuamodel');
		$data['datainfo']=$this->Wenhuamodel->singleinfo($id);
		$this->load->view('wenhua',$data);
	}
	public function addsave(){
		$num=$this->input->post('num');
		$pic='';
		for($i=1;$i<=$num;$i++){
			$tmpimg=$this->uploadimg('pic'.$i);
			if($tmpimg){
				if($pic){
					$pic=$pic.'$'.$tmpimg;
				}else{
					$pic=$tmpimg;
				}
			}
		}
		$data['act']='add';
		$this->load->model('Wenhuamodel');
		$bool=$this->Wenhuamodel->addsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('wenhua/wlist').'";</script>';
		}
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('job/jiangxuejin');
		}
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
		$this->load->model('Wenhuamodel');	
		$res=$this->Wenhuamodel->singleinfo($id);
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
		$bool=$this->Wenhuamodel->editsave($img_now,$oldpic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('wenhua/wlist').'";</script>';
		}
	}
	public function del($id=''){
		if(!$id){
			redirect('job/jiangxuejin');
		}	
		$this->load->model('Wenhuamodel');	
		$bool=$this->Wenhuamodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('wenhua/wlist').'";</script>';	
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