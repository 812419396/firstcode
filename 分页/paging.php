<?php
/**
*Promgram:ʵ�ַ�ҳЧ��
*Date:2017.1.20
*@author:Z
*@version:1.0
*/

//���ݿ�����
@mysql_connect("localhost","root","")or die("���ݿ�����ʧ��:".mysql_error());
mysql_select_db("guestbook");
mysql_query("set character set 'gbk'");

//ÿҳ��ʾ��������
$pagesize=4;

//ȷ��ҳ��p����
$p = $_GET['p']?$_GET['p']:1;

//����ָ��
$offset = ($p-1)*$pagesize;

//��ѯ��ҳ��ʾ������
$query_sql="SELECT * FROM guestbook ORDER BY id DESC LIMIT $offset,$pagesize";
$result=mysql_query($query_sql);

while($gblist=mysql_fetch_array($result)){
	echo '<a href="',$gblist[nickname],'">',$gblist[nickname],'</a> ';
	echo '������:',date("Y-m-d H:i",$gblist[createtime]),'<br/>';
	echo '����:',$gblist[content],'<br/><hr/>';
}


//��ҳ����

//������������
$count_result=mysql_query("SELECT count(*) as count FROM guestbook");
$count_array=mysql_fetch_array($count_result);

//�����ܵ�ҳ��
$pagenum=ceil($count_array['count']/$pagesize);
echo '��',$count_array['count'],' ������';

//ѭ�������ҳ��������
if($pagenum>1){
	for($i=1;$i<=$pagenum;$i++){
		if($i==$p){
			echo ' [',$i,']';
		}else{
			echo ' <a href="paging.php?p=',$i,'">',$i,'</a>';	
		}	
	}
}



?>