<?php
class Download extends CI_Controller{
	public function downloadlist(){
		$data['act']='list';
		$this->load->model('Downloadmodel');	
		$this->load->library('pagination');
		$pagesize=15;
		$config['base_url']=site_url('download/downloadlist');
		$row=$this->Downloadmodel->downloadlist('','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 3;
		$tiaoguo=intval($this->uri->segment(3));
		$config['first_link'] = '��ҳ';
		$config['last_link'] = 'βҳ';
		$config['next_link'] = '��һҳ';
		$config['prev_link'] = '��һҳ';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Downloadmodel->downloadlist($tiaoguo,$pagesize);
		$data['link']=$link;
		$this->load->view('downloadmanager',$data);
	}
	public function downloadadd(){
		$data['act']='add';
		$this->load->view('downloadmanager',$data);	
	}
	public function downloadedit($id){
		if($id==''){
			echo '<script>alert("����ʧ�ܣ������±༭")</script>';	
			redirect('download/downloadlist');
			exit();
		}
		$data['act']='edit';
		$this->load->model('Downloadmodel');
		$data['datalist']=$this->Downloadmodel->edit($id);
		$this->load->view('downloadmanager',$data);	
	}
	public function editsave(){
		$pimg='';
		if(!empty($_FILES['files']['tmp_name'])){
			$config['upload_path']='../downloads/';
			$config['allowed_types']='*';
			$config['max_size']='2048';
			$config['file_name']=time().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('files')){
				$rdata=$this->upload->data();
				$pimg=$rdata['file_name'];
			}
		}
		$this->load->model('Downloadmodel');
		$bool=$this->Downloadmodel->editsave($pimg);
		if($bool){
			echo '<script>alert("�༭�ɹ�");location.href="'.site_url('download/downloadlist').'"</script>';
		}else{
			echo '<script>alert("�༭ʧ�ܣ������±༭")location.href="'.site_url('download/downloadlist').'"</script>';	
		}	
	}
	public function downloaddelete($id){
		if($id==''){
			echo '<script>alert("ɾ��ʧ�ܣ�������ɾ��")</script>';	
			redirect('download/downloadlist');
			exit();
		}
		$this->load->model('Downloadmodel');
		$bool=$this->Downloadmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('download/downloadlist').'"</script>';
		}else{
			echo '<script>alert("ɾ��ʧ�ܣ�������ɾ��")location.href="'.site_url('download/downloadlist').'"</script>';	
		}
	}
	public function addsave(){
		$pimg='';
		$this->load->model('Downloadmodel');
		if(!empty($_FILES['files']['tmp_name'])){
			$config['upload_path']='../downloads/';
			$config['allowed_types']='*';
			$config['max_size']='2048';
			$config['file_name']=time().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload('files')){
				$rdata=$this->upload->data();
				$pimg=$rdata['file_name'];
			}else{
				exit($this->upload->display_errors());	
			}
		}
		if(empty($pimg)){
			echo '<script>alert("��ѡ���ļ��ϴ�");location.href="'.site_url('download/downloadadd').'"</script>';
			exit();	
		}
		$bool=$this->Downloadmodel->addsave($pimg);
		if($bool){
			echo '<script>alert("��ӳɹ�");location.href="'.site_url('download/downloadlist').'"</script>';
		}else{
			echo '<script>alert("���ʧ�ܣ����������")location.href="'.site_url('download/downloadlist').'"</script>';	
		}
	}
}