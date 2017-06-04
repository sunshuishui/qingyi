<?php
class Shopmodel extends CI_Model{
	public function slist(){
		$res=$this->db->order_by('id desc')->get('shop');	
		return $res->result_array();
	}
	public function addsave($logo,$infor){
		if($logo){
			$data['logo']=$logo;
		}
		if($infor){
			$data['infor']=$infor;
		}
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		return $this->db->insert('shop',$data);
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('shop');
		return $rs->row_array();
	}
	public function editsave($logo,$infor){
		$id=$this->input->post('sid');
		$imgurl=$this->singleinfo($id);
		if($logo){
			$data['logo']=$logo;
			$imglogo='../uploads/'.$imgurl['logo'];
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		if($infor){
			$data['infor']=$infor;
			$imginfor='../uploads/'.$imgurl['infor'];
			if(is_file($imginfor)){
				unlink($imginfor);	
			}
		}
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		return $this->db->where(array('id'=>$id))->update('shop',$data);
	}
	public function delete($id){
		
		$imgurl=$this->singleinfo($id);
		$imglogo='../uploads/'.$imgurl['logo'];
		if(is_file($imglogo)){
			unlink($imglogo);	
		}
		
		$imginfor='../uploads/'.$imgurl['infor'];
		if(is_file($imginfor)){
			unlink($imginfor);	
		}
		return $this->db->delete('shop',array('id'=>$id));
	}
}