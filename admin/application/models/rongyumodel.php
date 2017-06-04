<?php
class Rongyumodel extends CI_Model{
	public function qlist(){
		$res=$this->db->where('type',1)->order_by('id desc')->get('rongyu');	
		return $res->result_array();
	}
	public function jlist(){
		$res=$this->db->where('type',2)->order_by('id desc')->get('rongyu');	
		return $res->result_array();
	}
	public function singinfor($id){
		$res=$this->db->where(array('id'=>$id))->order_by('id desc')->get('rongyu');	
		return $res->row_array();
	}
	public function qaddsave($pimg){
		$data['pname']=$this->input->post('pname');
		$data['time']=$this->input->post('time');
		if($pimg){
			$data['pic']=$pimg;	
		}
		return $this->db->insert('rongyu',$data);
	}
	public function jaddsave($pimg){
		$data['pname']=$this->input->post('pname');
		$data['jiangxiang']=$this->input->post('jiangxiang');
		$data['unit']=$this->input->post('unit');
		$data['time']=$this->input->post('time');
		$data['type']=2;
		if($pimg){
			$data['pic']=$pimg;	
		}
		return $this->db->insert('rongyu',$data);
	}
	public function editsave($pimg){
		$data['pname']=$this->input->post('pname');
		$data['time']=$this->input->post('time');
		$id=$this->input->post('pid');
		if($pimg){
			$data['pic']=$pimg;	
			$imgurl=$this->singinfor($id);
			$imgpath='../uploads/'.$imgurl['pic'];
			if(is_file($imgpath)){
				unlink($imgpath);
			}
		}
		return $this->db->where(array('id'=>$id))->update('rongyu',$data);
	}
	public function jeditsave($pimg){
		$data['pname']=$this->input->post('pname');
		$data['time']=$this->input->post('time');
		$data['jiangxiang']=$this->input->post('jiangxiang');
		$data['unit']=$this->input->post('unit');
		$id=$this->input->post('pid');
		if($pimg){
			$data['pic']=$pimg;	
			$imgurl=$this->singinfor($id);
			$imgpath='../uploads/'.$imgurl['pic'];
			if(is_file($imgpath)){
				unlink($imgpath);
			}
		}
		return $this->db->where(array('id'=>$id))->update('rongyu',$data);
	}
	public function delete($id){
		$imgurl=$this->singinfor($id);
		$imgpath='../uploads/'.$imgurl['pic'];
		if(is_file($imgpath)){
			unlink($imgpath);
		}
		return $this->db->delete('rongyu',array('id'=>$id));	
	}
}