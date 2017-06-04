<?php
class Solution extends MY_Controller{
	public function alist(){
		$this->load->model('Solutionmodel');
		$this->load->library('pagination');
		$pagesize=30;
		$type=intval($this->uri->segment(3));
		$config['base_url']=site_url('solution/alist/'.$type);
		$row=$this->Solutionmodel->alist($type,'','');
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
		$data['datalist']=$this->Solutionmodel->alist($type,$tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$data['type']=$type;
		$data['alltype']=$this->_solutiontype();
		$this->load->view('solution',$data);
	}
	public function add(){
		$data['act']='add';
		$data['alltype']=$this->_solutiontype();
		$this->load->view('solution',$data);
	}
	public function addsave(){
		$logo=$this->uploadimg('logo');
		$this->load->model('Solutionmodel');
		$bool=$this->Solutionmodel->addsave($logo);
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('solution/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('solution/alist');
		}
		$data['act']='edit';
		$this->load->model('Solutionmodel');
		$data['datainfo']=$this->Solutionmodel->singleinfo($id);
		$data['alltype']=$this->_solutiontype();
		$this->load->view('solution',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('solution/alist');
		}
		$this->load->model('Solutionmodel');	
		$logo=$this->uploadimg('logo');
		
		$bool=$this->Solutionmodel->editsave($logo);
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('solution/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('solution/alist');
		}	
		$this->load->model('Solutionmodel');	
		$bool=$this->Solutionmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('solution/alist').'";</script>';
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
	function _solutiontype(){
		return array(1=>'�ǻ۽�ͨ',2=>'�ǻ�ͣ��',3=>'�ǻ۹���');
	}
}