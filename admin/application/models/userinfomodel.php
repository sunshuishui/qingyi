<?php
class Userinfomodel extends CI_Model{
	public function userlist(){
		$res=$this->db->get('adminuser');	
		return $res->result_array();
	}
	public function adduser(){
		$pdata['username']=$this->input->post('username');
		$pdata['password']=md5($this->input->post('password'));
		$pw=$this->input->post('password');
		if(!$pdata['username'] or !$pw){
			echo '<script>alert("����д�����û����ϣ�");location.href="'.site_url('userinfo/userlist').'";</script>';
			exit();
		}
		return $this->db->insert('adminuser',$pdata);
	}
	public function editsave(){
		$id=$this->input->post('uid');
		$pdata['username']=$this->input->post('username');
		$pw=$this->input->post('password');
		if(!$pdata['username'] or !$pw){
			echo '<script>alert("����д�����û����ϣ�");location.href="'.site_url('userinfo/userlist').'";</script>';
			exit();
		}
		if($this->input->post('password')!='1q013n'){
			$pdata['password']=md5($this->input->post('password'));
		}
		
		if($id==''){
			echo '<script>alert("�༭ʧ�ܣ������±༭")</script>';	
			redirect('userinfo/userlist');
			exit();
		}
		$res=$this->db->where(array('id'=>$id))->update('adminuser',$pdata);
		return $res;
	}	
	public function deleteuser($id){
		if($id==''){
			echo '<script>alert("ɾ��ʧ�ܣ�������ɾ��")</script>';
			redirect('userinfo/userlist');
			exit();
		}

		$res=$this->db->delete('adminuser',array('id'=>$id));
		return $res;
	}
	
}