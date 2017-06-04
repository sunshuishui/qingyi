<?php
class Environmentmodel extends CI_Model{
	public function elist(){
		$res=$this->db->limit(1)->get('environment');
		return $res->row_array();
	}
	public function editsave($img_now,$oldpic){
		$data['pic']=$img_now;
		$bool=$this->db->update('environment',$data);
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