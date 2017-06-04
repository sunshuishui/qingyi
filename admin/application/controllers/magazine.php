<?php
class Magazine extends MY_Controller{
	public function mlist(){
		$this->load->model('Magazinemodel');
		$this->load->library('pagination');
		$pagesize=20;
		$config['base_url']=site_url('magazine/mlist');
		$row=$this->Magazinemodel->mlist('','');
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
		$data['datalist']=$this->Magazinemodel->mlist($tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$this->load->view('magazine',$data);
	}
	public function add(){
	$data['act']='add';
	$this->load->view('magazine',$data);
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
		$logo=$this->uploadimg('logo');
		$this->load->model('Magazinemodel');
		$bool=$this->Magazinemodel->addsave($pic,$logo);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('magazine/mlist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('magazine/tlist');
		}
		$data['act']='edit';
		$this->load->model('Magazinemodel');
		$data['datainfo']=$this->Magazinemodel->singleinfo($id);
		$this->load->view('magazine',$data);
	}
	public function editsave(){
		$id=$this->input->post('sid');
		if(!$id){
			redirect('magazine/mlist');
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
		$this->load->model('Magazinemodel');	
		$res=$this->Magazinemodel->singleinfo($id);
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
		$logo=$this->uploadimg('logo');
		$bool=$this->Magazinemodel->editsave($img_now,$logo,$oldpic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('magazine/mlist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('magazine/mlist');
		}	
		$this->load->model('Magazinemodel');	
		$bool=$this->Magazinemodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('magazine/mlist').'";</script>';
		}
	}
	public function uploadimg($name){
		$pimg='';
		if(!empty($_FILES[$name]['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='500';
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