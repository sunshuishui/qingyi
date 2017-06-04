<?php
class Product extends MY_Controller{
	public function plist(){
		$this->load->model('Productmodel');
		$this->load->library('pagination');
		$pagesize=30;
		$type=intval($this->uri->segment(3));
		$config['base_url']=site_url('product/plist/'.$type);
		$row=$this->Productmodel->plist($type,'','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 4;
		$tiaoguo=intval($this->uri->segment(4));
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Productmodel->plist($type,$tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$data['type']=$type;
		$data['alltype']=$this->_producttype();
		$this->load->view('product',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->model('Productmodel');
		$data['alltype']=$this->_producttype();
		$data['downlist']=$this->Productmodel->downlist();
		$this->load->view('product',$data);
	}
	public function addsave(){
		$logo=$this->uploadimg('logo');
		
		$this->load->model('Productmodel');
		$bool=$this->Productmodel->addsave($logo);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('product/plist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('product/plist');
		}
		$data['act']='edit';
		$this->load->model('Productmodel');
		$data['datainfo']=$this->Productmodel->singleinfo($id);
		$data['downlist']=$this->Productmodel->downlist();
		$data['alltype']=$this->_producttype();
		$this->load->view('product',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('product/plist');
		}
		$this->load->model('Productmodel');	
		$logo=$this->uploadimg('logo');
		
		$bool=$this->Productmodel->editsave($logo);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('product/plist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('product/plist');
		}	
		$this->load->model('Productmodel');	
		$bool=$this->Productmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('product/plist').'";</script>';
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
	function _producttype(){
		return array(1=>'硬件产品',2=>'软件产品',3=>'设计服务');
	}
}