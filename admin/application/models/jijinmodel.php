<?php
class Jijinmodel extends CI_Model{
	public function infor(){
		$res=$this->db->order_by('id asc')->limit(1)->get('jijin');	
		return $res->row_array();
	}
	public function editsave(){
		$id=$this->input->post('cid');
		$data['infor']=$this->input->post('infor');
		$res=$this->db->where(array('id'=>$id))->update('jijin',$data);	
		return $res;
	}
}