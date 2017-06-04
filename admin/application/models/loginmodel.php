<?php
class Loginmodel extends CI_Model{
	public function checklogin(){
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));	
		$cap=$this->input->post('cap');
		
		if($cap!=$_SESSION['capasd']){
		//exit($cap.'||||'.$_SESSION['capasd']);
			return '1';	
			
		}else{
			$re=$this->db->select('username')->where(array('username'=>$username,'password'=>$password))->limit(1)->get('adminuser');
			$data=$re->row_array();
			
			if($re->num_rows()>0){
				$user=$data['username'];
				if($user==$username){
					$_SESSION['adminuser']=$user;
					return '2';
				}else{
					return '3';	
				}
			}else{
				return '3';	
			}
		}
		exit();
	}	
}