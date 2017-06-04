<?php
class Articlemodel extends CI_Model{
	public function alist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('article');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('article');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('article');
			}else{
				$rs=$this->db->select('id')->get('article');
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
		$data['author']=$this->input->post('author');
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('article',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('article');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imgurl=$imgarr['logo'];
		
		if(is_file('../uploads/'.$imgurl)){
			unlink('../uploads/'.$imgurl);
		}
		return $this->db->delete('article',array('id'=>$id));
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
		$data['author']=$this->input->post('author');
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('article',$data);
		
		return $bool;
	}
}