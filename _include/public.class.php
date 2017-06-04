<?php
/*20130722ˮˮ    �ж�pc���ƶ��ͻ��˷��ʣ�����Ipad(IpadĬ��Ϊpc��)��ע���˺�����һ����ȷ������*/
function isMobile() { 
	// �����HTTP_X_WAP_PROFILE��һ�����ƶ��豸 
	if(isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {  return true; } 
	//���via��Ϣ����wap��һ�����ƶ��豸,���ַ����̻����θ���Ϣ 
	if(isset ($_SERVER['HTTP_VIA'])) {  
	//�Ҳ���Ϊflase,����Ϊtrue  
		return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false; 
	} 
	//�����ֻ�HTTP_USER_AGENT�������Ĺؼ��ʣ��ֻ����͵Ŀͻ��˱�־����ƥ�䣬��������Ƚ϶�,�������д���� 
	if(isset ($_SERVER['HTTP_USER_AGENT'])) {  
		$clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','motorola','huawei','phone','CoolPad');  
	// ��HTTP_USER_AGENT�в����ֻ�������Ĺؼ��� 
	
		$clientkeywords_ipad = array ('ipad');
		
		/*�ж��Ƿ���Ipad���ʣ�Ӧ����ȷ----------ˮˮ*/
		if(preg_match("/(" . implode('|', $clientkeywords_ipad) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {return false;}
		
		if(preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {return true;}
	} 
	//Э�鷨����Ϊ�п��ܲ�׼ȷ���ŵ�����ж� 
	if(isset ($_SERVER['HTTP_ACCEPT'])) {  
	// ���ֻ֧��wml���Ҳ�֧��html��һ�����ƶ��豸 
	 // ���֧��wml��html����wml��html֮ǰ�����ƶ��豸  
		if((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {return true;} 
	} 
	return false;
}



//��������:��ip��ַ���������ʽ�����ݿ� �����ѯ
function myip2long($ip){ 
   $ip_arr = split('\.',$ip); 
   $iplong = (16777216 * intval($ip_arr[0])) + (65536 * intval($ip_arr[1])) + (256 * intval($ip_arr[2])) + intval($ip_arr[3]); 
   return $iplong; 
}

//��������:����ǰһ���ͺ�һ�������������м��ַ�
//$str:Ҫ�������ַ���
function hideMidden($str){
	$tmpstr='';
	if($str){
		if (ord(substr($str, 0, 1)) > 0xa0) {
			$tmpstr=substr($str,0,2);
		}else{
			$tmpstr=substr($str,0,1);
		}
	
		$tmpstr=$tmpstr.'***';	
		if (ord(substr($str, -1)) > 0xa0) {
			$tmpstr=$tmpstr.substr($str,-2);
		}else{
			$tmpstr=$tmpstr.substr($str,-1);
		}	
	}
	return $tmpstr;	
}

//��������:����Ӣ�Ķ���һ���ַ�
//$str:�ַ���

function strlen2($str){ 
	$tmpstr=0;
	$len= strlen($str);
	for ($i= 0; $i < $len; $i ++) {
		if (ord(substr($str, $i, 1)) > 0xa0) {
			$i++;
			$tmpstr++;
		} else {
			$tmpstr++;
		}
	}
	return $tmpstr;
}

//  ��������: �����Զ�����ͷ�
function serviceIDTgNext($db,$cityId,$tgcityId,$Pclass){
	//����ͷ�
	$serviceID=0;

	if($Pclass){
		$sql="select serviceID from site_tuangou where cityID='".$cityId."' and Pclass='".$Pclass."' order by id desc limit 1";
	}else{
		$sql="select serviceID from site_tuangou where cityID='".$cityId."' and Pclass is null order by id desc limit 1";
	}
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if($totalAnnounce){
		$row = $db->fetch_array($rs);
		$serviceID=$row[serviceID];
	}	
	if(!$serviceID){
		$serviceID=0;
	}
	
	
	$sql="select id from member_service where cityId='".$tgcityId."' and cType<>'1' order by id asc";
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if($totalAnnounce){
		$i=0;
		while($row = $db->fetch_array($rs)){
			$arr_service[$i]=$row[id];
			$i++;
		}
		
		if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
			foreach($arr_service as $key => $value){
				if($value==$serviceID){
					if($key==($i-1)){
						$serviceIDNext=$arr_service[0];
					}else{
						$serviceIDNext=$arr_service[$key+1];
					}
				}
			}
		}else{				//����Ǹ��Ͽͷ�ϵͳ��֮ǰû�ж�������ͷ����ͷ���ͷ����һ���ͷ����ö���
			$serviceIDNext=$arr_service[0];
		}										
	}
	
	if(!$serviceIDNext){
		$serviceIDNext=0;
	}	
	return $serviceIDNext;
}


//�������ܣ�ÿʮ�����Զ�����
//$act�Ǳ�ѡ����
//$act��add��ʱ�����������Ƽ�����cancel��ʱ������ȡ���Ƽ�����auto��ʱ������ǰ̨ÿʮ�����Զ�����
//$id�Ǳ���id
function Auto_Sort($db,$act,$id,$type,$companyID,$cityId){
	if($act=="add"){		//������Ƽ�һ������
		$sql_="select b.auto_sort,b.id from customer_baseinfo a inner join customer_price b on a.cType=$type and a.cityId=b.cityId and a.cType=b.cType and a.companyID=b.companyID  and a.cityId=$cityId and a.isSpecialDisplay<>0 and b.auto_sort<>0 and a.ExpireTime>='".date('Y-m-d')."' ";
		$rs_=$db->query($sql_);
		$tol_=$db->num_rows($rs_);
		if($tol_){
			while($row=$db->fetch_array($rs_)){
			$db->query('update customer_price set auto_sort=auto_sort+1 where id='.$row[id]);
			}
		}
		$db->query('update customer_price set auto_sort=1 where id='.$id);
		$db->query('update websiteinfor set updateHotelRankTime="'.date("Y-m-d H:i:s").'" limit 1');
	}elseif($act=='cancel'){		//�����ȡ������
		$sql='select auto_sort from customer_price where id='.$id;
		$rs=$db->query($sql);
		$row=$db->fetch_array($rs);
		$sort=$row[auto_sort];
		if($sort>0){

			$sql_="select b.ExpireTime,b.auto_sort,b.id from customer_baseinfo a inner join customer_price b on a.cType=$type and a.companyID=b.companyID and a.cityId=b.cityId and a.cType=b.cType and a.cityId=$cityId and a.isSpecialDisplay<>0 and b.auto_sort<>0 and a.ExpireTime>='".date('Y-m-d')."' ";
			$rs_=$db->query($sql_);
			$tol_=$db->num_rows($rs_);
			if($tol_){
				while($row=$db->fetch_array($rs_)){
					if($row[auto_sort]>$sort){
						$db->query('update customer_price set auto_sort=auto_sort-1 where id='.$row[id]);
					}

				}
				$db->query('update customer_price set auto_sort=0 where id='.$id);
			}
		}
		
	}elseif($act=='auto'){			//ʮ���Ӹ���һ�α�������
		$sql="select updateHotelRankTime from websiteinfor limit 1";
		$rs=$db->query($sql);
		$tol=$db->num_rows($rs);
		if($tol){
			$row=$db->fetch_array($rs);
			$updateHotelRankTime=$row[updateHotelRankTime];
			if(time()-strtotime($updateHotelRankTime)>5*60){		//�����ǰʱ�����������ʱ��ʮ����
			//echo time();
				$sql="select a.cType,b.auto_sort,b.id from customer_baseinfo a inner join customer_price b on a.cType=$type and a.companyID=b.companyID and a.cityId=b.cityId and a.cType=b.cType and a.cityId=$cityId and a.isSpecialDisplay<>0 and b.auto_sort<>0 and b.ExpireTime>='".date('Y-m-d')."' and b.isCommend=1 and a.ExpireTime>='".date('Y-m-d')."' order by b.auto_sort asc";
				//echo $sql;
				$rs=$db->query($sql);
				$tol=$db->num_rows($rs);
				$i=1;
				while($row=$db->fetch_array($rs)){
					if($i==$tol){
						$db->query('update customer_price set auto_sort=1 where id='.$row[id]);
					}elseif($i<$tol){
						$db->query('update customer_price set auto_sort='.($i+1).' where id='.$row[id]);
					}
					$i++;
				}
				$db->query('update websiteinfor set updateHotelRankTime="'.date("Y-m-d H:i:s").'" limit 1');
			}
		}

	}
}



//  ��������: �������鿨�Զ�����ͷ�
function serviceIDNext($db,$cityId,$mobile){
	//����ͷ�
	$serviceID=0;
	if($mobile){
		$sql="select serviceID from customer_orderrecord where MobilePhone='$mobile' and CompanyType<>'1' order by ID desc limit 1";
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		if($totalAnnounce){
			$row = $db->fetch_array($rs);
			$serviceID=$row[serviceID];
			return $serviceID;
		}
	}
	
	if(!$serviceID){
		$sql="select serviceID from member_infor where cityId='".$cityId."' order by id desc limit 1";
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		if($totalAnnounce){
			$row = $db->fetch_array($rs);
			$serviceID=$row[serviceID];
		}	
	}							
	
	if(!$serviceID){
		$serviceID=0;
	}
	
	$isSearch=false;
	$sql="select id from member_service where cityId='".$cityId."' and cType='0' order by id asc";
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if($totalAnnounce){
		$i=0;
		while($row = $db->fetch_array($rs)){
			$arr_service[$i]=$row[id];
			$i++;
		}
		
		if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
			foreach($arr_service as $key => $value){
				if($value==$serviceID){
					if($key==($i-1)){
						$serviceIDNext=$arr_service[0];
					}else{
						$serviceIDNext=$arr_service[$key+1];
					}
					$isSearch=true;
				}
			}
		}
		
		if(!$isSearch){
			$serviceIDNext=$arr_service[0];
		}											
	}
	
	if(!$serviceIDNext){
		$serviceIDNext=0;
	}	
	return $serviceIDNext;
}



//  ��������: ֩��ģ��
function get_naps_bot() { 
	$useragent = strtolower($_SERVER['HTTP_USER_AGENT']); 
	if (strpos($useragent, 'googlebot') !== false){ 
	return 'Googlebot'; 
	} 
	
	if (strpos($useragent, 'msnbot') !== false){ 
	return 'MSNbot'; 
	} 
	
	if (strpos($useragent, 'slurp') !== false){ 
	return 'Yahoobot'; 
	} 
	
	if (strpos($useragent, 'baiduspider') !== false){ 
	return 'Baiduspider'; 
	} 
	
	if (strpos($useragent, 'sohu-search') !== false){ 
	return 'Sohubot'; 
	} 
	
	if (strpos($useragent, 'lycos') !== false){ 
	return 'Lycos'; 
	} 
	
	if (strpos($useragent, 'robozilla') !== false){ 
	return 'Robozilla'; 
	} 
	return false; 
} 


//�������ܣ�����IP����ֵ
function ip2int($ip){ 
   list($ip1,$ip2,$ip3,$ip4)=explode(".",$ip); 
   return $ip1*pow(256,3)+$ip2*pow(256,2)+$ip3*256+$ip4; 
}

//��������:�ַ���������
//$str:Ҫ��ȡ���ַ���
//$start:�����￪ʼ��ȡ
//$len:��ȡ����

function substring($str, $start, $length){ //�ȽϺ����ַ�����ȡ����
	$len = $length;
	if($length < 0){
		$str = strrev($str);
		$len = -$length;
	}
	$len= ($len < strlen($str)) ? $len : strlen($str);
	for ($i= $start; $i < $len; $i ++) {
		if (ord(substr($str, $i, 1)) > 0xa0) {
			$tmpstr .= substr($str, $i, 2);
			$i++;
		} else {
			$tmpstr .= substr($str, $i, 1);
		}
	}
	if($length < 0) $tmpstr = strrev($tmpstr);
	return $tmpstr;
}


//��������:�ַ���������(�������ȼ�...)
//$str:Ҫ��ȡ���ַ���
//$start:�����￪ʼ��ȡ
//$len:��ȡ����

function substring2($str, $start, $length){ //�ȽϺ����ַ�����ȡ����
	$len = $length;
	if($length < 0){
		$str = strrev($str);
		$len = -$length;
	}
	$falg=false;
	if($len > strlen($str)){
		$len=strlen($str);		
	}else{
		$falg=true;
	}
	for ($i= $start; $i < $len; $i ++) {
		if (ord(substr($str, $i, 1)) > 0xa0) {
			$tmpstr .= substr($str, $i, 2);
			$i++;
		} else {
			$tmpstr .= substr($str, $i, 1);
		}
	}
	if($length < 0) $tmpstr = strrev($tmpstr);
	if($falg){
		return $tmpstr.'����';
	}else{
		return $tmpstr;
	}	
}


//��������: ��ʾ��ҳ
//$urlGet	��ǰURL�����page����ı���
//$page ��ǰҳ
//$totalAnnounce �ܼ�¼��
//$maxAnnounce ÿҳ��ʾ��¼��
//$k ��ǰҳ����ʾ�˶�������¼

function showPage($urlGet,$page,$totalAnnounce,$maxAnnounce,$k){

	
	echo "��".$page."/".ceil($totalAnnounce/$maxAnnounce)."ҳ ��".$totalAnnounce."����¼ ��ҳ��ʾ��".(($page-1)*$maxAnnounce+1)."-".(($page-1)*$maxAnnounce+$k)."��";
	if($page>1){
		echo "<a href='?page=1".$urlGet."' title='��ҳ'>��ҳ</a>";
		echo " <a href='?page=".($page-1).$urlGet."' title='��һҳ'>��һҳ</a> ";
	}
	if($page<ceil($totalAnnounce/$maxAnnounce)){
		echo "<a href='?page=".($page+1).$urlGet."' title='��һҳ'>��һҳ</a>";
		echo " <a href='?page=".ceil($totalAnnounce/$maxAnnounce).$urlGet."' title='βҳ'>βҳ</a> ";
	}
}



//  ��������: �����ݿ��е�������ӵ��б�(����)��
//  ��������: 
//			  $db - ���ݲ�������	
//            strTable - ���ݱ������
//            strField - ���ݱ��е��ֶ���(��ʾ����)
//			  strValue - ���ݱ��е��ֶ���(ֵ)
//			  strRank - ���ֶ�����
//  �� �� ֵ: ��

function addSelectItem($db,$strTable,$strField,$strValue,$strRank=""){
	$sql="select ".$strValue.",".$strField." from ".$strTable."";
	if($strRank!=""){
		$sql=$sql." order by ".$strRank." asc";
	}
	//echo $sql;
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);	
	if($totalAnnounce!=0){
		while($row = $db->fetch_array($rs)){
			echo "<option value=".$row[$strValue].">".$row[$strField]."</option>";
		}	
	}	
}




//* ��������: �����ر������������Id
//* ��������: str - Ҫ������ַ���
//* �� �� ֵ: �����������ַ���

function getMaxId($db,$strTable,$strField){
	$sql="select (max(".$strField.")+1) as MaxId from ".$strTable."";
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);	
	if($totalAnnounce!=0){
		$row = $db->fetch_array($rs);
		return $row[MaxId];
	}else{
		return 1;
	}
}




//��������: ����������֮�����������
//$day1 ��ʼ����
//$day2 ��β����

function diff($day1,$day2) 
{ 

		$a=explode("-",$day1); 
		$b=explode("-",$day2); 
		if(checkdate($a[1],$a[2],$a[0]) && checkdate($b[1],$b[2],$b[0])){
		$c=mktime(0,0,0,$a[1],$a[2],$a[0]); 
		$d=mktime(0,0,0,$b[1],$b[2],$b[0]); 
		$diff_value =($d-$c)/3600/24; 
		return $diff_value; 
	} 
	else{ 
		return 0; 
	} 
} 


//��������: ����������֮�����������
//$day1 ��ʼ����
//$day2 ��β����
function getMonthNum( $date1, $date2, $tags='-' ){  
	$date1 = explode($tags,$date1);
	$date2 = explode($tags,$date2); 
	return abs($date1[0] - $date2[0]) * 12 + abs($date1[1] - $date2[1]); 
}


   function construct_num_Page($current_page,$pageNums,$sub_pages){  
    if($pageNums < $sub_pages){  
    $current_array=array();  
     for($i=0;$i<$pageNums;$i++){   
     $current_array[$i]=$i+1;  
     }  
    }else{  
    $current_array=initArray($sub_pages);  
     if($current_page <= 3){  
      for($i=0;$i<count($current_array);$i++){  
      $current_array[$i]=$i+1;  
      }  
     }elseif ($current_page <= $pageNums && $current_page > $pageNums - $sub_pages + 1 ){  
      for($i=0;$i<count($current_array);$i++){  
      $current_array[$i]=($pageNums)-($sub_pages)+1+$i;  
      }  
     }else{  
      for($i=0;$i<count($current_array);$i++){  
      $current_array[$i]=$current_page-2+$i;  
      }  
     }  
    }  
     
    return $current_array;  
   } 
    function initArray($sub_pages){  
    for($i=0;$i<$sub_pages;$i++){  
    	$page_array[$i]=$i;  
    }  
    return $page_array;  
   }
//�������ܣ�		�ϴ�ͼƬ
//$sourceFile		�ϴ��ؼ�����
//$uptypes 			�����ϴ�ͼƬ������
//$max_file_size	ͼƬ��С
//$path_im 			�ϴ�Ŀ¼
//$smallmark 		�Ƿ���������ͼ
//$dst_sw 			����ͼ��
//$dst_sh 			����ͼ��
//$Isedit			�Ƿ��Ǳ༭ͼƬ
//$editFile			���༭��ͼƬ
//$targetFile		�Զ����ļ���

function uploadImg($sourceFile,$uptypes,$max_file_size,$path_im,$smallmark,$dst_sw,$dst_sh,$Isedit,$editFile,$targetFile){
	if(!file_exists($path_im)){				//����ϴ�Ŀ¼�Ƿ���ڣ������ڴ���
		mkdir($path_im);
	}
	$file = $sourceFile;	
	$errFlag="";							//������			
	
	if(!is_uploaded_file($file[tmp_name])){
		$errFlag=1;							//û��ѡ���ϴ����ļ�
	}elseif($max_file_size < $file["size"]){
		$errFlag=2;							//ͼƬ̫����
	}elseif(!in_array($file["type"],$uptypes)){
		$errFlag=3;							//ͼƬ���Ͳ���ȷ
	}							
	
	if($errFlag!=""){								//����ϴ����д����ǵĻ�
		if($Isedit==0){								//�����ֱ���ϴ�ͼƬ�����ִ��
			return $errFlag;
		}elseif($errFlag!=1){						//����Ǳ༭ͼƬ����ѡ�����ϴ��ļ����Ǳ���Ļ�Ҳ����ִ��
			return $errFlag;
		}	
	}
	
	$filename = $file["tmp_name"];
	if(strlen($filename)>4){					
		$im_size = getimagesize($filename);	
		$src_w = $im_size[0];		//Դ�ļ���
		$src_h = $im_size[1];		//Դ�ļ���
		$src_type = $im_size[2];	//Դ�ļ�����
		
		$pinfo = pathinfo($file["name"]);
		$filetype = $pinfo['extension'];
		$all_path = $path_im.$targetFile.".".$filetype;   //·��+�ļ���,Ŀǰ���ϴ�ʱ������
		if (file_exists($all_path)){
			echo "ͬ���ļ��Ѿ�������";
			exit;
		}
		if(!move_uploaded_file ($filename,$all_path)){
			echo "�ƶ��ļ�����";
			exit;
		}		
		switch($src_type){		//�ж�ԴͼƬ�ļ�����
			case 1://gif
			$src_im = imagecreatefromgif($all_path);//��ԴͼƬ�ļ�ȡ��ͼ��
			break;
			case 2://jpg
			$src_im = imagecreatefromjpeg($all_path);
			break;
			case 3://png
			$src_im = imagecreatefrompng($all_path);
			break;
			case 4:
			break;
			default:
			//die("��֧�ֵ��ļ�����");
			//exit;
		}	
		if($smallmark == 1){				//����ͼ					
			ResizeImage($src_im,$dst_sw,$dst_sh,$all_path."_small.jpg"); 
		}
		
		if($Isedit==1){
			$editFile=$path_im.$editFile;
			if(file_exists($editFile)){			//ɾ��ԭ���ļ�
				unlink($editFile);
			}
			if(file_exists($editFile."_small.jpg")){			//ɾ��ԭ���ļ�
				unlink($editFile."_small.jpg");
			}
		}	
		$sourceFile=$targetFile.".".$filetype;;										
	}else{
		$sourceFile=$editFile;
				
	}	
	return $sourceFile;
}


//��������: 	���ɵȱȿ�ߵ�����ͼ
//$im 			ԴͼƬ�ļ��е�ͼ��(imagecreatefromjpeg)
//$maxwidth 	�����
//$maxheight 	���߶�
//$name 		������ͼƬ��·�����ļ���

function ResizeImage($im,$maxwidth,$maxheight,$name){ 
	$width = imagesx($im); 
	$height = imagesy($im); 
	if(($maxwidth && $width > $maxwidth) || ($maxheight && $height > $maxheight)){ 
		if($maxwidth && $width > $maxwidth){ 
			$widthratio = $maxwidth/$width; 
			$RESIZEWIDTH=true; 
		} 
		if($maxheight && $height > $maxheight){ 
			$heightratio = $maxheight/$height; 
			$RESIZEHEIGHT=true; 
		} 
		if($RESIZEWIDTH && $RESIZEHEIGHT){ 
			if($widthratio < $heightratio){ 
				$ratio = $widthratio; 
			}else{ 
				$ratio = $heightratio; 
			} 
		}elseif($RESIZEWIDTH){ 
			$ratio = $widthratio; 
		}elseif($RESIZEHEIGHT){ 
			$ratio = $heightratio; 
		} 
		$newwidth = $width * $ratio; 
		$newheight = $height * $ratio; 
		if(function_exists("imagecopyresampled")){ 
			$newim = imagecreatetruecolor($newwidth, $newheight); 
			imagecopyresampled($newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height); 
		}else{ 
			$newim = imagecreate($newwidth, $newheight); 
			imagecopyresized($newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height); 
		} 
		ImageJpeg ($newim,$name); 
		ImageDestroy ($newim); 
	}else{ 
		ImageJpeg ($im,$name); 
	} 
}


//��������  ����ͼƬ
//$Purl		ԭʼͼƬ��ַ
//$W		���гɶ���ͼƬ
//$H		���гɶ�ߵ�ͼƬ
//$Pname	���к�ͼƬ��ַ

function picCut($Purl,$W,$H,$Pname){
	list($width, $height, $type, $attr) = getimagesize($Purl);   
	switch($type){		//�ж�ԴͼƬ�ļ�����
		case 1://gif
		$img = imagecreatefromgif($Purl);//��ԴͼƬ�ļ�ȡ��ͼ��
		break;
		case 2://jpg
		$img = imagecreatefromjpeg($Purl);
		break;
		case 3://png
		$img = imagecreatefrompng($Purl);
		break;
		case 6:
		$img=imagecreatefromwbmp($Purl);
		break;
		default:
		die("��֧�ֵ��ļ�����");
		exit;
	}	
	//$img = imagecreatefromjpeg($Purl);   

	$iOut = imagecreatetruecolor ($W,$H);  
	$W_star=ceil(($width-$W)/2);	
	$H_star=ceil(($height-$H)/2);
	imagecopy($iOut,$img,0,0,$W_star,$H_star,$W,$H);    
	imagejpeg($iOut,$Pname);   	
}



//��������: ���˱�����ֵ�Ա����
//$str ����ֵ

function StrToSQL($str){
	$str=str_replace("'","",str_replace('"','',trim($str)));
	return $str;
}





///��������: ���ص�ǰ�ͻ���IP

function get_real_ip(){
$ip=false;
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
$ip = $_SERVER["HTTP_CLIENT_IP"];
}
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
for ($i = 0; $i < count($ips); $i++) {
if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
$ip = $ips[$i];
break;
}
}
}
return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

function GetIP_(){
	$ip = $_SERVER['REMOTE_ADDR'];
	if (isset($_SERVER['HTTP_CLIENT_IP']) and preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']) and preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
		foreach ($matches[0] as $xip) {
			if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
					$ip = $xip;
					break;
			}
		}
	}
	return $ip;
}

function GetIP_1(){
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) and preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_REAL_FORWARDED_FOR'], $matches)) {
		foreach ($matches[0] as $xip) {
			if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
					$ip = $xip;
					break;
			}
		}
	}
	else{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
function GetIP_2(){
    static $ip = NULL;
    if($ip!== NULL){
        return $ip;
    }
    if(isset($_SERVER))
        {
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($arr AS $ip){
                $ip = trim($ip);
                if($ip != 'unknown'){
                    $ip = $ip;
                    break;
                }
            }
        }elseif(isset($_SERVER['HTTP_X_REAL_FORWARDED_FOR'])){
            $arr = explode(',', $_SERVER['HTTP_X_REAL_FORWARDED_FOR']);
            foreach ($arr AS $ip){
                $ip = trim($ip);
                if($ip != 'unknown'){
                    $ip = $ip;
                    break;
                }
            }
        }elseif(isset($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }else{
            if(isset($_SERVER['REMOTE_ADDR'])){
                $ip = $_SERVER['REMOTE_ADDR'];
            }else{
                $ip = '0.0.0.0';
            }
        }
    }else{
        if(getenv('HTTP_X_FORWARDED_FOR')){
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        }elseif(getenv('HTTP_CLIENT_IP')){
            $ip = getenv('HTTP_CLIENT_IP');
        }else{
            $ip = getenv('REMOTE_ADDR');
        }
    }
    preg_match("/[\d\.]{7,15}/", $ip, $onlineip);
    $ip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';
    return $ip;
}

//	��������: �����̼Һ�̨�ĵ���
//	$TheDate ��-��-��
//  $roomnum ��ǰ�Ƶ�����������
//	$hotelid �Ƶ�ID
//  $room_info �����������Ϣ

function gettip(){
			if (isset($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"])&&$HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]){
					$ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
			} elseif(isset($HTTP_SERVER_VARS["HTTP_CLIENT_IP"])&&$HTTP_SERVER_VARS["HTTP_CLIENT_IP"]){
					$ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
			} elseif(isset($HTTP_SERVER_VARS["REMOTE_ADDR"])&&$HTTP_SERVER_VARS["REMOTE_ADDR"]) {
					$ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
			} elseif (getenv("HTTP_X_FORWARDED_FOR")) {
					$ip = getenv("HTTP_X_FORWARDED_FOR");
			} elseif (getenv("HTTP_CLIENT_IP")) {
					$ip = getenv("HTTP_CLIENT_IP");
			} elseif (getenv("REMOTE_ADDR")) {
					$ip = getenv("REMOTE_ADDR");
			} else {
					$ip="Unknown";
			}
			return $ip;
}
		
function blogdate_set($db,$TheDate,$roomnum,$hotelId,$room_info){	//�Ƶ��̼Һ�̨�ĵ�������
	$TheDate=explode("-",$TheDate);
	$y=$TheDate[0];
	$m=$TheDate[1];
	$d=$TheDate[2];
	if($y==""){
		$y=date('Y');
		$m=date('m');
		$d=date('d');
	}
	

	$str1=$y."��".$m."��";				//�õ���ǰ���ڵ�������
	$nowdate=$y."-".$m."-".$d;
	$lastdate=date('Y-m-d',strtotime($nowdate.' -1 month')); 				//��һ���µ�����
	$lasty=date("Y",strtotime($lastdate));
	$lastm=date("m",strtotime($lastdate));
	$nextdate=date('Y-m-d',strtotime($nowdate." +1 month")); 				//��һ���µ�����
	$nexty=date("Y",strtotime($nextdate));
	$nextm=date("m",strtotime($nextdate));
	
	echo "<div style='font-size:15px; text-align:center; padding-top:10px;padding-bottom:10px;'>$str1</div>";
	$thismonth=$y."-".$m."-1";	//��ǰ�µĵ�һ��
	$nextmonth=date('Y-m-d',strtotime($thismonth." +1 month")); 		//�¸��µĵ�һ��		
	//exit($nextmonth);
	$num=diff($thismonth,$nextmonth);
	$firstday=date("w",strtotime($thismonth));				//�õ����������ڼ�
	
	echo "<table border=1 width='95%'  style='border-collapse:collapse; text-align:center;' align='center'><tr style='color:#4A7AC9;'><td align='center' height='22'>����</td><td align='center'>��һ</td><td align='center'>�ܶ�</td><td align='center'>����</td><td align='center'>����</td><td align='center'>����</td><td align='center'>����</td></tr>";
	
	$sql="select id,roomname as tingname from hotel_ballroom where hotelId='$hotelId' order by id asc";		//ȡ�øþƵ������������������
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);	
	if($totalAnnounce!=0){
		$i=0;
		while($row = $db->fetch_array($rs)){
				$arrayFather[$i][0]=$row[id];
				$arrayFather[$i][1]=$row[tingname];
			$i++;	
		}
	}	
	
	
	$room_infos=0;	
	$room_infos=explode("|",$room_info);
	for($n=1;$n<=6;$n++){
		echo "<tr>";
		for($i=1;$i<=7;$i++){
			$thisday=0;
			if($i>$firstday)
				$thisday=$i-$firstday;	
			if($n>1)
				$thisday=7*($n-1)+$i-$firstday;
			if($thisday>$num)
				$thisday=0;
			if($thisday==0){
				$display="$nbsp";
			}else{
				$TheDate=$y."-".$m."-".$thisday;
				$display="$thisday</a><BR>";			
				$room_first="";
				for($dd=0;$dd<count($room_infos);$dd++){			//�ҵ�����û�п�������
					$rooms=explode("|",$room_infos[$dd]);
					if($rooms[0]==$thisday){
						$room_first=$room_infos[$dd];
					}	
				}	
				
				for($m=1;$m<=$roomnum;$m++){
					$display=$display."<input type='text' class='room".$m."' readonly onclick=\"this.value=='X'?this.value='':this.value='X'\" title='".$arrayFather[$m-1][1]."' name='room".$thisday."_".$arrayFather[$m-1][0]."' id='room".$thisday."_".$arrayFather[$m-1][0]."'";
					
					if(strstr($room_first,$arrayFather[$m-1][0]))
						$display=$display." value='X'";
				
					$display=$display."><input type='hidden' value='".$arrayFather[$m-1][0]."' name='room_".$thisday."_".$arrayFather[$m-1][0]."' id='room_".$thisday."_".$arrayFather[$m-1][0]."'>";
					if($m%4==0)
						$display=$display."<br>";			
				}
			}
			echo "<td align='center'>".$display."</td>";
		}
		if(($n==5) and (($thisday==$num) or($thisday==0))){
			$n++;
		}
		echo "</tr>";
	}
	echo "</table>";
}


//��������ǲ�����������
function isDate($date,$format="Y-m-d") {
	$dateArr = explode("-", $date);
	//����·ݺ����ڲ���2λ��������
	$m = $dateArr[1];
	$d = $dateArr[2];
	if (strlen($dateArr[1]) <> 2) {
		$m = '0'.$dateArr[1];
	}
	if (strlen($dateArr[2]) <> 2) {
		$d = '0'.$dateArr[2];
	}
	//��������
	$date = $dateArr[0].'-'.$m.'-'.$d;
	$unixTime = strtotime($date);
	$checkDate = date($format,$unixTime);
	if ($checkDate == $date) {
		return 1;
	} else {
		return 0;
	}
}


//	��������: ���email�Ƿ�����
//	$email ����
function check_email_address($email) {   
	if (!ereg("[^@]{1,64}@[^@]{1,255}", $email)) {    
		return false;    
	}    
	$email_array = explode("@", $email);    
	$local_array = explode(".", $email_array[0]);    
	for ($i = 0; $i < sizeof($local_array); $i++) {    
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])){    		return false;    
		}    
	}    
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { 
		$domain_array = explode(".", $email_array[1]);    
		if (sizeof($domain_array) < 2) {    
			return false; 
		}    
		for ($i = 0; $i < sizeof($domain_array); $i++) {    
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {    
				return false;    
			}    
		}    
	}    
	return true;    
}


//��վ�ֻ����ŷ��ͽӿ�
function sms_send($mobile,$content) {
//$sms_stats = file_get_contents('http://httpdx.asp.sh.cn/MT.do?Username=591wed&Password=tomtomxie&Mobile='.$mobile.'&Content='.$content.'');
/*	echo "<script src='http://httpdx.asp.sh.cn/MT.do?Username=591wed&Password=tomtomxie&Mobile=".$mobile."&Content=".$content."'></script>";
	$sms_stats=0;*/
	$mobile_black=array('13817059165'=>'13817059165');
	if(!$mobile_black[$mobile]){
	$sms_stats = Msg_PostSingle("xs@591ws", "123456", $mobile, $content, $subId);
	return $sms_stats;
	//	global $client;
	//	 *
	//	 * ����Ĵ��뽫��������Ϊ test �� 159xxxxxxxx �� 159xxxxxxxx
	//	 * $client->sendSMS���и�����ò�������ο� Client.php
	//	 
	//	$sms_stats = $client->sendSMS(array($mobile),$content);
	//	return $sms_stats;
	
	}
}

//��ѯ�Ƿ�ΪVIP��Ա
function checkMember($db,$userName) {
	if(!$userName){
		return 0;
	}
	$sql = "select Auditing from member_infor where UserName = '$userName'  and Mobile<>'' and (ValidCode=999 or ValidCode=888888 or CookieName='�Ź��ᱨ��') limit 1";
	$rs = $db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if ($totalAnnounce) {
		$row = $db->fetch_array($rs);
		$memberStats = $row[Auditing];
		if (($memberStats == 0) || ($memberStats == 1)) {
			$memberStats = 1;
		}
	} else {
		$memberStats = 0;
	}
	return $memberStats;
}

/*
//���¹��̼ҽ�3���µĿڱ�ֵ		2010-6-9֮ǰ�õ�
function UpdateScore($db){
	$sql="select updateScoreTime from websiteinfor where datediff(current_date,updateScoreTime)>=1 and xiia=1 limit 1";
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if($totalAnnounce){														//�������û����
		$countStartTime=date('Y-m-d',strtotime(date('Y-m-d')." -3 month"));  //������ǰ�Ľ���
		$countStartTime=date('Y-m-d',strtotime($countStartTime." +1 day"));
		
		$sql2="select companyID,cType from customer_baseinfo where IsSpecialDisplay in (1,2,3)";
		$rs2=$db->query($sql2);
		$totalAnnounce2=$db->num_rows($rs2);
		if($totalAnnounce2){	
			while($row2= $db->fetch_array($rs2)){
				$companyID=$row2[companyID];
				$cType=$row2[cType];
				$sql3="select DeductScore,backScore from customer_orderrecord where companyID = '$companyID' and CompanyType = '$cType' and ConfirmTime > '$countStartTime' and (OrderStat = '1' or OrderStat = '2' or OrderStat = '3')";
				$rs3=$db->query($sql3);
				$totalAnnounce3=$db->num_rows($rs3);
				if($totalAnnounce3){
					$newScore=0;
					while($row3= $db->fetch_array($rs3)){
						$newScore=$newScore+$row3[DeductScore]+$row3[backScore];
					}
					
					$db->query("Update customer_baseinfo set QuarterScore = '$newScore' where companyID = '$companyID'");
				}else{
					$db->query("Update customer_baseinfo set QuarterScore = '0' where companyID = '$companyID'");
				}				
			}
		}	
		
		$db->query("Update websiteinfor set updateScoreTime = '".date('Y-m-d')."' where xiia = 1");
	}
}*/

	
//���¹��̼ҽ�3���µĿڱ�ֵ	2010-6-9֮���õ�
function UpdateScore($db){
	$sql="select updateScoreTime from websiteinfor where datediff(current_date,updateScoreTime)>=1 and xiia=1 limit 1";
	$rs=$db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if($totalAnnounce){			//�������û����																	
		$countStartTime=date('Y-m-d',strtotime(date('Y-m-d')." -3 month"));  //������ǰ�Ľ���
		$countStartTime=date('Y-m-d',strtotime($countStartTime." +1 day"));

		//�Ȱ������̼ҿڱ�������Ϊ0
		$sql2="update customer_baseinfo set QuarterScore='0' where IsSpecialDisplay in (1,2,3)";
		$rs2=$db->query($sql2);	
		

		//����ͳ�ƶ����������̼ҵķ����ܺ�
		$sql2="SELECT distinct(`CompanyID`),sum(`DeductScore`) as DeductScoreSum,sum(`backScore`) as backScoreSum FROM `customer_orderrecord` WHERE (`ConfirmTime`>'$countStartTime' and (OrderStat = '1' or OrderStat = '2' or OrderStat = '3')) or (backScore<>0 and backTime>'".strtotime($countStartTime)."') GROUP BY CompanyID";
		$rs2=$db->query($sql2);
		$totalAnnounce2=$db->num_rows($rs2);
		if($totalAnnounce2){	
			while($row2= $db->fetch_array($rs2)){
				$newScore=0;
				$companyID=$row2[CompanyID];
				$newScore=$row2[DeductScoreSum]+$row2[backScoreSum];
				$db->query("Update customer_baseinfo set QuarterScore = '$newScore' where companyID = '$companyID'");
			}
		}
		
		$db->query("Update websiteinfor set updateScoreTime = '".date('Y-m-d')."' where xiia = 1");
	}
}	

//���¼��ȶ���Ϊ0(2,5,8,11�µ�һ�����)
function updateQuarterCount($db){
	if((date('Y-m-d')==date('Y-08-01')) or (date('Y-m-d')==date('Y-11-01')) or (date('Y-m-d')==date('Y-02-01')) or (date('Y-m-d')==date('Y-05-01'))){		
		$sql="select updateQuarterCountDate from websiteinfor where xiia=1 limit 1";
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		if($totalAnnounce){
			$row= $db->fetch_array($rs);
			$updateQuarterCountDate=$row[updateQuarterCountDate];
			if(strtotime($updateQuarterCountDate)!=strtotime(date('Y-m-d'))){		//�����ǰʱ�䲻���ڿ�����µ�ʱ�䣬����¼��ȶ�����
				$db->query("update  customer_baseinfo set QuarterOrderCount = '0'");
				$db->query("update websiteinfor set updateQuarterCountDate='".date('Y-m-d')."' where xiia=1 ");
			}	
		}		
	}
}

//�������¶�����(��������ʾ����ͼ��,ÿ�µĵ�һ�����)
function updatePreMonthOrderCount($db){
	if(date('Y-m-d')==date('Y-m-01')){
		$sql="select updatePreMonthCountDate from websiteinfor where xiia=1 limit 1";
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		if($totalAnnounce){
			$row= $db->fetch_array($rs);
			$updatePreMonthCountDate=$row[updatePreMonthCountDate];
			if(strtotime($updatePreMonthCountDate)!=strtotime(date('Y-m-d'))){		//�����ǰʱ�䲻���ڿ�����µ�ʱ�䣬��������¶�����
				$db->query("update customer_baseinfo set PreMonthOrderCount = MonthOrderCount, MonthOrderCount = '0'");
				$db->query("update websiteinfor set updatePreMonthCountDate='".date('Y-m-d')."' where xiia=1 ");
			}	
		}		
	}		
}

///	�������ܣ���ȡҳ��URL��ַ
/// 0Ϊ������һҳ��1Ϊ���ص�ǰҳ�棨����������2Ϊ���ص�ǰҳ�棨����������
function getUrl($str) {
	switch ($str) {
		case 0:
			$url = $_SERVER['HTTP_REFERER'];
		break;
		case 1:
			$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		break;
		case 2:
			$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
		break;
	}
	return urlencode($url);
}

//��������
function getFriendLink($db,$link_type,$cityId) {
	if(!$cityId){
		$cityId=1;
	}
	$sql="select * from site_link where link_type='$link_type' and instr(link_path,'images_link')>0 and cityId='$cityId' order by link_addtime desc";
	$rs = $db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if ($totalAnnounce) {
		$return_info .= '<div id="site_link_p"><ul>';
		while ($row = $db->fetch_array($rs)) {
			$link_path = str_replace("..","",$row[link_path]);
			$link_url = $row[link_url];
			$link_alt = $row[link_alt];
			$return_info .= '<li><a href="'.$link_url.'" target="_blank" title="'.$link_alt.'"><img src="http://www.591wed.com'.$link_path.'"></a></li>';
		}
		$return_info .= '</ul></div><div id="clearall"></div>';
	}
	$sql="select * from site_link where link_type='$link_type' and instr(link_path,'images_link')=0 and cityId='$cityId' order by link_addtime desc";
	$rs = $db->query($sql);
	$totalAnnounce=$db->num_rows($rs);
	if ($totalAnnounce) {
		$return_info .= '<div id="site_link_t"><ul>';
		while ($row = $db->fetch_array($rs)) {
			$link_url = $row[link_url];
			$link_alt = $row[link_alt];
			$return_info .= '<li><a href="'.$link_url.'" target="_blank" title="'.$link_alt.'">'.$link_alt.'</a></li>';
		}
		$return_info .= '</ul></div><div id="clearall"></div>';
	}
	
	if ($return_info) {
		$return_info = '<div id="site_link">'.$return_info.'</div>';
	}
	return $return_info;
}


class smtp
{
/* Public Variables */
var $smtp_port;
var $time_out;
var $host_name;
var $log_file;
var $relay_host;
var $debug;
var $auth;
var $user;
var $pass;

/* Private Variables */
var $sock;

/* Constractor */
function smtp($relay_host = "", $smtp_port = 25,$auth = false,$user,$pass)
{
$this->debug = FALSE;
$this->smtp_port = $smtp_port;
$this->relay_host = $relay_host;
$this->time_out = 30; //is used in fsockopen()
#
$this->auth = $auth;//auth
$this->user = $user;
$this->pass = $pass;
#
$this->host_name = "localhost"; //is used in HELO command
$this->log_file = "";

$this->sock = FALSE;
}

/* Main Function */
function sendmail($to, $from, $subject = "", $body = "", $mailtype, $cc = "", $bcc = "", $additional_headers = "")
{
$mail_from = $this->get_address($this->strip_comment($from));
$body = ereg_replace("(^|(\r\n))(\\.)", "\\1.\\3", $body);
$header .= "MIME-Version:1.0\r\n";
if($mailtype=="HTML"){
$header .= "Content-Type:text/html\r\n";
}
$header .= "To: ".$to."\r\n";
if ($cc != "") {
$header .= "Cc: ".$cc."\r\n";
}
$header .= "From: $from<".$from.">;\r\n";
$header .= "Subject: ".$subject."\r\n";
$header .= $additional_headers;
$header .= "Date: ".date("r")."\r\n";
$header .= "X-Mailer:By Redhat (PHP/".phpversion().")\r\n";
list($msec, $sec) = explode(" ", microtime());
$header .= "Message-ID: <".date("YmdHis", $sec).".".($msec*1000000).".".$mail_from.">;\r\n";
$TO = explode(",", $this->strip_comment($to));

if ($cc != "") {
$TO = array_merge($TO, explode(",", $this->strip_comment($cc)));
}

if ($bcc != "") {
$TO = array_merge($TO, explode(",", $this->strip_comment($bcc)));
}

$sent = TRUE;
foreach ($TO as $rcpt_to) {
$rcpt_to = $this->get_address($rcpt_to);
if (!$this->smtp_sockopen($rcpt_to)) {
$this->log_write("Error: Cannot send email to ".$rcpt_to."\n");
$sent = FALSE;
continue;
}
if ($this->smtp_send($this->host_name, $mail_from, $rcpt_to, $header, $body)) {
$this->log_write("E-mail has been sent to <".$rcpt_to.">;\n");
} else {
$this->log_write("Error: Cannot send email to <".$rcpt_to.">;\n");
$sent = FALSE;
}
fclose($this->sock);
$this->log_write("Disconnected from remote host\n");
}
return $sent;
}

/* Private Functions */

function smtp_send($helo, $from, $to, $header, $body = "")
{
if (!$this->smtp_putcmd("HELO", $helo)) {
return $this->smtp_error("sending HELO command");
}
#auth
if($this->auth){
if (!$this->smtp_putcmd("AUTH LOGIN", base64_encode($this->user))) {
return $this->smtp_error("sending HELO command");
}

if (!$this->smtp_putcmd("", base64_encode($this->pass))) {
return $this->smtp_error("sending HELO command");
}
}
#
if (!$this->smtp_putcmd("MAIL", "FROM:<".$from.">;")) {
return $this->smtp_error("sending MAIL FROM command");
}

if (!$this->smtp_putcmd("RCPT", "TO:<".$to.">;")) {
return $this->smtp_error("sending RCPT TO command");
}

if (!$this->smtp_putcmd("DATA")) {
return $this->smtp_error("sending DATA command");
}

if (!$this->smtp_message($header, $body)) {
return $this->smtp_error("sending message");
}

if (!$this->smtp_eom()) {
return $this->smtp_error("sending <CR>;<LF>;.<CR>;<LF>; [EOM]");
}

if (!$this->smtp_putcmd("QUIT")) {
return $this->smtp_error("sending QUIT command");
}

return TRUE;
}

function smtp_sockopen($address)
{
if ($this->relay_host == "") {
return $this->smtp_sockopen_mx($address);
} else {
return $this->smtp_sockopen_relay();
}
}

function smtp_sockopen_relay()
{
$this->log_write("Trying to ".$this->relay_host.":".$this->smtp_port."\n");
$this->sock = @fsockopen($this->relay_host, $this->smtp_port, $errno, $errstr, $this->time_out);
if (!($this->sock && $this->smtp_ok())) {
$this->log_write("Error: Cannot connenct to relay host ".$this->relay_host."\n");
$this->log_write("Error: ".$errstr." (".$errno.")\n");
return FALSE;
}
$this->log_write("Connected to relay host ".$this->relay_host."\n");
return TRUE;
}

function smtp_sockopen_mx($address)
{
$domain = ereg_replace("^.+@([^@]+)$", "\\1", $address);
if (!@getmxrr($domain, $MXHOSTS)) {
$this->log_write("Error: Cannot resolve MX \"".$domain."\"\n");
return FALSE;
}
foreach ($MXHOSTS as $host) {
$this->log_write("Trying to ".$host.":".$this->smtp_port."\n");
$this->sock = @fsockopen($host, $this->smtp_port, $errno, $errstr, $this->time_out);
if (!($this->sock && $this->smtp_ok())) {
$this->log_write("Warning: Cannot connect to mx host ".$host."\n");
$this->log_write("Error: ".$errstr." (".$errno.")\n");
continue;
}
$this->log_write("Connected to mx host ".$host."\n");
return TRUE;
}
$this->log_write("Error: Cannot connect to any mx hosts (".implode(", ", $MXHOSTS).")\n");
return FALSE;
}

function smtp_message($header, $body)
{
fputs($this->sock, $header."\r\n".$body);
$this->smtp_debug(">; ".str_replace("\r\n", "\n".">; ", $header."\n>; ".$body."\n>; "));

return TRUE;
}

function smtp_eom()
{
fputs($this->sock, "\r\n.\r\n");
$this->smtp_debug(". [EOM]\n");

return $this->smtp_ok();
}

function smtp_ok()
{
$response = str_replace("\r\n", "", fgets($this->sock, 512));
$this->smtp_debug($response."\n");

if (!ereg("^[23]", $response)) {
fputs($this->sock, "QUIT\r\n");
fgets($this->sock, 512);
$this->log_write("Error: Remote host returned \"".$response."\"\n");
return FALSE;
}
return TRUE;
}

function smtp_putcmd($cmd, $arg = "")
{
if ($arg != "") {
if($cmd=="") $cmd = $arg;
else $cmd = $cmd." ".$arg;
}

fputs($this->sock, $cmd."\r\n");
$this->smtp_debug(">; ".$cmd."\n");

return $this->smtp_ok();
}

function smtp_error($string)
{
$this->log_write("Error: Error occurred while ".$string.".\n");
return FALSE;
}

function log_write($message)
{
$this->smtp_debug($message);

if ($this->log_file == "") {
return TRUE;
}

$message = date("M d H:i:s ").get_current_user()."[".getmypid()."]: ".$message;
if (!@file_exists($this->log_file) || !($fp = @fopen($this->log_file, "a"))) {
$this->smtp_debug("Warning: Cannot open log file \"".$this->log_file."\"\n");
return FALSE;
}
flock($fp, LOCK_EX);
fputs($fp, $message);
fclose($fp);

return TRUE;
}

function strip_comment($address)
{
$comment = "\\([^()]*\\)";
while (ereg($comment, $address)) {
$address = ereg_replace($comment, "", $address);
}

return $address;
}

function get_address($address)
{
$address = ereg_replace("([ \t\r\n])+", "", $address);
$address = ereg_replace("^.*<(.+)>;.*$", "\\1", $address);

return $address;
}

function smtp_debug($message)
{
if ($this->debug) {
echo $message;
}
}
}

//�����̼ҹ�˾���ͱ��������Σ������
function filterHTML($str,$type) {
	if ($type == 1) { //����ǾƵ꣬������ͼƬ
		$farr = array("/<(script.*?)>(.*?)<(\/script.*?)>/si", // ɾ��<script>������</script >��ʽ
		"/<(script.*?)>/si", // ɾ��<script>δ���
		"/<(\/?form.*?)>/si", // ɾ����
		"/<(i?frame.*?)>(.*?)<(\/i?frame.*?)>/si", // ɾ�����
		"/<(meta.*?)>/si", // ɾ��<meta����>δ���
		"/(href|src|background|url|dynsrc|expression|codebase) ?[=:\(]( ?\"?\'?[javascript:|vbscript:][^>]*?)(\)?)([ >\/])/si", // ȡ��href=javascript:
		"/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU", // ����javascript��on�¼�
		"/#591#/", // ����ת����
		);
		$tarr = array("",
		"",
		"",
		"",
		"",
		"\\1='#'\\3\\4",
		"\\1\\2",
		"'",
		);
	} else {
		$farr = array("/<(script.*?)>(.*?)<(\/script.*?)>/si", // ɾ��<script>������</script >��ʽ
		"/<(script.*?)>/si", // ɾ��<script>δ���
		"/<(\/?form.*?)>/si", // ɾ����
		"/<(i?frame.*?)>(.*?)<(\/i?frame.*?)>/si", // ɾ�����
		"/<(meta.*?)>/si", // ɾ��<meta����>δ���
		"/(href|src|background|url|dynsrc|expression|codebase) ?[=:\(]( ?\"?\'?[javascript:|vbscript:][^>]*?)(\)?)([ >\/])/si", // ȡ��href=javascript:
		"/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU", // ����javascript��on�¼�
		"/<img[^>]+>/si", // ���˵�ͼƬ
		"/#591#/", // ����ת����
		);
		$tarr = array("",
		"",
		"",
		"",
		"",
		"\\1='#'\\3\\4",
		"\\1\\2",
		"",
		"'",
		);
	}
	
	$str = preg_replace($farr, $tarr, $str);
	return $str;
//	$str = eregi_replace('<img[^>]+>', '', $str);
//	$str = eregi_replace('(iframe|div)[^>]*>', 'p>', $str);
//	$str = eregi_replace('#591#', '\'', $str);
//	return $str;
}



//���庯������default����
function getForumInfo($forumName,$forumInfo,$flag='') {
	if ($forumInfo) {
		$forum = explode("$$$",$forumInfo);
		for ($i=0; $i<count($forum); $i++) {
			//echo $forum[$i].'--'.$forumName.'<BR>';
			//���������������ǰ���������ȡ������¼����
			//���鷵�ظ�ʽ���һ�����|||6191|||729807|||0��
			if (stristr($forum[$i],$forumName)) {
				$focus = $forum[$i];
				break;
			}
		}
		//���в��
		$info = explode("|||",$focus);
		
		if($flag='new'){
			return '����������'.$info[3];
		}
		return '�����⣺'.$info[1].'������������'.$info[2].'��������������'.$info[3];
	}
}


//���庯������default���� ������Ϣ
function getThreadInfo($threadInfo,$num=''){
	if($threadInfo){
		$threadInfos=explode('&&&',$threadInfo);
		$return='';
		$returnStr='';
		for($i=0;$i<(count($threadInfos)-1);$i++){
			$threadInfo=explode('|||',$threadInfos[$i]);
			$returnStr= '<li';
			if($i==(count($threadInfos)-2)){
				$returnStr=$returnStr.' id="lastli"';
			}
			$returnStr=$returnStr.'><a href="http://bbs.591wed.com/thread-'.$threadInfo[0].'-1-1.html" target="_blank" title="'.$threadInfo[1].'">'.$threadInfo[1].'</a></li>';			
			if($return){
				$return=$return.$returnStr;
			}else{
				$return=$returnStr;
			}
			if($num && $num==($i+1)){
				return $return;
			}

		}	
		return $return;
	}

}

//��ȡ�ҵ����ӣ�$type=1��ȡ���⣬2ȡ�ظ�
function getMyThreads($db,$discuz_uid,$type) {
	if ($discuz_uid) {
		if ($type == 1) {
			$sql = "select tid, dateline, subject from bbs_threads where authorid = $discuz_uid and displayorder <> -1 order by tid desc limit 0,10";
		} elseif ($type == 2) {
			$sql = "select distinct A.tid as tid, B.subject as subject from bbs_posts A, bbs_threads B where A.first = 0 and A.authorid = $discuz_uid and A.tid = B.tid order by A.pid desc limit 0,10";
		}
		$rs = $db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		if ($totalAnnounce) {
			while ($row = $db->fetch_array($rs)) {
				$tid = $row[tid];
				if ($type == 1) {
					$dateline = date('Y-m-d H:i',$row[dateline]);
					$showMsg = '&#13;����ʱ�䣺'.$dateline;
				}
				$subject = $row[subject];
				$subject_all .= '<li><a href="http://bbs.591wed.com/thread-'.$tid.'-1-1.html" target="_blank" title="'.$subject.$showMsg.'">'.substring($subject,0,28).'</a></li>';
			}
		}
		return $subject_all;
	} else {
		echo '<BR /><BR /><center>���� [<a href="http://bbs.591wed.com/logging.php?action=login" title="��¼">��¼</a>] �� [<a href="http://bbs.591wed.com/register.php" title="ע��">ע��</a>]</center>';
	}
}


//�°���ҳ��������
function getFriendLink_index($db,$link_type,$cityId) {
			//$cityId=$_COOKIE["site_city"];
			if(!$cityId){
				$cityId=1;
			}
			$sql="select * from site_link where link_type='$link_type' and instr(link_path,'images_link')>0 and cityId='$cityId' order by link_addtime desc";
			$rs = $db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			if ($totalAnnounce) {
				$return_info .= '<div id="site_link_p"><ul>';
				while ($row = $db->fetch_array($rs)) {
					$link_path = str_replace("..","",$row[link_path]);
					$link_url = $row[link_url];
					$link_alt = $row[link_alt];
					$return_info .= '<li><a href="'.$link_url.'" target="_blank" title="'.$link_alt.'"><img src="http://www.591wed.com'.$link_path.'"></a></li>';
				}
				$return_info .= '</ul></div><div id="clearall"></div>';
			}
			$sql="select * from site_link where link_type='$link_type' and instr(link_path,'images_link')=0 and cityId='$cityId' order by link_addtime desc";
			$rs = $db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			if ($totalAnnounce) {
				$return_info .= '<div id="site_link_t"><ul>';
				while ($row = $db->fetch_array($rs)) {
					$link_url = $row[link_url];
					$link_alt = $row[link_alt];
					$return_info .= '<li><a href="'.$link_url.'" target="_blank" title="'.$link_alt.'">'.$link_alt.'</a></li>';
				}
				$return_info .= '</ul></div><div id="clearall"></div>';
			}
			
			return $return_info;
}

//smarty �������� 
/*function getFriendLink_smarty($db,$link_type,$cityId) {			
	if(!$cityId){
		$cityId=1;
	}
	$sql="select link_url,link_alt from site_link where link_type='$link_type' and instr(link_path,'images_link')=0 and cityId='$cityId' order by link_addtime desc";
	$sql = mysql_query($sql);
	while($row=mysql_fetch_row($sql)){
		 $return_info[]= $row;
	}
	return $return_info;
}*/

function getFriendLink_smarty($db,$link_type,$cityId,$link_comp) {			
	if(!$cityId){
		$cityId=1;
	}
	$sql="select link_url,link_alt from site_link where link_type='$link_type' and instr(link_path,'images_link')=0 and cityId='$cityId' and link_comp='".$link_comp."' order by link_addtime desc";
	$sql = mysql_query($sql);
	while($row=mysql_fetch_row($sql)){
		 $return_info[]= $row;
	}
	return $return_info;
}

		
		
//��Сд����ת�ɴ�д
function toBigNum($str){
	$basical=array(0=>"��",1=>"һ",2=>"��",3=>"��",4=>"��",5=>"��",6=>"��",7=>"��",8=>"��",9=>"��",10=>"ʮ",11=>"ʮһ",12=>"ʮ��");
	return $basical[$str];
}
	
	
//�¸���	
function nextMonth($year,$month){
 if($month == 12){
  $year = $year +1;
  $month = 1;
 }else {
  $month++;
 }
 return "year=$year&month=$month";
}

//�ϸ���
function lastMonth($year,$month){
 if($month == 1){
  $year = $year -1;
  $month = 12;
 }else{
  $month--;
 }
 return "year=$year&month=$month";
}


//���ԤԼ״̬���������Ƿ���ԤԼ
function checkOrder($db,$cType,$site_username,$companyID) {
	if ($site_username) {
		$haveOrder = 0;
		if ($site_username != 'ԤԼ��') {
			$sql = "select SubTime from customer_orderrecord where CompanyType = $cType and CompanyID = $companyID and UserName = '$site_username' and datediff('".date('Y-m-d')."',SubTime) <= 183 and OrderStat <> 5 order by SubTime desc limit 1";
			$rs = $db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			if ($totalAnnounce) {
				$haveOrder = 1;
			}
		}
		return $haveOrder;
	}
}

	//�Ƶ��Զ�����ͷ�
	function hotelServiceDeal($db,$cityId,$mobilePhone,$ctype){
		//�����һ��ԤԼ��������Ŀͷ�id
			$isOneOrder=false;
			if($ctype=='1'){//�ж��Ƿ��ǾƵ���ҵ 
				$comm="CompanyType='1'";
			}else{
				$comm="CompanyType<>'1'";
			}
			$sql = "select serviceID from customer_orderrecord where MobilePhone = '".$mobilePhone."' and $comm order by ID desc limit 1";			
			$rs = $db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			if ($totalAnnounce) {				//���֮ǰ��ԤԼ��
				$row = $db->fetch_array($rs);
				$serviceID=$row[serviceID];
				if($serviceID==0){
					$isOneOrder=true;
				}else{
				 	return $serviceID;
				}
			}else{								//֮ǰûԤԼ��
				$isOneOrder=true;
			}
		
			//���ԤԼ���������һ��
			if($isOneOrder){	
				$sql="select a.serviceID from customer_orderrecord as a,member_service as b where a.$comm and b.cType='$ctype' and a.serviceID=b.id and b.cityId='".$cityId."' and a.OrderSource<>'4' order by a.id desc limit 1";
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					$row = $db->fetch_array($rs);
					$serviceID=$row[serviceID];
				}								
				
				if(!$serviceID){
					$serviceID=0;
				}
				
				$sql="select * from service_deal where yy='".date('Y',time())."' and mm='".date('m',time())."' and cityId='$cityId'";//�ж��Ƿ��е��ݣ����򰴵��ݷ���
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					 $row = $db->fetch_array($rs);
					 $deal_info=$row[deal_info];
					 $deal_info_arr=explode('|',$deal_info);
					
					 foreach($deal_info_arr as $value)//���
					 {
						  $deal_info_temp=explode('-',$value);//��ȡ������ֵ
						  $arr_service1[$deal_info_temp[0]]=$deal_info_temp[1];
					 }
					
					 if($arr_service1[intval(date('d',time()))]!=0)
					 {
						 $arr_service=explode(',',$arr_service1[intval(date('d',time()))]);//��ȡ����ͷ��������
						 $i=count($arr_service);
					 }
				}
				if($arr_service1[intval(date('d',time()))]==0)//�������û�пͷ����䣬Ĭ�Ϸ���ȫ���ͷ�
				{
					$sql="select id from member_service where cityId='".$cityId."' and cType='$ctype' and id<>203 order by id asc";
					$rs=$db->query($sql);
					$totalAnnounce=$db->num_rows($rs);
					if($totalAnnounce){
						$i=0;
						while($row = $db->fetch_array($rs)){
							$arr_service[$i]=$row[id];//��ȡ���пͷ�ID
							$i++;
						}
					}
				}
				
				if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
					foreach($arr_service as $key => $value){
						if($arr_service[$key]<=$serviceID && $arr_service[$key+1]>$serviceID){	
								$serviceIDNext=$arr_service[$key+1];
						}
					}
				}else{				//����Ǹ��Ͽͷ�ϵͳ��֮ǰû�ж�������ͷ����ͷ���ͷ����һ���ͷ����ö���
					$serviceIDNext=$arr_service[0];
				}		
				
				if(!$serviceIDNext){
					$serviceIDNext=$arr_service[0];
				}
				
				return $serviceIDNext;
				//$errMsg=$serviceID;
				//break;
			}
	}
	//ϲ�ǿͷ��Զ����� 
	function theCandyServiceDeal($db,$cityId,$mobilePhone){
		$isOneOrder=true;
			//���ԤԼ���������һ��
			if($isOneOrder){	
				$sql="select a.serviceID from candy_order_info as a,member_service as b where a.serviceID=b.id and b.cityId='".$cityId."' and b.id<>180 order by a.subtime desc limit 1";
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					$row = $db->fetch_array($rs);
					$serviceID=$row[serviceID];
				}								
				
				if(!$serviceID){
					$serviceID=0;
				}
				
				$sql="select * from service_deal where yy='".date('Y',time())."' and mm='".date('m',time())."' and cityId='$cityId' and cType=10";//�ж��Ƿ��е��ݣ����򰴵��ݷ���
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					 $row = $db->fetch_array($rs);
					 $deal_info=$row[deal_info];
					 $deal_info_arr=explode('|',$deal_info);
					
					 foreach($deal_info_arr as $value)//���
					 {
						  $deal_info_temp=explode('-',$value);//��ȡ������ֵ  1-19,23,24,39
						  $arr_service1[$deal_info_temp[0]]=$deal_info_temp[1];
					 }
					
					 if($arr_service1[intval(date('d',time()))]!=0)
					 {
						 $arr_service=explode(',',$arr_service1[intval(date('d',time()))]);//��ȡ����ͷ��������
						 $i=count($arr_service);
					 }
				}
				if($arr_service1[intval(date('d',time()))]==0)//�������û�пͷ����䣬Ĭ�Ϸ���ȫ���ͷ�
				{
					$sql="select id from member_service where cityId='".$cityId."' and id<>180 and cType='5' order by id asc";
					$rs=$db->query($sql);
					$totalAnnounce=$db->num_rows($rs);
					if($totalAnnounce){
						$i=0;
						while($row = $db->fetch_array($rs)){
							$arr_service[$i]=$row[id];//��ȡ���пͷ�ID
							$i++;
						}
					}
				}
				if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
					foreach($arr_service as $key => $value){
						if($arr_service[$key]<=$serviceID && $arr_service[$key+1]>$serviceID){	
								$serviceIDNext=$arr_service[$key+1];
						}
					}
				}else{				//����Ǹ��Ͽͷ�ϵͳ��֮ǰû�ж�������ͷ����ͷ���ͷ����һ���ͷ����ö���
					$serviceIDNext=$arr_service[0];
				}	
				if(!$serviceIDNext){
					$serviceIDNext=$arr_service[0];
				}
				
				return $serviceIDNext;
				//$errMsg=$serviceID;
				//break;
			}
	}
	//�鳵�ͷ��Զ����� 
function theCarServiceDeal($db,$cityId,$mobilePhone){
		$isOneOrder=true;
			//���ԤԼ���������һ��
			if($isOneOrder){	
				$sql="select a.serviceID from car_orderinfo as a,member_service as b where a.serviceID=b.id and b.cityId='".$cityId."' order by a.order_sub_time desc limit 1";
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					$row = $db->fetch_array($rs);
					$serviceID=$row[serviceID];
				}								
				
				if(!$serviceID){
					$serviceID=0;
				}
				
				$sql="select * from service_deal where yy='".date('Y',time())."' and mm='".date('m',time())."' and cityId='$cityId' and cType=8";//�ж��Ƿ��е��ݣ����򰴵��ݷ���
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					 $row = $db->fetch_array($rs);
					 $deal_info=$row[deal_info];
					 $deal_info_arr=explode('|',$deal_info);
					
					 foreach($deal_info_arr as $value)//���
					 {
						  $deal_info_temp=explode('-',$value);//��ȡ������ֵ  1-19,23,24,39
						  $arr_service1[$deal_info_temp[0]]=$deal_info_temp[1];
					 }
					
					 if($arr_service1[intval(date('d',time()))]!=0)
					 {
						 $arr_service=explode(',',$arr_service1[intval(date('d',time()))]);//��ȡ����ͷ��������
						 $i=count($arr_service);
					 }
				}
				if($arr_service1[intval(date('d',time()))]==0)//�������û�пͷ����䣬Ĭ�Ϸ���ȫ���ͷ�
				{
					$sql="select id from member_service where cityId='".$cityId."' and cType='4' order by id asc";
					$rs=$db->query($sql);
					$totalAnnounce=$db->num_rows($rs);
					if($totalAnnounce){
						$i=0;
						while($row = $db->fetch_array($rs)){
							$arr_service[$i]=$row[id];//��ȡ���пͷ�ID
							$i++;
						}
					}
				}
				if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
					foreach($arr_service as $key => $value){
						if($arr_service[$key]<=$serviceID && $arr_service[$key+1]>$serviceID){	
								$serviceIDNext=$arr_service[$key+1];
						}
					}
				}else{				//����Ǹ��Ͽͷ�ϵͳ��֮ǰû�ж�������ͷ����ͷ���ͷ����һ���ͷ����ö���
					$serviceIDNext=$arr_service[0];
				}	
				if(!$serviceIDNext){
					$serviceIDNext=$arr_service[0];
				}
				
				return $serviceIDNext;
				//$errMsg=$serviceID;
				//break;
			}
	}
	

	//��ͨ��ҵ�ͷ��Զ����� 
	function DealserviceID($db,$cityId){
		if($cityId==7){		//����һ����ʱ���ܣ������ʱֻ��һ���ͷ�
			$serviceIDNext=251;
			return $serviceIDNext;	
		}else{
			//��ѯ���һ���ͷ���ID
		$sql="select serviceID,hotelserviceId from member_infor where  serviceID<>'0' and cityId='".$cityId."' order by id desc limit 1";
		$rs = $db->query($sql);
		$row=$db->fetch_array($rs);
		$serviceID = $row['serviceID'];
		
		$sql="select * from service_deal where yy='".date('Y',time())."' and mm='".date('m',time())."' and cityId='$cityId' and cType=4";//�ж��Ƿ��е��ݣ����򰴵��ݷ���
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					 $row = $db->fetch_array($rs);
					 $deal_info=$row[deal_info];
					 $deal_info_arr=explode('|',$deal_info);
					
					 foreach($deal_info_arr as $value)//���
					 {
						  $deal_info_temp=explode('-',$value);//��ȡ������ֵ  1-19,23,24,39
						  $arr_service1[$deal_info_temp[0]]=$deal_info_temp[1];
					 }
					
					 if($arr_service1[intval(date('d',time()))]!=0)
					 {
						 $arr_service=explode(',',$arr_service1[intval(date('d',time()))]);//��ȡ����ͷ��������
						 $i=count($arr_service);
					 }
				}
				if($arr_service1[intval(date('d',time()))]==0)//�������û�пͷ����䣬Ĭ�Ϸ���ȫ���ͷ�
				{
					$sql="select id from member_service where cityId='".$cityId."' and cType='0' and id not in(9,202,229,230,236,237,238,239,253,7,240,253,269,270,271,272) order by id asc";
					$rs=$db->query($sql);
					$totalAnnounce=$db->num_rows($rs);
					if($totalAnnounce){
						$i=0;
						while($row = $db->fetch_array($rs)){
							$arr_service[$i]=$row[id];//��ȡ���пͷ�ID
							$i++;
						}
					}
				}
				if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
					foreach($arr_service as $key => $value){
						if($arr_service[$key]<=$serviceID && $arr_service[$key+1]>$serviceID){	
								$serviceIDNext=$arr_service[$key+1];
						}
					}
				}else{				//����Ǹ��Ͽͷ�ϵͳ��֮ǰû�ж�������ͷ����ͷ���ͷ����һ���ͷ����ö���
					$serviceIDNext=$arr_service[0];
				}	
				if(!$serviceIDNext){
					$serviceIDNext=$arr_service[0];
				}
				
				return $serviceIDNext;
				//$errMsg=$serviceID;
				//break;
		}
		
		//�ж�����---> ��ֱ�Ӱѻ�ԱID ����UV��  ��---> ���жϵ�ǰʱ����ϴ�ԤԼʱ������ǲ���һ����
	}	
	/*
//�Ƶ��Զ�����ͷ�
function hotelServiceDeal($db,$cityId,$mobilePhone,$ctype){
		//�����һ��ԤԼ��������Ŀͷ�id
			$isOneOrder=false;
			if($ctype=='1'){//�ж��Ƿ��ǾƵ���ҵ 
				$comm="CompanyType='1'";
			}
			$sql = "select serviceID from customer_orderrecord where MobilePhone = '".$mobilePhone."' and $comm order by ID desc limit 1";			
			$rs = $db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			if ($totalAnnounce) {				//���֮ǰ��ԤԼ��
				$row = $db->fetch_array($rs);
				$serviceID=$row[serviceID];
				if($serviceID==0){
					$isOneOrder=true;
				}
			}else{								//֮ǰûԤԼ��
				$isOneOrder=true;
			}
		
			//���ԤԼ���������һ��
			if($isOneOrder){	
				$sql="select a.serviceID from customer_orderrecord as a,member_service as b where a.$comm and b.cType='$ctype' and a.serviceID=b.id and b.cityId='".$cityId."' order by a.id desc limit 1";
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					$row = $db->fetch_array($rs);
					$serviceID=$row[serviceID];
				}								
				
				if(!$serviceID){
					$serviceID=0;
				}
				
				$sql="select * from service_deal where yy='".date('Y',time())."' and mm='".date('m',time())."' and cityId='$cityId'";//�ж��Ƿ��е��ݣ����򰴵��ݷ���
				$rs=$db->query($sql);
				$totalAnnounce=$db->num_rows($rs);
				if($totalAnnounce){
					 $row = $db->fetch_array($rs);
					 $deal_info=$row[deal_info];
					 $deal_info_arr=explode('|',$deal_info);
					
					 foreach($deal_info_arr as $value)//���
					 {
						  $deal_info_temp=explode('-',$value);//��ȡ������ֵ
						  $arr_service1[$deal_info_temp[0]]=$deal_info_temp[1];
					 }
					
					 if($arr_service1[date('d',time())]!=0)
					 {
						 $arr_service=explode(',',$arr_service1[date('d',time())]);//��ȡ����ͷ��������
						 $i=count($arr_service);
					 }
				}
				if($arr_service1[date('d',time())]==0)//�������û�пͷ����䣬Ĭ�Ϸ���ȫ���ͷ�
				{
					$sql="select id from member_service where cityId='".$cityId."' and cType='$ctype' order by id asc";
					$rs=$db->query($sql);
					$totalAnnounce=$db->num_rows($rs);
					if($totalAnnounce){
						$i=0;
						while($row = $db->fetch_array($rs)){
							$arr_service[$i]=$row[id];//��ȡ���пͷ�ID
							$i++;
						}
					}
				}
				
				if($serviceID){			//���������һ�������Ŀͷ�����ѭ������¸�һ�ͷ�
					foreach($arr_service as $key => $value){
						if($arr_service[$key]<=$serviceID && $arr_service[$key+1]>$serviceID){	
								$serviceIDNext=$arr_service[$key+1];
						}
					}
				}else{				//����Ǹ��Ͽͷ�ϵͳ��֮ǰû�ж�������ͷ����ͷ���ͷ����һ���ͷ����ö���
					$serviceIDNext=$arr_service[0];
				}		
				
				if(!$serviceIDNext){
					$serviceIDNext=$arr_service[0];
				}
				
				return $serviceIDNext;
				//$errMsg=$serviceID;
				//break;
			}
	}	*/
	
	
	
	/*��������*/
	function encode($txt, $len = 9 ,$key = 'yrtnes'){
		if ($len > 36)
			return '';
		$len--;
		$ikey ='sentry';        
		$chars = "R1WO7CVDLNGHB6XEI3MZ2JKP4A5QTF0YS89U";
		$txt = strtoupper(str_replace('/[\W_]/','',$txt)); 
		$txt = substr($txt,0,$len);
		$strlen = strlen($txt);
		$i = 0;$knum = 0;$snum = 0;
		while(isset($txt[$i])) $snum +=ord($txt[$i++]);
		if ($strlen == $len)
			$mlen = $snum % (36 - $strlen) + $strlen;
		else
			$mlen = $strlen;
		
		$i = 0;
		while(isset($key[$i])) $knum +=ord($key[$i++]);
		
		$knum = $knum % 36; 
		$knum = ($knum + $mlen)%36;
		$ch = $chars[$knum]; 
		
		$suffix = '';
		if ($strlen < $len)
			$suffix = strtoupper(substr(md5($txt.$key .$strlen).md5($txt),0, $len - $strlen));
					
		$mdKey = md5($key . $ch . $ikey .$len);
		
		$tmp = '';
		$i=0;$j=0;$k = 0;
		while(isset($txt[$i])){
			$k = $k == strlen($mdKey) ? 0 : $k;
			$j = ($knum + strpos($chars, $txt[$i++]) + ord($mdKey[$k++]))%36;
			$tmp .= $chars[$j];
		}
		$tmp = $suffix . $tmp;
		$tmp = substr($tmp,0,floor($len/3)) .$ch .substr($tmp,floor($len/3)); 
		return $tmp;
	}
	//�ǻ�ԱԤԼ�����Ա��һ�������ظ�ԤԼ�Ĳ���¼ý��ID������һ���µ����¼ý��ID��
	function setMemberID($db,$mid,$cityId){
		$sql="select * from site_UniqueVisitor where cityId='$cityId' and Src='".$_COOKIE["tg_src"]."' and date='".date('Y-m-d',time())."'";
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		if($totalAnnounce){
		
			$row = $db->fetch_array($rs);
			$id=$row[id];
			if($row[membersID]){
				$membersID=$row[membersID].','.$mid;
			}else{
				$membersID=$mid;
			}
			if($row[type]){
				
				if($_COOKIE["tg_type"]==""){
					if($cityId==1){
						$type=$row[type].','."450";	
					}else{
						$type=$row[type].','.$_COOKIE["tg_type"];	
					}
				}else{
					$type=$row[type].','.$_COOKIE["tg_type"];	
				}
			}else{
				if($_COOKIE["tg_type"]==""){
					if($cityId==1){
						$type="450";	
					}else{
						$type=$_COOKIE["tg_type"];	
					}
				}else{
					$type=$_COOKIE["tg_type"];
				}
				
			}
			$sql="update site_UniqueVisitor set membersID='$membersID',type='$type' where id='$id'";
			$rs=$db->query($sql);
		}
	}
	
	/*���룬����֮����ַ����Ǵ�д��ĸ������*/
	function decode($txt,$key = 'yrtnes'){
		$ikey = 'sentry';
			
		$chars = "R1WO7CVDLNGHB6XEI3MZ2JKP4A5QTF0YS89U";
		$len = strlen($txt) -1;
		$id = floor($len/3);
		$ch = $txt[$id];
		$txt = substr($txt,0,$id) . substr($txt,$id + 1);
		$num = strpos($chars,$ch);
		$knum = 0; $i = 0;
		while(isset($key[$i])) $knum +=ord($key[$i++]);
		$knum = $knum % 36; 
		
		$mlen = $num - $knum;
		while ($mlen < 0) $mlen += 36;
		if ($mlen < $len){
		   $txt = substr($txt,$len - $mlen);
		}
		
		$mdKey = md5($key . $ch . $ikey .$len);
		
		$tmp = '';
		$i=0;$j=0; $k = 0;
		while(isset($txt[$i])){
			$k = $k == strlen($mdKey) ? 0 : $k;
			$j = strpos($chars, $txt[$i++])- $num  - ord($mdKey[$k++]);
			while ($j<0) $j +=36;
			$tmp .= $chars[$j];
		}
		return trim($tmp);
	}	
	function setUniqueVisitor($db,$phone,$cityId,$src,$item){
			if(!isset($_COOKIE["UniqueVisitor"])){
			setcookie("UniqueVisitor",0,time()+3600*24);
			$_COOKIE["UniqueVisitor"]=0;
			
			$sql="select * from site_UniqueVisitor where cityId='$cityId' and Src='$src' and date='".date('Y-m-d',time())."'";
			$rs=$db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			$row = $db->fetch_array($rs);
			if($row[type]){
			
				$i=strpos($row['type'],$item);
				
				if($i){
					$type=$row[type];
				}else{
					$type=$row[type].','.$item;
				}
			}else{
				$type=$item;
			}
			if($phone)
			{
				$sql="select id from member_infor where Mobile=".$phone;
				$rs=$db->query($sql);
				$row = $db->fetch_array($rs);
				
				$a=strpos($row[membersID],$row[id]);
				if($a){
					$memberID=$row[membersID];
				}else{
					$memberID=$row[membersID].','.$row[id];
				}
				
			}else{
				$memberID= ',';
			}
			if($totalAnnounce){
				
				$sql1="update site_UniqueVisitor set nums=nums+1,type='$type',membersID='$memberID' where date='".date('Y-m-d',time())."' and Src='$src'";
			
				$rs=$db->query($sql1);
			}else{
				$sql1="insert into site_UniqueVisitor(cityId,Src,nums,date,type,membersID) values($cityId,'$src',1,'".date('Y-m-d',time())."','$type','$memberID')";
				$rs=$db->query($sql1);
			}		
		}
		}
		
		
//����&����
 function authcode($string,$operation,$key = '') {

 $key = md5($key);
 $key_length = strlen($key);
 
 $string = base64_decode($string);
 $string_length = strlen($string);

 $rndkey = $box = array();
 $result = '';

 for($i = 0; $i <= 255; $i++) {
  $rndkey[$i] = ord($key[$i % $key_length]);
  $box[$i] = $i;
 }

 for($j = $i = 0; $i < 256; $i++) {
  $j = ($j + $box[$i] + $rndkey[$i]) % 256;
  $tmp = $box[$i];
  $box[$i] = $box[$j];
  $box[$j] = $tmp;
 }

 for($a = $j = $i = 0; $i < $string_length; $i++) {
  $a = ($a + 1) % 256;
  $j = ($j + $box[$a]) % 256;
  $tmp = $box[$a];
  $box[$a] = $box[$j];
  $box[$j] = $tmp;
  $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
 }
  
 return str_replace('=', '', base64_encode($result));
 

}
function SMS_counter($db,$cityId){
		if(!$cityId){
			$cityId=0;
		}else{
			$cityId=(int)$cityId;		
		}	
			$y=date('Y');
			$m=date('m');
		
			$thisday=$y."-".$m."-01";
			$sql='select * from sms_counter where cityId ='.$cityId.' and SubTime="'.$thisday.'" order by Count desc limit 1';
		
				//insert into sms_counter (cityId,SubTime,Count) values(1,2013-07-01,1)
			$rs=$db->query($sql);
			$totalAnnounce=$db->num_rows($rs);
			if($totalAnnounce){
				$row=$db->fetch_array($rs);
				$Count=$row["Count"];
				$id=$row["id"];
				$Count_=$Count+1;
				$sql1= 'update sms_counter set Count ='.$Count_.' where id='.$id;
				$db->query($sql1);
			}else{	
				$sql1="insert into sms_counter (cityId,SubTime,Count) values ($cityId,'".$thisday."',1)";
				$db->query($sql1);
			
			}
	}	
//ʡ��֤���ܽ���
class enstr{
	public function enstrhex($str,$key){/*?���������㷨/?*/
		$td=mcrypt_module_open('twofish','','ecb','');/*?����?IV�������?key?�ĳ���?*/
		$iv=mcrypt_create_iv(mcrypt_enc_get_iv_size($td),MCRYPT_RAND);
		$ks=mcrypt_enc_get_key_size($td);/*?����?key?*/
		$keystr=substr(md5($key),0,$ks);/*?��ʼ�����ܳ���?*/
		mcrypt_generic_init($td,$keystr,$iv);
		/*?����,?$encrypted?��������Ѿ����ܺ������?*/
		$encrypted=mcrypt_generic($td,$str);/*?�����ܾ�������ر�ģ��?*/
		mcrypt_module_close($td);/*?ת��Ϊ16����?*/
		$hexdata=bin2hex($encrypted);//����?
		return $hexdata;}
	public function destrhex($str,$key){/*?���������㷨/?*/
		$td=mcrypt_module_open('twofish','','ecb','');/*?����?IV�������?key?�ĳ���?*/
		$iv=mcrypt_create_iv(mcrypt_enc_get_iv_size($td),MCRYPT_RAND);
		$ks=mcrypt_enc_get_key_size($td);/*?����?key?*/
		$keystr=substr(md5($key),0,$ks);/*?��ʼ������ģ�飬���Խ���?*/
		mcrypt_generic_init($td,$keystr,$iv);/*?����?*/
		$encrypted=pack("H*",$str); 
		$decrypted=mdecrypt_generic($td, $encrypted); /*?�����ܾ�������ر�ģ��?*/
		mcrypt_generic_deinit($td);mcrypt_module_close($td);/*?����ԭʼ�ַ���?*/
		return $decrypted; 
}
}
//����sqlע��
function filter_data($data){
	$data=str_replace("'","",$data);
	$data=str_replace("\"","",$data);
	$data=str_replace("=","",$data);
	$data=str_replace(" ","",$data);
	$data=str_replace("(","",$data);
	$data=str_replace(")","",$data);
	$data=str_replace(">","",$data);
	$data=str_replace("<","",$data);
	$data=str_replace("$","",$data);
	$data=str_ireplace("or","",$data);
	$data=str_ireplace("and","",$data);
	$data=str_replace("*","",$data);
	$data=str_ireplace("update","",$data);
	$data=str_ireplace("select","",$data);
	$data=str_ireplace("delete","",$data);
	$data=str_ireplace("insert","",$data);
	$data=str_ireplace("script","",$data);
	$data=str_ireplace("location","",$data);
		$data=str_ireplace(",alert","",$data);
	$data=str_ireplace("alert","",$data);
	$data=str_replace("/","",$data);
	$data=str_replace("`","",$data);
	$data=str_ireplace("passwd","",$data);
	$data=str_ireplace("etc","",$data);
	$data=str_ireplace("file","",$data);
	$data=str_ireplace("char_length","",$data);
	$data=str_ireplace("union","",$data);
	$data=str_ireplace("null","",$data);
	return $data;
	
}
//2012-11-03-ˮˮ  ����post��get��cookie����sqlע�뼰��վ����
function AccessErrorAndGL(){
	$getfilter="'|(and|or)\\b.+?(>|<|=|in|like)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
	$postfilter="\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
	/*$cookiefilter="\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";*/
	
	foreach($_GET as $key=>$value){ 
		StopAttack($key,$value,$getfilter);
	}
	foreach($_POST as $key=>$value){ 
		if($key!='link_kf'){
		StopAttack($key,$value,$postfilter);
		}
	}
	/*foreach($_COOKIE as $key=>$value){ 
		StopAttack($key,$value,$cookiefilter);
	}*/
	
}
function slog($logs)
{
  $toppath=$_SERVER["DOCUMENT_ROOT"]."/errorAcess.htm";
  $Ts=fopen($toppath,"a+");
  fputs($Ts,$logs."\r\n");
  fclose($Ts);
}
function StopAttack($StrFiltKey,$StrFiltValue,$ArrFiltReq){  
	if(is_array($StrFiltValue))
	{
		$StrFiltValue=implode($StrFiltValue);
	}  
	if (preg_match("/".$ArrFiltReq."/is",$StrFiltValue)==1){   
		slog("<br><br>����IP: ".$_SERVER["REMOTE_ADDR"]."<br>����ʱ��: ".strftime("%Y-%m-%d %H:%M:%S")."<br>����ҳ��:".$_SERVER["PHP_SELF"]."<br>�ύ��ʽ: ".$_SERVER["REQUEST_METHOD"]."<br>�ύ����: ".$StrFiltKey."<br>�ύ����: ".$StrFiltValue);
		echo "��վ���ʳ���<a href='http://www.591wed.com' style='color:#000'>�뷵����ҳ</a>";
		exit();
	}      
}
function HSLJ_code($mob)
{
	if(is_numeric($mob) and strlen($mob)>8){
		$mob=($mob+138756942)*2+31313111311;
		$mob_1=substr($mob,0,2)+1;
		$mob_2=substr($mob,-2);
		$len=strlen($mob)-4;
		if($len>0){$mob_3=substr($mob,2,$len);}
		$mob=$mob_1.$mob_2.$mob_3;
		return $mob;
	}else{
		return $mob;
	}
}
function unHSLJ_code($mob)
{
	if(is_numeric($mob) and strlen($mob)>8 and $mob>19000000000){
		
		$mob_1=substr($mob,0,2)-1;
		$mob_2=substr($mob,2,2);
		$len=strlen($mob)-4;
		if($len>0){$mob_3=substr($mob,-$len);}
		$mob=$mob_1.$mob_3.$mob_2;
		$mob=($mob-31313111311)/2-138756942;
		return $mob;
	}else{
		return $mob;
	}
}
function loginLOG($u,$city,$err)
{
	if($err){$err='ʧ��';}else{$err='�ɹ�';}
  $logs="<br><br>��½IP: ".$_SERVER["REMOTE_ADDR"]."<br>��½ʱ��: ".strftime("%Y-%m-%d %H:%M:%S")."<br>��½ҳ��:".$_SERVER["PHP_SELF"]."<br>��½�û�: ".$u."<br>��½����:".$city."    ".$err;
  $toppath=$_SERVER["DOCUMENT_ROOT"]."/loginLOGcar.htm";
  $Ts=fopen($toppath,"a+");
  fputs($Ts,$logs."\r\n");
  fclose($Ts);
}	
AccessErrorAndGL();	
?>