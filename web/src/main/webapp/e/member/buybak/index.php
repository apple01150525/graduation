<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require("../class/user.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//�ر�ģ��
//�Ƿ��½
$user=islogin();
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=25;//ÿҳ��ʾ����
$page_line=10;//ÿҳ��ʾ������
$offset=$page*$line;//��ƫ����
$totalquery="select count(*) as total from {$dbtbpre}enewsbuybak where userid='$user[userid]'";
$num=$empire->gettotal($totalquery);//ȡ��������
$query="select * from {$dbtbpre}enewsbuybak where userid='$user[userid]'";
$query=$query." order by buytime desc limit $offset,$line";
$sql=$empire->query($query);
$returnpage=page1($num,$line,$page_line,$start,$page,$search);
//����ģ��
require(ECMS_PATH.'e/template/member/buybak.php');
db_close();
$empire=null;
?>