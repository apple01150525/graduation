<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require "../".LoadLang("pub/fun.php");
require("../class/user.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//�ر�ģ��
$user=islogin();
$addr=$empire->fetch1("select spacestyleid from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
if(empty($addr[spacestyleid]))
{
	$addr[spacestyleid]=$public_r['defspacestyleid'];
}
//��ҳ
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=16;//ÿҳ��ʾ����
$page_line=10;//ÿҳ��ʾ������
$offset=$page*$line;//��ƫ����
$query="select styleid,stylename,stylepic,stylesay,isdefault from {$dbtbpre}enewsspacestyle where membergroup='' or (membergroup<>'' and membergroup like '%,".$user[groupid].",%')";
$totalquery="select count(*) as total from {$dbtbpre}enewsspacestyle where membergroup='' or (membergroup<>'' and membergroup like '%,".$user[groupid].",%')";
$num=$empire->gettotal($totalquery);//ȡ��������
$query.=" order by styleid limit $offset,$line";
$returnpage=page1($num,$line,$page_line,$start,$page,$search);
//����ģ��
require(ECMS_PATH.'e/template/member/mspace/ChangeStyle.php');
db_close();
$empire=null;
?>