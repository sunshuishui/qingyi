<?php
class Job extends MY_Controller{
	public function shehui($id=''){
		$data['act']='sh';
		$this->load->model('Jobmodel');
		$data['datainfo']=$this->Jobmodel->shinfo($id);
		$data['datalist']=$this->Jobmodel->shlist();
		$data['id']=$id;
		$this->load->view('zhaomu',$data);
	}
	public function addsh(){
		$data['act']='addsh';
		$this->load->view('zhaomu',$data);
	}
	public function addsavesh(){
		$this->load->model('Jobmodel');
		$id=$this->Jobmodel->addsh();
		if($id){
			echo '<script>location.href="'.site_url('job/shehui/'.$id).'"</script>';
		}
	}
	public function delsh($id=''){
		if(!$id){
			redirect('job/shehui');
		}
		$this->load->model('Jobmodel');
		$bool=$this->Jobmodel->deletesh($id);
		if($bool){
			redirect('job/shehui');
		}
	}
	public function editsavesh(){
		$this->load->model('Jobmodel');
		$id=$this->Jobmodel->shupdate();
		echo '<script>alert("保存成功！");location.href="'.site_url('job/shehui/'.$id).'";</script>';
	}
	public function editsaveshlc(){
		$this->load->model('Jobmodel');
		$this->Jobmodel->shupdatelc();
		echo '<script>alert("保存成功！");location.href="'.site_url('job/shlc').'";</script>';
	}
	public function shlc(){
		$this->load->model('Jobmodel');
		$data['act']='shlc';
		$data['datainfo']=$this->Jobmodel->shlcinfor();
		$this->load->view('zhaomu',$data);
	}
	public function xyzm($type=''){
		$this->load->model('Jobmodel');
		$data['act']='xyzm';
		$data['type']=$type;
		$data['datainfo']=$this->Jobmodel->xyinfor($type);
		$this->load->view('zhaomu',$data);
	}
	public function editsavexy(){
		$this->load->model('Jobmodel');
		$type=$this->Jobmodel->xyupdate();
		echo '<script>alert("保存成功！");location.href="'.site_url('job/xyzm/'.$type).'";</script>';
	}
	public function jiangxuejin(){
		$data['act']='jxj';
		$this->load->model('Jobmodel');	
		$this->load->library('pagination');
		$pagesize=15;
		$config['base_url']=site_url('job/jiangxuejin');
		$row=$this->Jobmodel->jxjlist('','');
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
		$data['datalist']=$this->Jobmodel->jxjlist($tiaoguo,$pagesize);
		$data['link']=$link;
		$this->load->view('zhaomu',$data);
	}
	public function addjxj(){
		$data['act']='addjxj';
		$this->load->view('zhaomu',$data);	
	}
	public function addsavejxj(){
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
		$this->load->model('Jobmodel');
		$bool=$this->Jobmodel->addsavejxj($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('job/jiangxuejin').'";</script>';
		}
		//$this->load->view('zhaomu',$data);	
	}
	public function jxjdel($id){
		if(!$id){
			redirect('job/jiangxuejin');
		}
		$this->load->model('Jobmodel');
		$bool=$this->Jobmodel->jxjdelete($id);
		if($bool){
			redirect('job/jiangxuejin');
		}
	}
	public function editjxj($id){
		if(!$id){
			redirect('job/jiangxuejin');
		}
		$this->load->model('Jobmodel');
		$res=$this->Jobmodel->editjxj($id);
		$data['act']='editjxj';
		$data['datainfo']=$res;
		$this->load->view('zhaomu',$data);	
	}
	public function editsavejxj(){
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
		$this->load->model('Jobmodel');
		$res=$this->Jobmodel->editjxj($id);
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
		//exit($img_now);
		$bool=$this->Jobmodel->editsavejxj($img_now,$oldpic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('job/jiangxuejin').'";</script>';
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