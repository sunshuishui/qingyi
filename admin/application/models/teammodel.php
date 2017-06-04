<?php
class Teammodel extends CI_Model{
	public function tlist(){
		$res=$this->db->order_by('id desc')->get('team');	
		return $res->result_array();
	}
	public function addsave(){
		$data['name']=$this->input->post('name');
		if(is_array($this->input->post('owner'))){
		$owner=implode(',',$this->input->post('owner'));
		$data['owner']=$owner;
		}
		$data['infor']=$this->input->post('infor');
		return $this->db->insert('team',$data);
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('team');
		return $rs->row_array();
	}
	public function editsave(){
		$id=$this->input->post('id');
		$data['name']=$this->input->post('name');
		if(is_array($this->input->post('owner'))){
		$owner=implode(',',$this->input->post('owner'));
		$data['owner']=$owner;
		}
		$data['infor']=$this->input->post('infor');
		return $this->db->where(array('id'=>$id))->update('team',$data);
	}
}