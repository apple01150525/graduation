<?php
require("../../../class/connect.php");
require("../../../class/q_functions.php");
require("../../../class/db_sql.php");
require("../../class/user.php");
require('../../class/friendfun.php');
$link=db_connect();
$empire=new mysqlquery();
$editor=2;
$ecmsreurl=1;
eCheckCloseMods('member');//�ر�ģ��
$user=islogin();
$a="";
$cid=(int)$_GET['cid'];
if($cid)
{
	$a=" and cid=$cid";
}
$query="select fname from {$dbtbpre}enewshy where userid='$user[userid]'".$a." order by fid";
$sql=$empire->query($query);
$hyselect='';
while($r=$empire->fetch($sql))
{
	$hyselect.="<option value='".$r['fname']."'>".$r['fname']."</option>";
}
//����
$select=ReturnFriendclass($user[userid],$cid);
$fm=RepPostVar($_GET['fm']);
$f=RepPostVar($_GET['f']);
$addvar="fm=".$fm."&f=".$f;
//����ģ��
require(ECMS_PATH.'e/template/member/ChangeFriend.php');
db_close();
$empire=null;
?>