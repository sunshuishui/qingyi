<?php
class Wenhuamodel extends CI_Model{
	public function wlist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('active');
		}else{
			$rs=$this->db->select('id')->get('active');
		}
		return $rs->result_array();	
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;
		}
		$data['title']=$this->input->post('title');
		$data['time']=$this->input->post('time');
		$data['video']=$this->input->post('video');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('active',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('active');	
		return $rs->row_array();
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
		return $this->db->delete('active',array('id'=>$id));
	}
	public function editsave($img_now,$oldpic){
		$id=$this->input->post('id');
		$data['pic']=$img_now;
		$data['title']=$this->input->post('title');
		$data['time']=$this->input->post('time');
		$data['video']=$this->input->post('video');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('active',$data);
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
}