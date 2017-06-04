<?php
class zhaopin extends MY_Controller{
	public function alist(){
		$this->load->model('Zhaopinmodel');
		$this->load->library('pagination');
		$pagesize=10;
		$type=intval($this->uri->segment(3));
		$config['base_url']=site_url('zhaopin/alist/'.$type);
		$row=$this->Zhaopinmodel->alist($type,'','');
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
		$data['datalist']=$this->Zhaopinmodel->alist($type,$tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$data['type']=$type;
		$data['alltype']=$this->_zhaopintype();
		$this->load->view('zhaopin',$data);
	}
	public function add(){
		$data['act']='add';
		$data['alltype']=$this->_zhaopintype();
		$this->load->view('zhaopin',$data);
	}
	public function addsave(){
		
		$this->load->model('Zhaopinmodel');
		$bool=$this->Zhaopinmodel->addsave();
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('zhaopin/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('zhaopin/alist');
		}
		$data['act']='edit';
		$this->load->model('Zhaopinmodel');
		$data['datainfo']=$this->Zhaopinmodel->singleinfo($id);
		
		$this->load->view('zhaopin',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('zhaopin/alist');
		}
		$this->load->model('Zhaopinmodel');	
		
		
		$bool=$this->Zhaopinmodel->editsave();
		if($bool){
			echo '<script>alert("����ɹ���");location.href="'.site_url('zhaopin/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('zhaopin/alist');
		}	
		$this->load->model('Zhaopinmodel');	
		$bool=$this->Zhaopinmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('zhaopin/alist').'";</script>';
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
	function _zhaopintype(){
		return array(1=>'�ǻ۳��� ',2=>'��·��ͨ',3=>'������ͨ',4=>'������Ŀ',5=>'���ٹ�·',6=>'���н�ͨ',7=>'ͣ������');	
	}
}