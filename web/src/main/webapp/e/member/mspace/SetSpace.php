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
$addr=$empire->fetch1("select spacename,spacegg from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
//����ģ��
require(ECMS_PATH.'e/template/member/mspace/SetSpace.php');
db_close();
$empire=null;
?>