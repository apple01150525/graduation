<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../class/user.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//�ر�ģ��
$user=islogin();
$r=ReturnUserInfo($user[userid]);
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
$formid=GetMemberFormId($user[groupid]);
$formfile='../../data/html/memberform'.$formid.'.php';
//����ģ��
require(ECMS_PATH.'e/template/member/EditInfo.php');
db_close();
$empire=null;
?>