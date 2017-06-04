<?php
class Downloadmodel extends CI_Model{
	public function downloadlist($tiaoguo,$pagesize){
		if(empty($pagesize)){
			$res=$this->db->select('id')->order_by('id desc')->get('downloadfiles');
		}else{
			$res=$this->db->limit($pagesize,$tiaoguo)->order_by('id desc')->get('downloadfiles');
		}
		//echo $this->db->last_query();
		return $res->result_array();
	}
	public function addsave($pimg){
		$pdata['title']=$this->input->post('title');
		$pdata['addtime']=time();
		if($pimg){
			$pdata['files']=$pimg;
		}
		$bool=$this->db->insert('downloadfiles',$pdata);
		return $bool;
	}
	public function edit($id){
		$res=$this->db->where(array('id'=>$id))->get('downloadfiles');
		return $res->result_array();
	}
	public function editsave($pimg){
		$pdata['title']=$this->input->post('title');
		$id=$this->input->post('id');
		if(!empty($pimg)){
			$pdata['files']=$pimg;	
			$imgurl=$this->edit($id);
			$img1path='../downloads/'.$imgurl[0]['files'];
			if(is_file($img1path)){
				unlink($img1path);
			}
		}
		$bool=$this->db->where(array('id'=>$id))->update('downloadfiles',$pdata);
		return $bool;
	}
	public function delete($id){
		$imgurl=$this->edit($id);
		$img1path='../downloads/'.$imgurl[0]['files'];
		if(is_file($img1path)){
			unlink($img1path);
		}
		$res=$this->db->delete('downloadfiles',array('id'=>$id));
		return $res;
	}
}