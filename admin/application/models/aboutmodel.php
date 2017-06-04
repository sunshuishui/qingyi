<?php
class Aboutmodel extends CI_Model{
	public function editlistinfor($type){
		$res=$this->db->where(array('id'=>$type))->limit(1)->get('customer');	
		return $res->row_array();
	}
	public function editsaveinfor(){
		$val=$this->input->post('val');
		$data['infor']=$this->input->post('infor');
		$bool=$this->db->where(array('id'=>$val))->update('customer',$data);
		return $bool;
	}
}