<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';
include './_include/public.class.php';
	
	 $Report=date("Y-m-d H:i:s:m");
			 error_reporting(0);  //���ξ����NOTICE��������ʾ.����error
			 Header( "Content-type:   application/octet-stream "); 
			 Header( "Accept-Ranges:   bytes "); 
			 Header( "Content-type:application/vnd.ms-excel;charset=GB2312"); //�˴�д����,��,UTF-8....
			 Header( "Content-Disposition:attachment;filename=$Report.xls ");  //�Լ�д�ļ��� *.xls
			 
	
	
	
 if(filter_data($_GET['h2o2'])=='h2o2'){
 	$sql="SELECT * FROM site_tuangou_sz";}
		$rs=$db->query($sql);
		$totalAnnounce=$db->num_rows($rs);
		echo "<table width='100%' border='0' align='left' >";
		
		echo"<tr style='font-weight:bold' >";
		echo "<td width='80'  > <font size=4 > ID </font></td>";
		echo "<td width='120' > <font size=4>�������� </font></td><td width='120' > <font size=4>�������� </font></td>";
		if($site_cityId==10){
		echo "<td width='80' > <font size=4>��Ʊ��</font></td>";	
		}
		echo "<td width='80' > <font size=4>�Ա�</font></td>";
		echo "<td width='120' > <font size=4>���� </font></td>";
		echo "<td width='200' > <font size=4>�ֻ����� </font></td>";
		echo "<td width='200' > <font size=4>��һ������ </font></td>";  
		echo "<td width='580' > <font size=4>��ַ </font></td><td width='120' > <font size=4>�ʱ� </font></td><td width='200' > <font size=4>���� </font></td>";
		echo "<td width='100' > <font size=4>��֤״̬ </font></td>";
		echo "<td width='100' > <font size=4>���ʱ�� </font></td>";
		echo "<td width='150' > <font size=4>�Ƿ���Ҫ��� </font></td>";
		echo "<td width='150' > <font size=4>��֤���� </font></td>";
		echo "<td width='100' > <font size=4>��Դý�� </font></td>";
		echo "<td  width='120'> <font size=4>�ؼ��� </font></td>";
		echo "<td width='80' > <font size=4>���� </font></td>";
		echo "<td width='80' > <font size=4>��ע </font></td>";
		echo "<td width='80' > <font size=4>���� </font></td>";
		echo "<td width='80' > <font size=4>���� </font></td>";
		echo "<td width='120' > <font size=4>��һ�οͷ� </font></td>";
		echo "<td width='120' > <font size=4>��ʱ�ͷ� </font></td>";
		echo "<td width='80' > <font size=4>���� </font></td>";
		if($site_cityId<>10){
		echo "<td width='80' > <font size=4>��ѡ���� </font></td>";
		}
		echo "<td width='260' > <font size=4>�ύʱ�� </font> </td>";
		echo "<td width='150' > <font size=4>�Ƿ�ȷ������ </font> </td>";
		echo "<td width='150' > <font size=4>�Ƿ�ѧ������ </font> </td>";
		echo "<td width='150' > <font size=4>IP��ַ </font> </td>";
		
		echo "</tr>";
		while ($row = $db->fetch_array($rs)){
			$pnoro = explode(",", $row['Pname']);
			$emoro = explode(",", $row['email']);
		   echo "<tr align='left'>";
			echo "<td >   {$row['id']}</td>";   //��width ���Ʊ��Ŀ��.�Լ��ı�.
			echo "<td > {$pnoro['0']}</td><td > {$pnoro['1']}</td>";
			if($site_cityId==10){
			echo "<td  > <font size=4>{$row['Survey']}</font></td>";	
			}
			echo "<td > {$pnoro['2']}</td>";
			echo "<td >   {$row['marryDate']}</td>";
			echo "<td >   ".unHSLJ_code($row['phone'])."</td>";
			echo "<td > ".unHSLJ_code($row['otherMobile'])." </td>";
			echo "<td >   {$emoro['0']} </td><td >   {$emoro['1']} </td><td >   {$emoro['2']} </td>";
			echo "<td >";if($row['IsDel']==0){echo "�ȴ���֤";}else if($row['IsDel']==1){echo"��ɾ��";}else if($row['IsDel']==2){echo "��֤�ɹ�A";}else if($row['IsDel']==3){echo "��֤ʧ��";}else if($row['IsDel']==4){echo "��֤�ɹ�B";}else if($row['IsDel']==5){echo "��֤�ɹ�C";}else if($row['IsDel']==6){echo "��֤�ɹ�D";}else if($row['IsDel']==7){echo "�ȴ����";}else if($row['IsDel']=='allRight'){echo "��֤�ɹ�";}echo"</td>";
			echo "<td >";if($row['express']==0){echo "δȷ��";}else if($row['express']==1){echo "������";}else if($row['express']==2){echo "˫����";}else if($row['express']==3){echo "�κ�һ��";} echo"</td>";
			echo "<td >"; if($row['isNeedExpress']==0){echo "δѡ��";}else if($row['isNeedExpress']==1){echo "��Ҫ";}else if($row['isNeedExpress']==2){echo "����Ҫ";}else if($row['isNeedExpress']==3){echo "����";}echo "</td>";
			echo "<td >"; if($row['TwoProve']==0){echo "δ֪ͨ";}if($row['TwoProve']==1){echo "1�ε绰";}if($row['TwoProve']==2){echo "2�ε绰";}if($row['TwoProve']==3){echo "�ѿ��";}if($row['TwoProve']==4){echo "�ȴ�����";}if($row['TwoProve']==5){echo "����ɹ�";}if($row['TwoProve']==6){echo "����ʧ��";}echo "</td>";
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
			echo "<td >"; if($row['isFrom']==0){echo "δѡ��";}else if($row['isFrom']==1){echo "ȷ����";}else if($row['isFrom']==2){echo "ȷ������";}else if($row['isFrom']==3){echo "��ȷ��";}echo "</td>";
			echo "<td >   {$row['signOfother']} </td>";
			echo "<td >   {$row['subip']} </td>";
			
			echo "</tr>";
		  }
		echo "</tbale>";



?>