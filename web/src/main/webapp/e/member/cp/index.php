<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require("../class/user.php");
require("../../data/dbcache/MemberLevel.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//�ر�ģ��
//�Ƿ��½
$user=islogin();
$r=ReturnUserInfo($user[userid]);
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='".$user[userid]."' limit 1");
//ͷ��
$userpic=$addr['userpic']?$addr['userpic']:$public_r[newsurl].'e/data/images/nouserpic.gif';
//��Ч��
$userdate=0;
if($r[userdate])
{
	$userdate=$r[userdate]-time();
	if($userdate<=0)
	{
		$userdate=0;
	}
	else
	{
		$userdate=round($userdate/(24*3600));
	}
}
//�Ƿ��ж���Ϣ
$havemsg="��";
if($user[havemsg])
{
	$havemsg="<a href='".$public_r['newsurl']."e/member/msg' target=_blank><font color=red>��������Ϣ</font></a>";
}
//ע��ʱ��
$registertime=eReturnMemberRegtime($r['registertime'],"Y-m-d H:i:s");
//����ģ��
require(ECMS_PATH.'e/template/member/cp.php');
db_close();
$empire=null;
?>