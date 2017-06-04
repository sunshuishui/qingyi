<?php
class Jobmodel extends CI_Model{
	public function addsh(){
		$pdata['infor']=$this->input->post('infor');
		$pdata['type']=$this->input->post('type');
		$pdata['class']=$this->input->post('class');
		$this->db->insert('zhaopin',$pdata);
		return $this->db->insert_id();
	}
	public function shinfo($id){
		if($id){
			$res=$this->db->where(array('id'=>$id))->get('zhaopin');
		}else{
			$res=$this->db->where(array('class'=>'shzm','type !='=>'zmlc'))->order_by('id asc')->limit(1)->get('zhaopin');
		}	
		//var_dump($this->db->last_query());
		return $res->row_array();
	}
	public function shlist(){
		$res=$this->db->where(array('class'=>'shzm','type !='=>'zmlc'))->order_by('id asc')->select('id,type')->get('zhaopin');
		//var_dump($this->db->last_query());
		return $res->result_array();
	}
	public function shupdate(){
		$id=$this->input->post('shid');
		$pdata['type']=$this->input->post('type');
		$pdata['infor']=$this->input->post('infor');
		if($id){
			$res=$this->db->where(array('id'=>$id))->update('zhaopin',$pdata);
		}else{
			$res=$this->db->order_by('id asc')->limit(1,1)->update('zhaopin',$pdata);
		}	
		//var_dump($this->db->last_query());
		return $id;
	}
	public function shupdatelc(){
		$pdata['infor']=$this->input->post('infor');
		$res=$this->db->where(array('type'=>'ÕĞÄ¼Á÷³Ì','class'=>'shzm'))->update('zhaopin',$pdata);
		//var_dump($this->db->last_query());
		return $res;
	}
	public function deletesh($id){
		return $this->db->delete('zhaopin',array('id'=>$id));
	}
	public function shlcinfor(){
		$res=$this->db->where(array('type'=>'zmlc','class'=>'shzm'))->limit(1)->get('zhaopin');
		return $res->row_array();
	}
	public function xyinfor($type){
		if($type){
			$res=$this->db->where(array('type'=>$type,'class'=>'xyzm'))->get('zhaopin');
		}else{
			$res=$this->db->where(array('type'=>'xyzm','class'=>'xyzm'))->get('zhaopin');
		}	
		return $res->row_array();
	}
	public function xyupdate(){
		$type=$this->input->post('type');
		$pdata['infor']=$this->input->post('infor');
		$res=$this->db->where(array('type'=>$type,'class'=>'xyzm'))->update('zhaopin',$pdata);
			
		//var_dump($this->db->last_query());
		return $type;
	}
	public function jxjlist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('jiangxuejin');
		}else{
			$rs=$this->db->select('id')->get('jiangxuejin');
		}
		return $rs->result_array();
	}
	public function addsavejxj($pic){
		if($pic){
			$data['pic']=$pic;
		}
		$data['title']=$this->input->post('title');
		$data['infor']=$this->input->post('infor');
		$data['addtime']=time();
		$bool=$this->db->insert('jiangxuejin',$data);
		return $bool;
	}
	public function editsavejxj($img_now,$oldpic){
		$id=$this->input->post('id');
		$data['pic']=$img_now;
		$data['title']=$this->input->post('title');
		$data['infor']=$this->input->post('infor');
		$bool=$this->db->where(array('id'=>$id))->update('jiangxuejin',$data);
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
	public function editjxj($id){
		$res=$this->db->where(array('id'=>$id))->get('jiangxuejin');
		return 	$res->row_array();
	}
	public function jxjdelete($id){
		$imgarr=$this->editjxj($id);
		$imgurl=$imgarr['pic'];
		$imgurl=explode('$',$imgurl);
		if(is_array($imgurl)){
			foreach($imgurl as $item){
				if(is_file('../uploads/'.$item)){
					unlink('../uploads/'.$item);
				}
			}	
		}
		return $this->db->delete('jiangxuejin',array('id'=>$id));
		
	}
}