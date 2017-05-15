<?php
//�ύ����
function AddMemberFeedback($add){
	global $empire,$dbtbpre;
	//��֤��
	$keyvname='checkspacefbkey';
	ecmsCheckShowKey($keyvname,$add['key'],1);
	//�û�
	$userid=intval($add['userid']);
	$ur=$empire->fetch1("select ".egetmf('userid')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' limit 1");
	if(empty($ur['userid']))
	{
		printerror("NotUsername","",1);
	}
	//������
	$uid=(int)getcvar('mluserid');
	if($uid)
	{
		$uname=RepPostVar(getcvar('mlusername'));
	}
	else
	{
		$uid=0;
		$uname='';
	}
	$uname=RepPostStr($uname);
	$name=RepPostStr($add['name']);
	$company=RepPostStr($add['company']);
	$phone=RepPostStr($add['phone']);
	$fax=RepPostStr($add['fax']);
	$email=RepPostStr($add['email']);
	$address=RepPostStr($add['address']);
	$zip=RepPostStr($add['zip']);
	$title=RepPostStr($add['title']);
	$ftext=RepPostStr($add['ftext']);
	if(!trim($name)||!trim($title)||!trim($ftext))
	{
		printerror("EmptyMemberFeedback","history.go(-1)",1);
    }
	$addtime=date("Y-m-d H:i:s");
	$ip=egetip();
	$eipport=egetipport();
	$sql=$empire->query("insert into {$dbtbpre}enewsmemberfeedback(name,company,phone,fax,email,address,zip,title,ftext,userid,ip,uid,uname,addtime,eipport) values('$name','$company','$phone','$fax','$email','$address','$zip','$title','$ftext',$userid,'$ip',$uid,'$uname','$addtime','$eipport');");
	ecmsEmptyShowKey($keyvname);//�����֤��
	if($sql)
	{
		printerror("AddMemberFeedbackSuccess",$_SERVER['HTTP_REFERER'],1);
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}

//ɾ������
function DelMemberFeedback($add){
	global $empire,$dbtbpre;
	$user_r=islogin();//�Ƿ��½
	$fid=intval($add['fid']);
	if(!$fid)
	{
		printerror("NotDelMemberFeedbackid","history.go(-1)",1);
	}
	$sql=$empire->query("delete from {$dbtbpre}enewsmemberfeedback where fid='$fid' and userid='$user_r[userid]'");
	if($sql)
	{
		printerror("DelMemberFeedbackSuccess",$_SERVER['HTTP_REFERER'],1);
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}

//����ɾ������
function DelMemberFeedback_All($add){
	global $empire,$dbtbpre;
	$user_r=islogin();//�Ƿ��½
	$fid=$add['fid'];
	$count=count($fid);
	if(empty($count))
	{
		printerror("NotDelMemberFeedbackid","history.go(-1)",1);
	}
	for($i=0;$i<$count;$i++)
	{
		$addsql.="fid='".intval($fid[$i])."' or ";
    }
	$addsql=substr($addsql,0,strlen($addsql)-4);
	$sql=$empire->query("delete from {$dbtbpre}enewsmemberfeedback where (".$addsql.") and userid='$user_r[userid]'");
	if($sql)
	{
		printerror("DelMemberFeedbackSuccess",$_SERVER['HTTP_REFERER'],1);
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}
?>