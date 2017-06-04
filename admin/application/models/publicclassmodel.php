<?php
class Publicclassmodel extends CI_Model{
	public function intro(){
		$res=$this->db->select('public_class')->get('project');
		return $res->row_array();
	}	
	public function ieditsave(){
		$data['public_class']=$this->input->post('public_classinfor');
		return $this->db->update('project',$data);
	}
	public function plist(){
		$res=$this->db->order_by('id desc')->get('publicclass');
		return $res->result_array();
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('publicclass');
		return $rs->row_array();
	}
	public function addsave($logo){
		if($logo){
			$data['logo']=$logo;
		}
		$data['title']=$this->input->post('title');
		$data['name']=$this->input->post('name');
		$data['infor']=$this->input->post('content');
		$bool=$this->db->insert('publicclass',$data);
		return $bool;
	}
	public function editsave($logo){
		$id=$this->input->post('sid');
		if($logo){
			$data['logo']=$logo;
			$imgurl=$this->singleinfo($id);
		    if(is_file('../uploads/'.$imgurl['logo'])){
			    unlink('../uploads/'.$imgurl['logo']);
		    }
		}
		$data['title']=$this->input->post('title');
		$data['name']=$this->input->post('name');
		$data['infor']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('publicclass',$data);
		return $bool;
	}
	public function delete($id){
		$imgurl=$this->singleinfo($id);
		if(is_file('../uploads/'.$imgurl['logo'])){
			unlink('../uploads/'.$imgurl['logo']);
		}
		return $this->db->delete('publicclass',array('id'=>$id));
	}
}
