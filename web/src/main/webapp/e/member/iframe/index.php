<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('member');//�ر�ģ��
$myuserid=(int)getcvar('mluserid');
$mhavelogin=0;
if($myuserid)
{
	include("../../class/db_sql.php");
	include("../../member/class/user.php");
	include("../../data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$mhavelogin=1;
	//����
	$myusername=RepPostVar(getcvar('mlusername'));
	$myrnd=RepPostVar(getcvar('mlrnd'));
	$r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
	if(empty($r[userid])||$r[checked]==0)
	{
		EmptyEcmsCookie();
		$mhavelogin=0;
	}
	//��Ա�ȼ�
	if(empty($r[groupid]))
	{$groupid=eReturnMemberDefGroupid();}
	else
	{$groupid=$r[groupid];}
	$groupname=$level_r[$groupid]['groupname'];
	//����
	$userfen=$r[userfen];
	//���
	$money=$r[money];
	//����
	$userdate=0;
	if($r[userdate])
	{
		$userdate=$r[userdate]-time();
		if($userdate<=0)
		{$userdate=0;}
		else
		{$userdate=round($userdate/(24*3600));}
	}
	//�Ƿ��ж���Ϣ
	$havemsg="";
	if($r[havemsg])
	{
		$havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>��������Ϣ</font></a>";
	}
	//$myusername=$r[username];
	db_close();
	$empire=null;
}
if($mhavelogin==1)
{
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��½</title>
<LINK href="../../data/images/qcss.css" rel=stylesheet>
</head>
<body bgcolor="#ededed" topmargin="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
	<td height="23" align="center">
	<div align="left">
		&raquo;&nbsp;<font color=red><b><?=$myusername?></b></font>&nbsp;&nbsp;<a href="../my/" target="_parent"><?=$groupname?></a>&nbsp;<?=$havemsg?>&nbsp;<a href="/e/space/?userid=<?=$myuserid?>" target=_blank>�ҵĿռ�</a>&nbsp;&nbsp;<a href="../msg/" target=_blank>����Ϣ</a>&nbsp;&nbsp;<a href="../fava/" target=_blank>�ղؼ�</a>&nbsp;&nbsp;<a href="../cp/" target="_parent">�������</a>&nbsp;&nbsp;<a href="../../member/doaction.php?enews=exit&prtype=9" onclick="return confirm('ȷ��Ҫ�˳�?');">�˳�</a> 
	</div>
	</td>
    </tr>
</table>
</body>
</html>
<?
}
else
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��½</title>
<LINK href="../../data/images/qcss.css" rel=stylesheet>
</head>
<body bgcolor="#ededed" topmargin="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <form name=login method=post action="../../member/doaction.php">
    <input type=hidden name=enews value=login>
    <input type=hidden name=prtype value=1>
    <tr> 
      <td height="23" align="center">
      <div align="left">
      �û�����<input name="username" type="text" size="8">&nbsp;
      ���룺<input name="password" type="password" size="8">
      <select name="lifetime" id="lifetime">
         <option value="0">������</option>
         <option value="3600">һСʱ</option>
         <option value="86400">һ��</option>
         <option value="2592000">һ����</option>
         <option value="315360000">����</option>
      </select>&nbsp;
      <input type="submit" name="Submit" value="��½">&nbsp;
      <input type="button" name="Submit2" value="ע��" onclick="window.open('../register/');">
      </div>
      </td>
    </tr>
  </form>
</table>
</body>
</html>

<?
}
?>