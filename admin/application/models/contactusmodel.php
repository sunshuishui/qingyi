<?php
class Contactusmodel extends CI_Model{
	public function clist(){
		$res=$this->db->select('id,sitename')->order_by('id asc')->get('contactus');	
		return $res->result_array();
	}
	public function add(){
		$pdata['sitename']=$this->input->post('sitename');
		$this->db->insert('contactus',$pdata);
		$id=$this->db->insert_id();
		return $id;
	}
	public function delete($id){
		return $this->db->delete('contactus',array('id'=>$id));
	}
	public function edit($id){
		if($id){
			$res=$this->db->where(array('id'=>$id))->get('contactus');
		}else{
			$res=$this->db->order_by('id asc')->limit(1)->get('contactus');
		}	
		return $res->row_array();
	}
	public function cupdate(){
		$id=$this->input->post('cid');
		$pdata['sitename']=$this->input->post('sitename');
		$pdata['contact_infor']=$this->input->post('contact_infor');
		$pdata['contact_map']=$this->input->post('contact_map');
		$pdata['contact_traffic']=$this->input->post('contact_traffic');
		if($id){
			$res=$this->db->where(array('id'=>$id))->update('contactus',$pdata);
		}else{
			$res=$this->db->order_by('id asc')->limit(1)->update('contactus',$pdata);
		}	
		//var_dump($this->db->last_query());
		return $id;
	}
}