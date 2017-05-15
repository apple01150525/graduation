<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('InEmpireCMSUser',TRUE);

//--------------- ��չ���� ---------------

//��¼����cookie
function AddLoginCookie($r){
}

//--------------- ��Ա����Ϣ���� ---------------

//���ػ�Ա��
function eReturnMemberTable(){
	global $ecms_config;
	return $ecms_config['member']['tablename'];
}

//����Ĭ�ϻ�Ա��ID
function eReturnMemberDefGroupid(){
	global $ecms_config,$public_r;
	$groupid=$ecms_config['member']['defgroupid']?$ecms_config['member']['defgroupid']:$public_r['defaultgroupid'];
	return intval($groupid);
}

//���ز�ѯ��Ա�ֶ��б�
function eReturnSelectMemberF($f,$tb=''){
	global $ecms_config;
	if(empty($ecms_config['member']['chmember']))
	{
		if(!empty($tb))
		{
			$f=$f=='*'?$tb.$f:$tb.str_replace(',',','.$tb,$f);
		}
		return $f;
	}
	if($f=='*')
	{
		$f='userid,username,password,rnd,email,registertime,groupid,userfen,userdate,money,zgroupid,havemsg,checked,salt,userkey';
	}
	$r=explode(',',$f);
	$count=count($r);
	$selectf='';
	$dh='';
	for($i=0;$i<$count;$i++)
	{
		$truef=$r[$i];
		if($ecms_config['memberf'][$truef]==$truef)
		{
			$selectf.=$dh.$tb.$truef;
		}
		else
		{
			$selectf.=$dh.$tb.$ecms_config['memberf'][$truef].' as '.$truef;
		}
		$dh=',';
	}
	return $selectf;
}

//���ز����Ա�ֶ��б�
function eReturnInsertMemberF($f){
	global $ecms_config;
	if(empty($ecms_config['member']['chmember']))
	{
		return $f;
	}
	$r=explode(',',$f);
	$count=count($r);
	$insertf='';
	$dh='';
	for($i=0;$i<$count;$i++)
	{
		$truef=$r[$i];
		$insertf.=$dh.$ecms_config['memberf'][$truef];
		$dh=',';
	}
	return $insertf;
}

//ȡ��ʵ�ʻ�Ա�ֶ�
function egetmf($f){
	global $ecms_config;
	if(empty($ecms_config['member']['chmember']))
	{
		return $f;
	}
	return $ecms_config['memberf'][$f]?$ecms_config['memberf'][$f]:$f;
}

//����
function eDoMemberPw($password,$salt){
	global $ecms_config;
	if($ecms_config['member']['pwtype']==0)//����md5
	{
		$pw=md5($password);
	}
	elseif($ecms_config['member']['pwtype']==1)//����
	{
		$pw=$password;
	}
	elseif($ecms_config['member']['pwtype']==3)//16λmd5
	{
		$pw=substr(md5($password),8,16);
	}
	else//˫��md5
	{
		$pw=md5(md5($password).$salt);
	}
	return $pw;
}

//��֤����
function eDoCkMemberPw($oldpw,$pw,$salt){
	global $ecms_config;
	$istrue=0;
	if($ecms_config['member']['pwtype']==0)//����md5
	{
		$oldpw=md5($oldpw);
		if($oldpw==$pw)
		{
			$istrue=1;
		}
	}
	elseif($ecms_config['member']['pwtype']==1)//����
	{
		if($oldpw==$pw)
		{
			$istrue=1;
		}
	}
	elseif($ecms_config['member']['pwtype']==3)//16λmd5
	{
		$oldpw=substr(md5($oldpw),8,16);
		if($oldpw==$pw)
		{
			$istrue=1;
		}
	}
	else//˫��md5
	{
		$oldpw=md5(md5($oldpw).$salt);
		if($oldpw==$pw)
		{
			$istrue=1;
		}
	}
	return $istrue;
}

//����ע��ʱ��
function eReturnMemberRegtime($regtime,$format){
	global $ecms_config;
	return empty($ecms_config['member']['regtimetype'])?$regtime:date($format,$regtime);
}

//����ע��ʱ��(int)
function eReturnMemberIntRegtime($regtime){
	global $ecms_config;
	return empty($ecms_config['member']['regtimetype'])?to_time($regtime):$regtime;
}

//���ص�ǰע��ʱ��
function eReturnAddMemberRegtime(){
	global $ecms_config;
	return empty($ecms_config['member']['regtimetype'])?date('Y-m-d H:i:s'):time();
}

//����SALT
function eReturnMemberSalt(){
	global $ecms_config;
	return make_password($ecms_config['member']['saltnum']);
}

//����UserKey
function eReturnMemberUserKey(){
	global $ecms_config;
	return make_password(12);
}

//������ͨ��ϵͳ
function DoEpassport($ecms,$userid,$username,$password,$salt,$email,$groupid,$retime){
	global $ecms_config;
	return '';
	if(!$ecms_config['epassport']['open'])
	{
		return '';
	}
	include_once ECMS_PATH.'e/epassport/epp_config.php';
	include_once ECMS_PATH.'e/epassport/epp_function.php';
	$r=DoEpassportVar($userid,$username,$password,$salt,$email,$groupid,$retime);
	epassport_doaction($r,$ecms);
}

//��ͨ��ϵͳ����
function DoEpassportVar($userid,$username,$password,$salt,$email,$groupid,$retime){
	$r['userid']=$userid;
	$r['username']=$username;
	$r['password']=$password;
	$r['salt']=$salt;
	$r['email']=$email;
	$r['groupid']=$groupid;
	$r['retime']=$retime;
	return $r;
}

//--------------- ��Ա�������� ---------------

//�������ö���Ϣ
function eReturnSetHavemsg($havemsg,$ecms=0){
	$newhavemsg=1;
	if($havemsg==3)//ȫ����Ϣ
	{
		$newhavemsg=3;
	}
	elseif($havemsg==2)//֪ͨ
	{
		$newhavemsg=$ecms==1?2:3;
	}
	elseif($havemsg==1)//��Ϣ
	{
		$newhavemsg=$ecms==1?3:1;
	}
	else //��״̬
	{
		$newhavemsg=$ecms==1?2:1;
	}
	return $newhavemsg;
}

//ȡ�ñ�id
function GetMemberFormId($groupid){
	global $empire,$dbtbpre;
	$groupid=(int)$groupid;
	$r=$empire->fetch1("select formid from {$dbtbpre}enewsmembergroup where groupid='$groupid'");
	return $r['formid'];
}

//ȡ���ʼ���ַ
function GetUserEmail($userid,$username){
	global $empire,$dbtbpre;
	$r=$empire->fetch1("select ".eReturnSelectMemberF('email')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' limit 1");
	return $r['email'];
}

//�����޸�����
function ReturnUserInfo($userid){
	global $empire,$dbtbpre;
	$r=$empire->fetch1("select ".eReturnSelectMemberF('username,email,groupid,userfen,money,userdate,zgroupid,checked,registertime')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' limit 1");
	return $r;
}

//�����Ƿ����
function ReturnGroupChecked($groupid){
	global $level_r;
	if($level_r[$groupid]['regchecked']==1)
	{
		$checked=0;
	}
	else
	{
		$checked=1;
	}
	return $checked;
}

//����ʹ�ÿռ�ģ��
function ReturnGroupSpaceStyleid($groupid){
	global $level_r;
	$spacestyleid=$level_r[$groupid]['spacestyleid']?$level_r[$groupid]['spacestyleid']:0;
	return intval($spacestyleid);
}

//���COOKIE
function EmptyEcmsCookie(){
	$set1=esetcookie("mlusername","",0);
	$set2=esetcookie("mluserid","",0);
	$set3=esetcookie("mlgroupid","",0);
	$set4=esetcookie("mlrnd","",0);
	$set5=esetcookie("mlauth","",0);
}

//��¼��֤��
function qGetLoginAuthstr($userid,$username,$rnd,$groupid,$cookietime=0){
	global $ecms_config;
	$checkpass=md5(md5($rnd.'-'.$userid.'-'.$username.'-'.$groupid).'-#empire.cms!-'.$ecms_config['cks']['ckrndtwo']);
	esetcookie('mlauth',$checkpass,$cookietime);
}

//��֤��¼��֤��
function qCheckLoginAuthstr(){
	global $ecms_config;
	$re['userid']='';
	$re['username']='';
	$re['groupid']='';
	$re['rnd']='';
	$re['islogin']=0;
	$checkpass=getcvar('mlauth');
	if(!$checkpass)
	{
		return $re;
	}
	$re['userid']=(int)getcvar('mluserid');
	$re['username']=RepPostVar(getcvar('mlusername'));
	$re['rnd']=RepPostVar(getcvar('mlrnd'));
	$re['groupid']=(int)getcvar('mlgroupid');
	$pass=md5(md5($re['rnd'].'-'.$re['userid'].'-'.$re['username'].'-'.$re['groupid']).'-#empire.cms!-'.$ecms_config['cks']['ckrndtwo']);
	if($pass!=$checkpass)
	{
		return $re;
	}
	else
	{
		$re['islogin']=1;
		return $re;
	}
}

//�Ƿ��¼
function islogin($uid=0,$uname='',$urnd=''){
	global $empire,$dbtbpre,$public_r,$ecmsreurl,$ecms_config;
	if($uid)
	{$userid=(int)$uid;}
	else
	{$userid=(int)getcvar('mluserid');}
	if($uname)
	{$username=$uname;}
	else
	{$username=getcvar('mlusername');}
	$username=RepPostVar($username);
	if($urnd)
	{$rnd=$urnd;}
	else
	{$rnd=getcvar('mlrnd');}
	if($ecms_config['member']['loginurl'])
	{$gotourl=$ecms_config['member']['loginurl'];}
	else
	{$gotourl=$public_r['newsurl']."e/member/login/";}
	$petype=1;
	$rnd=RepPostVar($rnd);
	if(!$userid||!$username||!$rnd)
	{
		if(!getcvar('returnurl'))
		{
			esetcookie("returnurl",RepPostStrUrl($_SERVER['HTTP_REFERER']),0);
		}
		if($ecmsreurl==1)
		{
			$gotourl="history.go(-1)";
			$petype=9;
		}
		elseif($ecmsreurl==2)
		{
			$phpmyself=urlencode(eReturnSelfPage(1));
			$gotourl=$public_r['newsurl']."e/member/login/login.php?prt=1&from=".$phpmyself;
			$petype=9;
		}
		printerror("NotLogin",$gotourl,$petype);
	}
	$cr=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,email,groupid,userfen,money,userdate,zgroupid,havemsg,checked,registertime')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' and ".egetmf('username')."='$username' and ".egetmf('rnd')."='$rnd' limit 1");
	if(!$cr['userid'])
	{
		EmptyEcmsCookie();
		if(!getcvar('returnurl'))
		{
			esetcookie("returnurl",RepPostStrUrl($_SERVER['HTTP_REFERER']),0);
		}
		if($ecmsreurl==1)
		{
			$gotourl="history.go(-1)";
			$petype=9;
		}
		elseif($ecmsreurl==2)
		{
			$phpmyself=urlencode(eReturnSelfPage(1));
			$gotourl=$public_r['newsurl']."e/member/login/login.php?prt=1&from=".$phpmyself;
			$petype=9;
		}
		printerror("NotSingleLogin",$gotourl,$petype);
	}
	if($cr['checked']==0)
	{
		EmptyEcmsCookie();
		if($ecmsreurl==1)
		{
			$gotourl="history.go(-1)";
			$petype=9;
		}
		elseif($ecmsreurl==2)
		{
			$phpmyself=urlencode(eReturnSelfPage(1));
			$gotourl=$public_r['newsurl']."e/member/login/login.php?prt=1&from=".$phpmyself;
			$petype=9;
		}
		printerror("NotCheckedUser",'',$petype);
	}
	//Ĭ�ϻ�Ա��
	if(empty($cr['groupid']))
	{
		$user_groupid=eReturnMemberDefGroupid();
		$usql=$empire->query("update ".eReturnMemberTable()." set ".egetmf('groupid')."='$user_groupid' where ".egetmf('userid')."='".$cr[userid]."'");
		$cr['groupid']=$user_groupid;
	}
	//�Ƿ����
	if($cr['userdate'])
	{
		if($cr['userdate']-time()<=0)
		{
			OutTimeZGroup($cr['userid'],$cr['zgroupid']);
			$cr['userdate']=0;
			if($cr['zgroupid'])
			{
				$cr['groupid']=$cr['zgroupid'];
				$cr['zgroupid']=0;
			}
		}
	}
	$re[userid]=$cr['userid'];
	$re[rnd]=$rnd;
	$re[username]=$cr['username'];
	$re[email]=$cr['email'];
	$re[userfen]=$cr['userfen'];
	$re[money]=$cr['money'];
	$re[groupid]=$cr['groupid'];
	$re[userdate]=$cr['userdate'];
	$re[zgroupid]=$cr['zgroupid'];
	$re[havemsg]=$cr['havemsg'];
	$re[registertime]=$cr['registertime'];
	return $re;
}

//��Ա��¼
function DoEcmsMemberLogin($r,$lifetime=0){
	global $empire,$dbtbpre,$ecms_config;
	$rnd=make_password(20);//ȡ���������
	//Ĭ�ϻ�Ա��
	if(empty($r['groupid']))
	{
		$r['groupid']=eReturnMemberDefGroupid();
	}
	$r['groupid']=(int)$r['groupid'];
	$empire->query("update ".eReturnMemberTable()." set ".egetmf('rnd')."='$rnd',".egetmf('groupid')."='$r[groupid]' where ".egetmf('userid')."='$r[userid]'");
	//����cookie
	$lifetime=(int)$lifetime;
	$logincookie=0;
	if($lifetime)
	{
		$logincookie=time()+$lifetime;
	}
	esetcookie("mlusername",$r['username'],$logincookie);
	esetcookie("mluserid",$r['userid'],$logincookie);
	esetcookie("mlgroupid",$r['groupid'],$logincookie);
	esetcookie("mlrnd",$rnd,$logincookie);
	//��֤��
	qGetLoginAuthstr($r['userid'],$r['username'],$rnd,$r['groupid'],$logincookie);
	//��¼����cookie
	AddLoginCookie($r);
}

//��֤��Ա�ʺź�����
function DoEcmsMemberCheckUserPass($add){
	global $empire,$dbtbpre,$ecms_config;
	$dopr=1;
	if($_POST['prtype'])
	{
		$dopr=9;
	}
	$username=trim($add['username']);
	$password=trim($add['password']);
	if(!$username||!$password)
	{
		printerror("EmptyLogin","history.go(-1)",$dopr);
	}
	$username=RepPostVar($username);
	$password=RepPostVar($password);
	$num=0;
	$r=$empire->fetch1("select ".eReturnSelectMemberF('*')." from ".eReturnMemberTable()." where ".egetmf('username')."='$username' limit 1");
	if(!$r['userid'])
	{
		printerror("FailPassword","history.go(-1)",$dopr);
	}
	if(!eDoCkMemberPw($password,$r['password'],$r['salt']))
	{
		printerror("FailPassword","history.go(-1)",$dopr);
	}
	if($r['checked']==0)
	{
		printerror('NotCheckedUser','',$dopr);
	}
	return $r;
}

//--------------- �������� ---------------

//���ӵ���
function AddInfoFen($cardfen,$userid,$checkfen=1){
	global $empire,$dbtbpre;
	$cardfen=(int)$cardfen;
	if(!$cardfen)
	{
		return '';
	}
	//checkfen
	if($checkfen==1)
	{
		if($cardfen<0)
		{
			$ur=$empire->fetch1("select ".eReturnSelectMemberF('userid,userdate,userfen')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' limit 1");
			if(!$ur['userid'])
			{
				return '';
			}
			if($ur['userdate']-time()>0)
			{
				return '';
			}
			if($cardfen+$ur['userfen']<0)
			{
				$cardfen=$ur['userfen']*-1;
			}
		}
	}
	$sql=$empire->query("update ".eReturnMemberTable()." set ".egetmf('userfen')."=".egetmf('userfen')."+".$cardfen." where ".egetmf('userid')."='$userid'");
}

//ת���Ա��
function OutTimeZGroup($userid,$zgroupid){
	global $empire,$dbtbpre;
	if($zgroupid)
	{
		$sql=$empire->query("update ".eReturnMemberTable()." set ".egetmf('groupid')."='".$zgroupid."',".egetmf('userdate')."=0 where ".egetmf('userid')."='$userid'");
	}
	else
	{
		$sql=$empire->query("update ".eReturnMemberTable()." set ".egetmf('userdate')."=0 where ".egetmf('userid')."='$userid'");
	}
}

//��ֵ
function eAddFenToUser($fen,$date,$groupid,$zgroupid,$user){
	global $empire,$dbtbpre,$public_r;
	if(!($fen||$date))
	{
		return '';
	}
	$update='';
	//����
	if($fen)
	{
		$update.=egetmf('userfen')."=".egetmf('userfen')."+$fen";
	}
	//��Ч��
	if($date)
	{
		$dh='';
		if($update)
		{
			$dh=',';
		}
		if($user[userdate]<time())
		{
			$userdate=time()+$date*24*3600;
		}
		else
		{
			$userdate=$user[userdate]+$date*24*3600;
		}
		$update.=$dh.egetmf('userdate')."='$userdate'";
		//ת���Ա��
		if($groupid)
		{
			$update.=",".egetmf('groupid')."='$groupid'";
		}
		if($zgroupid)
		{
			$update.=",".egetmf('zgroupid')."='$zgroupid'";
		}
	}
	$sql=$empire->query("update ".eReturnMemberTable()." set ".$update." where ".egetmf('userid')."='".$user[userid]."'");
	if(!$sql)
	{
		printerror('DbError',$public_r[newsurl],1);
	}
}

//���������
function DoCheckMDownNum($userid,$groupid,$ecms=0){
	global $empire,$dbtbpre,$level_r;
	$ur=$empire->fetch1("select userid,todaydate,todaydown from {$dbtbpre}enewsmemberpub where userid='$userid' limit 1");
	$thetoday=date("Y-m-d");
	if($ur['userid'])
	{
		if($thetoday!=$ur['todaydate'])
		{
			$query="update {$dbtbpre}enewsmemberpub set todaydate='$thetoday',todaydown=1 where userid='$userid'";
		}
		else
		{
			if($ur['todaydown']>=$level_r[$groupid]['daydown'])
			{
				if($ecms==1)
				{
					exit();
				}
				elseif($ecms==2)
				{
					return 'error';
				}
				else
				{
					printerror("CrossDaydown","history.go(-1)",1);
				}
			}
			$query="update {$dbtbpre}enewsmemberpub set todaydown=todaydown+1 where userid='$userid'";
		}
	}
	else
	{
		$query="replace into {$dbtbpre}enewsmemberpub(userid,todaydate,todaydown) values('$userid','$thetoday',1);";
	}
	return $query;
}

//���¼�����֤��
function DoUpdateMemberAuthstr($userid,$authstr){
	global $empire,$dbtbpre;
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsmemberpub where userid='$userid' limit 1");
	if($num)
	{
		$sql=$empire->query("update {$dbtbpre}enewsmemberpub set authstr='$authstr' where userid='$userid'");
	}
	else
	{
		$sql=$empire->query("replace into {$dbtbpre}enewsmemberpub(userid,authstr) values('$userid','$authstr');");
	}
	return $sql;
}
?>