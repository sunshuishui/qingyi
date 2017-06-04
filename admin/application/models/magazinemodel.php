<?php
class Magazinemodel extends CI_Model{
	public function mlist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('magazine');
		}else{
			$rs=$this->db->select('id')->get('magazine');
		}
		return $rs->result_array();
	}
	public function addsave($pic,$logo){
		if($pic){
			$data['pic']=$pic;
		}
		if($logo){
			$data['logo']=$logo;
		}
		$data['title']=$this->input->post('title');
		$data['description']=$this->input->post('description');
		$data['type']=$this->input->post('type');
		$data['time']=$this->input->post('time');
		return $this->db->insert('magazine',$data);
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('magazine');
		return $rs->row_array();
	}
	public function editsave($img_now,$logo,$oldpic){
		$id=$this->input->post('sid');
		$data['pic']=$img_now;
		$data['title']=$this->input->post('title');
		$data['description']=$this->input->post('description');
		$data['type']=$this->input->post('type');
		$data['time']=$this->input->post('time');
		if($logo){
			$data['logo']=$logo;	
			$imgurl=$this->singleinfo($id);
			$imglogo='../uploads/'.$imgurl['logo'];
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		$bool=$this->db->where(array('id'=>$id))->update('magazine',$data);
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
		$imglogo='../uploads/'.$imgarr['logo'];
		$imgurl=explode('$',$imgurl);
		if(is_array($imgurl)){
			foreach($imgurl as $item){
				if(is_file('../uploads/'.$item)){
					unlink('../uploads/'.$item);
				}
			}	
		}
		
		if(is_file($imglogo)){
			unlink($imglogo);	
		}
		return $this->db->delete('magazine',array('id'=>$id));
	}
}