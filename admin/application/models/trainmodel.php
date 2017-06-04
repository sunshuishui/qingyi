<?php
class Trainmodel extends CI_Model{
	public function tlist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('train');
		}else{
			$rs=$this->db->select('id')->get('train');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;
		}
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('train',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('train');
		return $rs->row_array();
	}
	public function editsave($img_now,$oldpic){
		$id=$this->input->post('sid');
		$data['pic']=$img_now;
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('train',$data);
		if($bool){
			if(is_array($oldpic)){
				foreach($oldpic as $item){
					if(is_file('../uploads/'.$item)){
						unlink('../uploads/'.$item);
					}
				}
			}
		}
		return $bool;
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imgurl=$imgarr['pic'];
		$imgurl=explode('$',$imgurl);
		if(is_array($imgurl)){
			foreach($imgurl as $item){
				if(is_file('../uploads/'.$item)){
					unlink('../uploads/'.$item);
				}
			}	
		}
		return $this->db->delete('train',array('id'=>$id));
	}
}