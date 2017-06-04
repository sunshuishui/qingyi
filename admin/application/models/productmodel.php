<?php
class Productmodel extends CI_Model{
	public function plist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('product');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('product');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('product');
			}else{
				$rs=$this->db->select('id')->get('product');
			}
		}
		return $rs->result_array();
	}
	public function addsave($logo){
		if($logo){
			$data['logo']=$logo;
		}
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['smallcontent']=$this->input->post('smallcontent');
		if(is_array($this->input->post('downlist'))){
			$data['downlist']=implode(',',$this->input->post('downlist'));
		}
		$data['canshu']=$this->input->post('canshu');
		$data['gongneng']=$this->input->post('gongneng');
		$data['youshi']=$this->input->post('youshi');
		$bool=$this->db->insert('product',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('product');
		return $rs->row_array();
	}
	public function downlist(){
		$rs=$this->db->order_by('id desc')->get('downloadfiles');
		return $rs->result_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imgurl=$imgarr['logo'];
		
		if(is_file('../uploads/'.$imgurl)){
			unlink('../uploads/'.$imgurl);
		}
		return $this->db->delete('product',array('id'=>$id));
	}
	public function editsave($logo){
		$id=$this->input->post('id');
		if($logo){
			$data['logo']=$logo;	
			$imgurl=$this->singleinfo($id);
			$imgpath=$imgurl['logo'];
			if(is_file('../uploads/'.$imgpath)){
				unlink('../uploads/'.$imgpath);
			}
		}
		$data['title']=$this->input->post('title');
		if(is_array($this->input->post('downlist'))){
			$data['downlist']=implode(',',$this->input->post('downlist'));
		}
		
		$data['type']=$this->input->post('type');
		$data['smallcontent']=$this->input->post('smallcontent');
		$data['canshu']=$this->input->post('canshu');
		$data['gongneng']=$this->input->post('gongneng');
		$data['youshi']=$this->input->post('youshi');
		$bool=$this->db->where(array('id'=>$id))->update('product',$data);
		
		return $bool;
	}
}