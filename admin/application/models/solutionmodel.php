<?php
class Solutionmodel extends CI_Model{
	public function alist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('solution');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('solution');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('solution');
			}else{
				$rs=$this->db->select('id')->get('solution');
			}
		}
		return $rs->result_array();
	}
	public function addsave($logo){
		if($logo){
			$data['logo']=$logo;
		}
		$data['title']=$this->input->post('title');
		
		$data['type']=$this->input->post('type');
		
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('solution',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('solution');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imgurl=$imgarr['logo'];
		
		if(is_file('../uploads/'.$imgurl)){
			unlink('../uploads/'.$imgurl);
		}
		return $this->db->delete('solution',array('id'=>$id));
	}
	public function editsave($logo){
		$id=$this->input->post('id');
		if($logo){
			$data['logo']=$logo;	
			$imgurl=$this->singleinfo($id);
			$imgpath=$imgurl['logo'];
			if(is_file('../uploads/'.$imgpath)){
				unlink('../uploads/'.$imgpath);
			}
		}
		$data['title']=$this->input->post('title');
		
		$data['type']=$this->input->post('type');
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('solution',$data);
		
		return $bool;
	}
}