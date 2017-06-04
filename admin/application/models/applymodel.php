<?php
class Applymodel extends CI_Model{
	public function alist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('apply');
		}else{
			$rs=$this->db->select('id')->get('apply');
		}
		return $rs->result_array();
	}
	public function delete($id){
		return $this->db->delete('apply',array('id'=>$id));
	}
}