<?php
class Ourprojectmodel extends CI_Model{
	public function olist($tiaoguo,$pagesize){
		if($pagesize){
		$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('ourproject');
		}else{
			$rs=$this->db->select('id')->get('ourproject');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;
		}
		$data['title']=$this->input->post('title');
		$data['jarea']=$this->input->post('jarea');
		$data['zarea']=$this->input->post('zarea');
		$data['countcustomer']=$this->input->post('countcustomer');
		$data['layer']=$this->input->post('layer');
		$data['parking']=$this->input->post('parking');
		$data['opentime']=$this->input->post('opentime');
		$data['content']=$this->input->post('content');
		return $this->db->insert('ourproject',$data);
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('ourproject');
		return $rs->row_array();
	}
	public function editsave($pic){
		$id=$this->input->post('sid');
		$imgurl=$this->singleinfo($id);
		if($pic){
			$data['pic']=$pic;
			$imglogo='../uploads/'.$imgurl['pic'];
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		$data['title']=$this->input->post('title');
		$data['jarea']=$this->input->post('jarea');
		$data['zarea']=$this->input->post('zarea');
		$data['countcustomer']=$this->input->post('countcustomer');
		$data['layer']=$this->input->post('layer');
		$data['parking']=$this->input->post('parking');
		$data['opentime']=$this->input->post('opentime');
		$data['content']=$this->input->post('content');
		return $this->db->where(array('id'=>$id))->update('ourproject',$data);
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imgurl='../uploads/'.$imgarr['pic'];
		if(is_file($imgurl)){
			unlink($imgurl);
		}
		return $this->db->delete('ourproject',array('id'=>$id));
	}
}