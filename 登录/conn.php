<?php
/**
*Promgram:���ݿ����Ӱ����ļ�
*Date:2017-02-13
*@author:Z
*@version:1.0
**/

$conn=@mysql_connect("localhost","root","");
if(!$conn){
	die("���ݿ�����ʧ�ܣ�".mysql_error());
}
mysql_select_db("first_code",$conn);

//�ַ�ת��������
mysql_query("set character set 'gbk' ");
//д��
mysql_query("set names 'gbk'");

?>