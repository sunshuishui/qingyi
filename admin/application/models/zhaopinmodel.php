<?php
class Zhaopinmodel extends CI_Model{
	public function alist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('zhaopin');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('zhaopin');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('zhaopin');
			}else{
				$rs=$this->db->select('id')->get('zhaopin');
			}
		}
		return $rs->result_array();
	}
	public function addsave(){
		
		$data['title']=$this->input->post('title');
		
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('zhaopin',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('zhaopin');
		return $rs->row_array();
	}
	public function delete($id){
		return $this->db->delete('zhaopin',array('id'=>$id));
	}
	public function editsave(){
		$id=$this->input->post('id');
	
		$data['title']=$this->input->post('title');
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('zhaopin',$data);
		
		return $bool;
	}
}