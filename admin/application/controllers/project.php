<?php
class Project extends MY_Controller{
	public function alist(){
		$this->load->model('Projectmodel');
		$this->load->library('pagination');
		$pagesize=30;
		$type=intval($this->uri->segment(3));
		$config['base_url']=site_url('project/alist/'.$type);
		$row=$this->Projectmodel->alist($type,'','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 4;
		$tiaoguo=intval($this->uri->segment(4));
		$config['first_link'] = '��ҳ';
		$config['last_link'] = 'βҳ';
		$config['next_link'] = '��һҳ';
		$config['prev_link'] = '��һҳ';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Projectmodel->alist($type,$tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$data['type']=$type;
		$data['alltype']=$this->_projecttype();
		$this->load->view('project',$data);
	}
	public function add(){
		$data['act']='add';
		$data['alltype']=$this->_projecttype();
		$this->load->view('project',$data);
	}
	public function addsave(){
		$logo=$this->uploadimg('logo');
		$this->load->model('Projectmodel');
		$bool=$this->Projectmodel->addsave($logo);
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('project/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('project/alist');
		}
		$data['act']='edit';
		$this->load->model('Projectmodel');
		$data['datainfo']=$this->Projectmodel->singleinfo($id);
		$data['alltype']=$this->_projecttype();
		$this->load->view('project',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('project/alist');
		}
		$this->load->model('Projectmodel');	
		$logo=$this->uploadimg('logo');
		
		$bool=$this->Projectmodel->editsave($logo);
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('project/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('project/alist');
		}	
		$this->load->model('Projectmodel');	
		$bool=$this->Projectmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('project/alist').'";</script>';
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
	function _projecttype(){
		return array(2=>'���н�ͨ',3=>'������ͨ',4=>'ͣ������',5=>'������Ŀ');	
	}
}