<?php
class Apply extends MY_Controller{
	public function alist(){
		$this->load->model('Applymodel');
		$this->load->library('pagination');
		$pagesize=30;
		$config['base_url']=site_url('apply/alist');
		$row=$this->Applymodel->alist('','');
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
		$data['datalist']=$this->Applymodel->alist($tiaoguo,$pagesize);
		$data['link']=$link;
		$this->load->view('apply',$data);
	}
	public function del($id=''){
		if(!$id){
			redirect('apply/alist');
		}	
		$this->load->model('Applymodel');	
		$bool=$this->Applymodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('apply/alist').'";</script>';
		}
	}
}