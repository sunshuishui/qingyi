<?php
class Worksmodel extends CI_Model{
	public function wlist($tiaoguo,$pagesize){
		if($pagesize){
		$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('works');
		}else{
			$rs=$this->db->select('id')->get('works');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;
		}
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['area']=$this->input->post('area');
		$data['site']=$this->input->post('site');
		$data['unit']=$this->input->post('unit');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('works',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('works');
		return $rs->row_array();
	}
	public function editsave($img_now,$oldpic){
		$id=$this->input->post('sid');
		$data['pic']=$img_now;
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['area']=$this->input->post('area');
		$data['site']=$this->input->post('site');
		$data['unit']=$this->input->post('unit');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('works',$data);
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
		return $this->db->delete('works',array('id'=>$id));
	}
}
