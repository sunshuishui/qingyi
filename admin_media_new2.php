<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';
include './_include/public.class.php';
	
	 $Report=date("Y-m-d H:i:s:m");
			 error_reporting(0);  //屏蔽警告和NOTICE等所有提示.包括error
			 Header( "Content-type:   application/octet-stream "); 
			 Header( "Accept-Ranges:   bytes "); 
			 Header( "Content-type:application/vnd.ms-excel;charset=GB2312"); //此处写编码,如,UTF-8....
			 Header( "Content-Disposition:attachment;filename=$Report.xls ");  //自己写文件名 *.xls
			 
	
	
	
 if(filter_data($_GET['h2o2'])=='h2o2'){
 	$sql="SELECT * FROM site_tuangou_sz";}
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		echo "<table width='100%' border='0' align='left' >";
		
		echo"<tr style='font-weight:bold' >";
		echo "<td width='80'  > <font size=4 > ID </font></td>";
		echo "<td width='120' > <font size=4>新郎姓名 </font></td><td width='120' > <font size=4>新娘姓名 </font></td>";
		if($site_cityId==10){
		echo "<td width='80' > <font size=4>门票数</font></td>";	
		}
		echo "<td width='80' > <font size=4>性别</font></td>";
		echo "<td width='120' > <font size=4>婚期 </font></td>";
		echo "<td width='200' > <font size=4>手机号码 </font></td>";
		echo "<td width='200' > <font size=4>另一方号码 </font></td>";  
		echo "<td width='580' > <font size=4>地址 </font></td><td width='120' > <font size=4>邮编 </font></td><td width='200' > <font size=4>邮箱 </font></td>";
		echo "<td width='100' > <font size=4>认证状态 </font></td>";
		echo "<td width='100' > <font size=4>快递时间 </font></td>";
		echo "<td width='150' > <font size=4>是否需要快递 </font></td>";
		echo "<td width='150' > <font size=4>认证次数 </font></td>";
		echo "<td width='100' > <font size=4>来源媒体 </font></td>";
		echo "<td  width='120'> <font size=4>关键字 </font></td>";
		echo "<td width='80' > <font size=4>需求 </font></td>";
		echo "<td width='80' > <font size=4>备注 </font></td>";
		echo "<td width='80' > <font size=4>到场 </font></td>";
		echo "<td width='80' > <font size=4>订单 </font></td>";
		echo "<td width='120' > <font size=4>第一次客服 </font></td>";
		echo "<td width='120' > <font size=4>临时客服 </font></td>";
		echo "<td width='80' > <font size=4>分享 </font></td>";
		if($site_cityId<>10){
		echo "<td width='80' > <font size=4>勾选婚宴 </font></td>";
		}
		echo "<td width='260' > <font size=4>提交时间 </font> </td>";
		echo "<td width='150' > <font size=4>是否确定到场 </font> </td>";
		echo "<td width='150' > <font size=4>是否学生报名 </font> </td>";
		echo "<td width='150' > <font size=4>IP地址 </font> </td>";
		
		echo "</tr>";
		while ($row = $db->fetch_array($rs)){
			$pnoro = explode(",", $row['Pname']);
			$emoro = explode(",", $row['email']);
		   echo "<tr align='left'>";
			echo "<td >   {$row['id']}</td>";   //用width 控制表格的宽度.自己改变.
			echo "<td > {$pnoro['0']}</td><td > {$pnoro['1']}</td>";
			if($site_cityId==10){
			echo "<td  > <font size=4>{$row['Survey']}</font></td>";	
			}
			echo "<td > {$pnoro['2']}</td>";
			echo "<td >   {$row['marryDate']}</td>";
			echo "<td >   ".unHSLJ_code($row['phone'])."</td>";
			echo "<td > ".unHSLJ_code($row['otherMobile'])." </td>";
			echo "<td >   {$emoro['0']} </td><td >   {$emoro['1']} </td><td >   {$emoro['2']} </td>";
			echo "<td >";if($row['IsDel']==0){echo "等待认证";}else if($row['IsDel']==1){echo"已删除";}else if($row['IsDel']==2){echo "认证成功A";}else if($row['IsDel']==3){echo "认证失败";}else if($row['IsDel']==4){echo "认证成功B";}else if($row['IsDel']==5){echo "认证成功C";}else if($row['IsDel']==6){echo "认证成功D";}else if($row['IsDel']==7){echo "等待审核";}else if($row['IsDel']=='allRight'){echo "认证成功";}echo"</td>";
			echo "<td >";if($row['express']==0){echo "未确定";}else if($row['express']==1){echo "工作日";}else if($row['express']==2){echo "双休日";}else if($row['express']==3){echo "任何一天";} echo"</td>";
			echo "<td >"; if($row['isNeedExpress']==0){echo "未选择";}else if($row['isNeedExpress']==1){echo "需要";}else if($row['isNeedExpress']==2){echo "不需要";}else if($row['isNeedExpress']==3){echo "代收";}echo "</td>";
			echo "<td >"; if($row['TwoProve']==0){echo "未通知";}if($row['TwoProve']==1){echo "1次电话";}if($row['TwoProve']==2){echo "2次电话";}if($row['TwoProve']==3){echo "已快递";}if($row['TwoProve']==4){echo "等待邀请";}if($row['TwoProve']==5){echo "邀请成功";}if($row['TwoProve']==6){echo "邀请失败";}echo "</td>";
			echo "<td >   {$row['FromSource']} </td>";
			echo "<td >   {$row['FromMediaItem']} </td>";
			echo "<td >   {$row['needs']} </td>";
			echo "<td >   {$row['failCause']} </td>";
			echo "<td >   {$row['isDaoChang']} </td>";
			echo "<td >   {$row['information']} </td>";
			echo "<td >   {$row['first_serviceID']} </td>";
			echo "<td >   {$row['serviceID']} </td>";
			echo "<td >   {$row['isShare']} </td>";
			if($site_cityId<>10){
			echo "<td  > <font size=4>{$row['Survey']}</font></td>";	
			}
			echo "<td >&nbsp;{$row['subtime']}&nbsp;</td>";
			echo "<td >"; if($row['isFrom']==0){echo "未选择";}else if($row['isFrom']==1){echo "确定来";}else if($row['isFrom']==2){echo "确定不来";}else if($row['isFrom']==3){echo "不确定";}echo "</td>";
			echo "<td >   {$row['signOfother']} </td>";
			echo "<td >   {$row['subip']} </td>";
			
			echo "</tr>";
		  }
		echo "</tbale>";



?>