<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//��ѯSQL�����Ҫ��ʾ�Զ����ֶμǵ���SQL�����Ӳ�ѯ�ֶ�
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,userid,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlepic,title from ".$infotb.$ewhere." order by ".$doorder." limit $offset,$line";
$sql=$empire->query($query);
//����ͷ�����Ƽ���������
$ftnr=ReturnFirsttitleNameList(0,0);
$ftnamer=$ftnr['ftr'];
$ignamer=$ftnr['igr'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="adminstyle/<?=$loginadminstyleid?>/adminstyle.css" type="text/css">
<title>������Ϣ</title>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }

function GetSelectId(form)
{
  var ids='';
  var dh='';
  for (var i=0;i<form.elements.length;i++)
  {
	var e = form.elements[i];
	if (e.name == 'id[]')
	{
	   if(e.checked==true)
	   {
       		ids+=dh+e.value;
			dh=',';
	   }
	}
  }
  return ids;
}

function PushInfoToSp(form)
{
	var id='';
	id=GetSelectId(form);
	if(id=='')
	{
		alert('��ѡ��Ҫ���͵���Ϣ');
		return false;
	}
	window.open('sp/PushToSp.php?<?=$ecms_hashur['ehref']?>&classid=<?=$classid?>&id='+id,'PushToSp','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}

function PushInfoToZt(form)
{
	var id='';
	id=GetSelectId(form);
	if(id=='')
	{
		alert('��ѡ��Ҫ���͵���Ϣ');
		return false;
	}
	window.open('special/PushToZt.php?<?=$ecms_hashur['ehref']?>&classid=<?=$classid?>&id='+id,'PushToZt','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}
</script>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="52%">λ�ã� 
      <?=$url?>
    </td>
    <td width="48%"> <div align="right">[<a href="AddClass.php?enews=EditClass&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">��Ŀ����</a>] 
        [<a href="AddInfoClass.php?enews=AddInfoClass&newsclassid=<?=$classid?><?=$ecms_hashur['ehref']?>">���Ӳɼ�</a>] 
        [<a href="ListInfoClass.php<?=$ecms_hashur['whehref']?>">����ɼ�</a>] [<a href="ecmschtml.php?enews=ReAllNewsJs&from=<?=$phpmyself?><?=$ecms_hashur['href']?>">ˢ��������ϢJS</a>]</div></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="searchinfo" method="GET" action="ListNews.php">
  <?=$ecms_hashur['eform']?>
    <tr> 
      <td width="35%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="23%"> <div align="left" class="emenubutton"> 
                <input type=button name=button value="������Ϣ" onClick="self.location.href='AddNews.php?enews=AddNews&ecmsnfrom=1<?=$addecmscheck?>&bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>'">
              </div></td>
            <td width="77%" title="������Ϣ��ʹ�ñ���������Ϣ��ʾ��ǰ̨"> <div align="right"> 
                <select name="dore">
                  <option value="1">ˢ�µ�ǰ��Ŀ</option>
                  <option value="2">ˢ����ҳ</option>
                  <option value="3">ˢ�¸���Ŀ</option>
                  <option value="4">ˢ�µ�ǰ��Ŀ�븸��Ŀ</option>
                  <option value="5">ˢ�¸���Ŀ����ҳ</option>
                  <option value="6" selected>ˢ�µ�ǰ��Ŀ������Ŀ����ҳ</option>
                </select>
                <input type="button" name="Submit12" value="�ύ" onclick="self.location.href='ecmsinfo.php?<?=$ecms_hashur['href']?>&enews=AddInfoToReHtml<?=$addecmscheck?>&classid=<?=$classid?>&dore='+document.searchinfo.dore.value;">
              </div></td>
          </tr>
        </table>
      </td>
      <td width="65%">
<div align="right">����: 
          <select name="showspecial" id="showspecial">
            <option value="0"<?=$showspecial==0?' selected':''?>>��������</option>
			<option value="1"<?=$showspecial==1?' selected':''?>>�ö�</option>
            <option value="2"<?=$showspecial==2?' selected':''?>>�Ƽ�</option>
            <option value="3"<?=$showspecial==3?' selected':''?>>ͷ��</option>
			<option value="7"<?=$showspecial==7?' selected':''?>>Ͷ��</option>
            <option value="5"<?=$showspecial==5?' selected':''?>>ǩ��</option>
			<option value="8"<?=$showspecial==8?' selected':''?>>�ҵ���Ϣ</option>
          </select>
          <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>" size="16">
          <select name="show">
            <option value="0" selected>�����ֶ�</option>
            <?=$searchoptions_r['select']?>
          </select>
		  <?=$stts?>
          <select name="infolday" id="infolday">
            <option value="1"<?=$infolday==1?' selected':''?>>ȫ��ʱ��</option>
            <option value="86400"<?=$infolday==86400?' selected':''?>>1 ��</option>
            <option value="172800"<?=$infolday==172800?' selected':''?>>2 
            ��</option>
            <option value="604800"<?=$infolday==604800?' selected':''?>>һ��</option>
            <option value="2592000"<?=$infolday==2592000?' selected':''?>>1 
            ����</option>
            <option value="7948800"<?=$infolday==7948800?' selected':''?>>3 
            ����</option>
            <option value="15897600"<?=$infolday==15897600?' selected':''?>>6 
            ����</option>
            <option value="31536000"<?=$infolday==31536000?' selected':''?>>1 
            ��</option>
          </select>
          <input type="submit" name="Submit2" value="����">
          <input name="sear" type="hidden" id="sear" value="1">
          <input name="bclassid" type="hidden" id="bclassid" value="<?=$bclassid?>">
          <input name="classid" type="hidden" id="classid" value="<?=$classid?>">
		  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
        </div></td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="ecmsinfo.php" onsubmit="return confirm('ȷ��Ҫִ�д˲�����');">
<?=$ecms_hashur['form']?>
<input type=hidden name=classid value=<?=$classid?>>
<input type=hidden name=bclassid value=<?=$bclassid?>>
<input type=hidden name=enews value=DelNews_all>
<input type=hidden name=doing value=0>
  <input name="ecmsdoc" type="hidden" id="ecmsdoc" value="0">
  <input name="docfrom" type="hidden" id="docfrom" value="<?=$phpmyself?>">
  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
  <table width="100%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td width="10%" height="25"<?=$indexchecked==1?' class="header"':' bgcolor="#C9F1FF"'?> title="�ѷ�����Ϣ������<?=$classinfos?>"><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">�ѷ��� (<?=$classinfos?>)</a></div></td>
      <td width="10%"<?=$indexchecked==0?' class="header"':' bgcolor="#C9F1FF"'?> title="�������Ϣ������<?=$classckinfos?>"><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?>&ecmscheck=1<?=$ecms_hashur['ehref']?>">����� (<?=$classckinfos?>)</a></div></td>
      <td width="10%" bgcolor="#C9F1FF"><div align="center"><a href="ListInfoDoc.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>">�鵵</a></div></td>
      <td width="58%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  	<tr class="header"> 
      <td height="25" colspan="8"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="60%"><font color="#ffffff"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&sear=1&showspecial=8<?=$ecms_hashur['ehref']?>">�ҵ���Ϣ</a> 
              | <a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&sear=1&showspecial=5<?=$ecms_hashur['ehref']?>">ǩ����Ϣ</a> 
              | <a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&sear=1&showspecial=7<?=$ecms_hashur['ehref']?>">Ͷ����Ϣ</a> 
              | <a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&showretitle=1&srt=1<?=$ecms_hashur['ehref']?>" title="��ѯ�ظ����⣬������һ����Ϣ">��ѯ�ظ�����A</a> 
              | <a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&showretitle=1&srt=0<?=$ecms_hashur['ehref']?>" title="��ѯ�ظ��������Ϣ(��������Ϣ)">��ѯ�ظ�����B</a> 
              | <a href="ecmsinfo.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&enews=SetAllCheckInfo<?=$ecms_hashur['href']?>" title="����Ŀ������Ϣȫ��Ϊ���״̬" onclick="return confirm('ȷ��Ҫ����?');">�����Ŀȫ����Ϣ</a></font> 
            </td>
            <td width="40%"> <div align="right"><font color="#ffffff"><a href="openpage/AdminPage.php?leftfile=<?=urlencode('../file/FileNav.php'.$ecms_hashur['whehref'])?>&mainfile=<?=urlencode('../file/ListFile.php?type=9&classid='.$classid.$ecms_hashur['ehref'])?>&title=<?=urlencode('������')?><?=$ecms_hashur['ehref']?>" target="_blank">������</a> | <a href="ReHtml/ChangeData.php<?=$ecms_hashur['whehref']?>" target=_blank>��������</a> | <a href=../../ target=_blank>Ԥ����ҳ</a> | <a href="<?=$classurl?>" target=_blank>Ԥ����Ŀ</a></font></div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td width="3%"><div align="center"></div></td>
      <td width="6%" height="25"><div align="center"><a href='ListNews.php?<?=$search1?>&myorder=4'><u>ID</u></a></div></td>
      <td width="36%" height="25"> <div align="center">����</div></td>
      <td width="12%" height="25"><div align="center">������</div></td>
      <td width="16%" height="25"> <div align="center"><a href='ListNews.php?<?=$search1?>&myorder=1'><u>����ʱ��</u></a></div></td>
	  <td width="7%" height="25"><div align="center"><a href='ListNews.php?<?=$search1?>&myorder=3'><u>���</u></a></div></td>
      <td width="6%"><div align="center"><a href='ListNews.php?<?=$search1?>&myorder=2'><u>����</u></a></div></td>
      <td width="14%" height="25"> <div align="center">����</div></td>
    </tr>
    <?php
	while($r=$empire->fetch($sql))
	{
		//״̬
		$st='';
		if($r[istop])//�ö�
		{
			$st.="<font color=red>[��".$r[istop]."]</font>";
		}
		if($r[isgood])//�Ƽ�
		{
			$st.="<font color=red>[".$ignamer[$r[isgood]-1]."]</font>";
		}
		if($r[firsttitle])//ͷ��
		{
			$st.="<font color=red>[".$ftnamer[$r[firsttitle]-1]."]</font>";
		}
		//ʱ��
		$truetime=date("Y-m-d H:i:s",$r[truetime]);
		$lastdotime=date("Y-m-d H:i:s",$r[lastdotime]);
		$oldtitle=$r[title];
		$r[title]=stripSlashes(sub($r[title],0,50,false));
		//���
		if(empty($indexchecked))
		{
			$checked=" title='δ���' style='background:#99C4E3'";
			$titleurl="ShowInfo.php?classid=$r[classid]&id=$r[id]".$addecmscheck.$ecms_hashur['ehref'];
		}
		else
		{
			$checked="";
			$titleurl=sys_ReturnBqTitleLink($r);
		}
		//��ԱͶ��
		if($r[ismember])
		{
			$r[username]="<a href='member/AddMember.php?enews=EditMember&userid=".$r[userid].$ecms_hashur['ehref']."' target='_blank'><font color=red>".$r[username]."</font></a>";
		}
		//ǩ��
		$qf="";
		if($r[isqf])
		{
			$qfr=$empire->fetch1("select checktno,tstatus from {$dbtbpre}enewswfinfo where id='$r[id]' and classid='$r[classid]' limit 1");
			if($qfr[checktno]=='100')
			{
				$qf="(<font color='red'>��ͨ��</font>)";
			}
			elseif($qfr[checktno]=='101')
			{
				$qf="(<font color='red'>����</font>)";
			}
			elseif($qfr[checktno]=='102')
			{
				$qf="(<font color='red'>�ѷ��</font>)";
			}
			else
			{
				$qf="(<font color='red'>$qfr[tstatus]</font>)";
			}
			$qf="<a href='#ecms' onclick=\"window.open('workflow/DoWfInfo.php?classid=$r[classid]&id=$r[id]".$addecmscheck.$ecms_hashur['ehref']."','','width=600,height=520,scrollbars=yes');\">".$qf."</a>";
		}
		//����ͼƬ
		$showtitlepic="";
		if($r[titlepic])
		{
			$showtitlepic="<a href='".$r[titlepic]."' title='Ԥ������ͼƬ' target=_blank><img src='../data/images/showimg.gif' border=0></a>";
		}
		//δ����
		$myid="<a href='ecmschtml.php?enews=ReSingleInfo&classid=$r[classid]&id[]=".$r[id].$ecms_hashur['href']."'>".$r['id']."</a>";
		if(empty($r[havehtml]))
		{
			$myid="<a href='ecmschtml.php?enews=ReSingleInfo&classid=$r[classid]&id[]=".$r[id].$ecms_hashur['href']."' title='δ����'><b>".$r[id]."</b></a>";
		}
	?>
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'" id=news<?=$r[id]?>> 
      <td><div align="center"> 
          <input name="id[]" type="checkbox" id="id[]" value="<?=$r[id]?>"<?=$checked?>>
		  <input name="infoid[]" type="hidden" value="<?=$r['id']?>">
        </div></td>
      <td height="32"> <div align="center"> 
          <?=$myid?>
        </div></td>
      <td height="25"> <div align="left"> 
          <?=$st?>
          <?=$showtitlepic?>
          <a href='<?=$titleurl?>' target=_blank title="<?=$oldtitle?>"> 
          <?=$r[title]?>
          </a> 
          <?=$qf?>
        </div></td>
      <td height="25"> <div align="center"> 
          <?=$r[username]?>
        </div></td>
      <td height="25" title="<? echo"����ʱ�䣺".$truetime."\r\n����޸ģ�".$lastdotime;?>"> <div align="center"> 
		  <input name="newstime[]" type="text" value="<?=date("Y-m-d H:i:s",$r[newstime])?>" size="20">
        </div></td>
      <td height="25"> <div align="center"> <a title="���ش���:<?=$r[totaldown]?>"> 
          <?=$r[onclick]?>
          </a> </div></td>
      <td><div align="center"><a href="pl/ListPl.php?id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>" target=_blank title="��������"><u> 
          <?=$r[plnum]?>
          </u></a></div></td>
      <td height="25"> <div align="center"><a href="AddNews.php?enews=EditNews&id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>">�޸�</a> | <a href="#empirecms" onclick="window.open('info/EditInfoSimple.php?enews=EditNews&id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>','EditInfoSimple','width=600,height=360,scrollbars=yes,resizable=yes');">���</a> | <a href="ecmsinfo.php?enews=DelNews&id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['href']?>" onClick="return confirm('ȷ��Ҫɾ����');">ɾ��</a>
        </div></td>
    </tr>
    <?
	}
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"> <div align="center">
          <input type=checkbox name=chkall value=on onClick="CheckAll(this.form)">
        </div></td>
      <td height="25" colspan="7"><div align="right">
          <input type="submit" name="Submit3" value="ɾ��" onClick="document.listform.enews.value='DelNews_all';document.listform.action='ecmsinfo.php';">
		  <?php
		  if($ecmscheck)
		  {
		  ?>
		  <input type="submit" name="Submit8" value="���" onClick="document.listform.enews.value='CheckNews_all';document.listform.action='ecmsinfo.php';">
		  <?php
		  }
		  else
		  {
		  ?>
		  <input type="submit" name="Submit9" value="ȡ�����" onClick="document.listform.enews.value='NoCheckNews_all';document.listform.action='ecmsinfo.php';">
		  <input type="submit" name="Submit8" value="ˢ��" onClick="document.listform.enews.value='ReSingleInfo';document.listform.action='ecmschtml.php';">
		  <input type="button" name="Submit112" value="����" onClick="PushInfoToSp(this.form);">
		  <?php
		  }
		  ?>
          <select name="isgood" id="isgood">
            <option value="0">���Ƽ�</option>
			<?=$ftnr['igname']?>
          </select>
          <input type="submit" name="Submit82" value="�Ƽ�" onClick="document.listform.enews.value='GoodInfo_all';document.listform.doing.value='0';document.listform.action='ecmsinfo.php';">
          <select name="firsttitle" id="firsttitle">
            <option value="0">ȡ��ͷ��</option>
            <?=$ftnr['ftname']?>
          </select>
          <input type="submit" name="Submit823" value="ͷ��" onClick="document.listform.enews.value='GoodInfo_all';document.listform.doing.value='1';document.listform.action='ecmsinfo.php';">
          <input type="submit" name="Submit11" value="�鵵" onClick="document.listform.enews.value='InfoToDoc';document.listform.doing.value='0';document.listform.action='ecmsinfo.php';">
          <select name="istop" id="select">
            <option value="0">���ö�</option>
            <option value="1">һ���ö�</option>
            <option value="2">�����ö�</option>
            <option value="3">�����ö�</option>
            <option value="4">�ļ��ö�</option>
            <option value="5">�弶�ö�</option>
            <option value="6">�����ö�</option>
			<option value="7">�߼��ö�</option>
			<option value="8">�˼��ö�</option>
			<option value="9">�ż��ö�</option>
          </select>
          <input type="submit" name="Submit7" value="�ö�" onClick="document.listform.enews.value='TopNews_all';document.listform.action='ecmsinfo.php';">
		  <input type="submit" name="Submit7" value="�޸�ʱ��" onClick="document.listform.enews.value='EditMoreInfoTime';document.listform.action='ecmsinfo.php';">
		  <input type="button" name="Submit52" value="������ר��" onClick="PushInfoToZt(this.form);">
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="68%"> 
              <?=$returnpage?>
            </td>
            <td width="32%"> <div align="right">
			<span id="moveclassnav"></span>
                <input type="submit" name="Submit5" value="�ƶ�" onClick="document.listform.enews.value='MoveNews_all';document.listform.action='ecmsinfo.php';">
                <input type="submit" name="Submit6" value="����" onClick="document.listform.enews.value='CopyNews_all';document.listform.action='ecmsinfo.php';">
              </div></td>
          </tr>
        </table></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> <font color="#666666">��ע����ѡ����ɫΪδ�����Ϣ�������ߺ�ɫΪ��ԱͶ�壻��ϢID����Ϊδ����,���ID��ˢ��ҳ��.</font></td>
    </tr>
  </table>
</form>
<IFRAME frameBorder="0" id="showclassnav" name="showclassnav" scrolling="no" src="ShowClassNav.php?ecms=3<?=$ecms_hashur['ehref']?>" style="HEIGHT:0;VISIBILITY:inherit;WIDTH:0;Z-INDEX:1"></IFRAME>
</body>
</html>