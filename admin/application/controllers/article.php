<?php
class Article extends MY_Controller{
	public function alist(){
		$this->load->model('Articlemodel');
		$this->load->library('pagination');
		$pagesize=30;
		$type=intval($this->uri->segment(3));
		$config['base_url']=site_url('article/alist/'.$type);
		$row=$this->Articlemodel->alist($type,'','');
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
		$data['datalist']=$this->Articlemodel->alist($type,$tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$data['type']=$type;
		$data['alltype']=$this->_articletype();
		$this->load->view('article',$data);
	}
	public function add(){
		$data['act']='add';
		$data['alltype']=$this->_articletype();
		$this->load->view('article',$data);
	}
	public function addsave(){
		$logo=$this->uploadimg('logo');
		$this->load->model('Articlemodel');
		$bool=$this->Articlemodel->addsave($logo);
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('article/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('article/alist');
		}
		$data['act']='edit';
		$this->load->model('Articlemodel');
		$data['datainfo']=$this->Articlemodel->singleinfo($id);
		$data['alltype']=$this->_articletype();
		$this->load->view('article',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('article/alist');
		}
		$this->load->model('Articlemodel');	
		$logo=$this->uploadimg('logo');
		
		$bool=$this->Articlemodel->editsave($logo);
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('article/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('article/alist');
		}	
		$this->load->model('Articlemodel');	
		$bool=$this->Articlemodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('article/alist').'";</script>';
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
	function _articletype(){
		return array(1=>'��˾Ҫ��',2=>'��ҵ��̬',3=>'����ǰ��');	
	}
}