<?php
/**
*Promgram:数据库连接包含文件
*Date:2017-02-13
*@author:Z
*@version:1.0
**/

$conn=@mysql_connect("localhost","root","");
if(!$conn){
	die("数据库连接失败：".mysql_error());
}
mysql_select_db("first_code",$conn);

//字符转换，读库
mysql_query("set character set 'gbk' ");
//写库
mysql_query("set names 'gbk'");

?>