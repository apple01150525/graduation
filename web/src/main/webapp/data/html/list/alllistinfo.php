<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//��ѯSQL�����Ҫ��ʾ�Զ����ֶμǵ���SQL�����Ӳ�ѯ�ֶ�
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,userid,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlepic,title from ".$infotb.$where." order by ".$doorder." limit $offset,$line";
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
	window.open('sp/PushToSp.php?<?=$ecms_hashur['ehref']?>&tid=<?=$tid?>&id='+id,'PushToSp','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
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
	window.open('special/PushToZt.php?<?=$ecms_hashur['ehref']?>&tid=<?=$tid?>&id='+id,'PushToZt','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<form name="AddNewsForm" id="AddNewsForm" method="get">
  <tr> 
    <td width="24%">λ�ã� 
      <?=$url?>
    </td>
    <td width="76%"><div align="right" class="emenubutton">
		  <span id="showaddclassnav"></span>
          <input type="button" name="Submit" value="������Ϣ" onclick="if(document.getElementById('addclassid').value!=0){window.open('AddNews.php?<?=$ecms_hashur['ehref']?>&enews=AddNews<?=$addecmscheck?>&classid='+document.getElementById('addclassid').value,'','');}else{alert('��ѡ��Ҫ������Ϣ����Ŀ');document.getElementById('addclassid').focus();}">
		  &nbsp; 
          <input type="button" name="Submit4" value="ˢ����ҳ" onclick="self.location.href='ecmschtml.php?enews=ReIndex<?=$ecms_hashur['href']?>'">
          &nbsp; 
          <input type="button" name="Submit4" value="ˢ��������ϢJS" onclick="window.open('ecmschtml.php?enews=ReAllNewsJs&from=<?=$phpmyself?><?=$ecms_hashur['href']?>','','');">
        </div></td>
  </tr>
</form>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="SearchForm" id="SearchForm" method="GET" action="ListAllInfo.php">
  <?=$ecms_hashur['eform']?>
    <tr> 
      <td width="100%"> <div align="right">&nbsp;������ 
          <select name="showspecial" id="showspecial">
            <option value="0"<?=$showspecial==0?' selected':''?>>��������</option>
			<option value="1"<?=$showspecial==1?' selected':''?>>�ö�</option>
            <option value="2"<?=$showspecial==2?' selected':''?>>�Ƽ�</option>
            <option value="3"<?=$showspecial==3?' selected':''?>>ͷ��</option>
			<option value="7"<?=$showspecial==7?' selected':''?>>Ͷ��</option>
            <option value="5"<?=$showspecial==5?' selected':''?>>ǩ��</option>
			<option value="8"<?=$showspecial==8?' selected':''?>>�ҵ���Ϣ</option>
          </select>
          <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
          <select name="show">
            <option value="0"<?=$show==0?' selected':''?>>�����ֶ�</option>
            <option value="1"<?=$show==1?' selected':''?>>����</option>
            <option value="2"<?=$show==2?' selected':''?>>������</option>
			<option value="3"<?=$show==3?' selected':''?>>ID</option>
          </select>
		  <?=$stts?>
		  <span id="searchclassnav"></span>
          <select name="myorder" id="myorder">
            <option value="1"<?=$myorder==1?' selected':''?>>����ϢID</option>
            <option value="2"<?=$myorder==2?' selected':''?>>������ʱ��</option>
            <option value="3"<?=$myorder==3?' selected':''?>>�������</option>
            <option value="4"<?=$myorder==4?' selected':''?>>��������</option>
            <option value="5"<?=$myorder==5?' selected':''?>>��������</option>
          </select>
          <select name="orderby" id="orderby">
            <option value="0"<?=$orderby==0?' selected':''?>>��������</option>
            <option value="1"<?=$orderby==1?' selected':''?>>��������</option>
          </select>
          <select name="infolday" id="infolday">
            <option value="1"<?=$infolday==1?' selected':''?>>ȫ��ʱ��</option>
            <option value="86400"<?=$infolday==86400?' selected':''?>>1 ��</option>
            <option value="172800"<?=$infolday==172800?' selected':''?>>2 ��</option>
            <option value="604800"<?=$infolday==604800?' selected':''?>>һ��</option>
            <option value="2592000"<?=$infolday==2592000?' selected':''?>>1 ����</option>
            <option value="7948800"<?=$infolday==7948800?' selected':''?>>3 ����</option>
            <option value="15897600"<?=$infolday==15897600?' selected':''?>>6 
            ����</option>
            <option value="31536000"<?=$infolday==31536000?' selected':''?>>1 
            ��</option>
          </select>
          <input type="submit" name="Submit2" value="����">
          <input name="tbname" type="hidden" value="<?=$tbname?>">
          <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
          <input name="sear" type="hidden" value="1">
        </div></td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="ecmsinfo.php" onsubmit="return confirm('ȷ��Ҫִ�д˲�����');">
<?=$ecms_hashur['form']?>
  <input type=hidden name=enews value=DelNews_all>
  <input name=mid type=hidden id="mid" value=<?=$mid?>>
  <input type=hidden name=doing value=0>
  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
  <table width="100%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td width="10%" height="25"<?=$indexchecked==1?' class="header"':' bgcolor="#C9F1FF"'?>><div align="center"><a href="ListAllInfo.php?tbname=<?=$tbname?><?=$ecms_hashur['ehref']?>" title="�ѷ�����Ϣ������<?=$tbinfos?>">�ѷ��� (<?=$tbinfos?>)</a></div></td>
      <td width="10%"<?=$indexchecked==0?' class="header"':' bgcolor="#C9F1FF"'?> title="�������Ϣ������<?=$tbckinfos?>"><div align="center"><a href="ListAllInfo.php?tbname=<?=$tbname?>&ecmscheck=1<?=$ecms_hashur['ehref']?>">����� (<?=$tbckinfos?>)</a></div></td>
      <td width="10%">&nbsp;</td>
      <td width="58%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td height="25" colspan="8"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="25%"><select name="tbname" onchange="if(this.options[this.selectedIndex].value!=0){self.location.href='ListAllInfo.php?<?=str_replace('&tbname=','&',$search1)?>&tbname='+this.options[this.selectedIndex].value;}">
                <?=$changetbs?>
              </select> </td>
            <td width="75%"> <div align="right"><font color="#ffffff"><a href="ListAllInfo.php?tbname=<?=$tbname?><?=$addecmscheck?>&sear=1&showspecial=8<?=$ecms_hashur['ehref']?>">�ҵ���Ϣ</a> 
                | <a href="ListAllInfo.php?tbname=<?=$tbname?><?=$addecmscheck?>&sear=1&showspecial=5<?=$ecms_hashur['ehref']?>">ǩ����Ϣ</a> 
                | <a href="ListAllInfo.php?tbname=<?=$tbname?><?=$addecmscheck?>&sear=1&showspecial=7<?=$ecms_hashur['ehref']?>">Ͷ����Ϣ</a> 
                | <a href="ListAllInfo.php?tbname=<?=$tbname?><?=$addecmscheck?>&showretitle=1&srt=1<?=$ecms_hashur['ehref']?>" title="��ѯ�ظ����⣬������һ����Ϣ">��ѯ�ظ�����A</a> 
                | <a href="ListAllInfo.php?tbname=<?=$tbname?><?=$addecmscheck?>&showretitle=1&srt=0<?=$ecms_hashur['ehref']?>" title="��ѯ�ظ��������Ϣ(��������Ϣ)">��ѯ�ظ�����B</a> 
                | <a href="ReHtml/ChangeData.php<?=$ecms_hashur['whehref']?>" target=_blank>��������</a> | <a href="../../" target=_blank>Ԥ����ҳ</a></font></div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td width="3%"><div align="center"></div></td>
      <td width="6%" height="25"><div align="center">ID</div></td>
      <td width="36%" height="25"><div align="center">����</div></td>
      <td width="12%" height="25"><div align="center">������</div></td>
      <td width="16%" height="25"> <div align="center">����ʱ��</div></td>
	  <td width="7%" height="25"><div align="center">���</div></td>
      <td width="6%"><div align="center">����</div></td>
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
		$oldtitle=$r[title];
		$r[title]=stripSlashes(sub($r[title],0,36,false));
		//ʱ��
		$truetime=date("Y-m-d H:i:s",$r[truetime]);
		$lastdotime=date("Y-m-d H:i:s",$r[lastdotime]);
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
		//ȡ�������
		$do=$r[classid];
		$dob=$class_r[$r[classid]][bclassid];
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
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'"> 
      <td><div align="center"> 
          <input name="id[]" type="checkbox" id="id[]" value="<?=$r[id]?>"<?=$checked?>>
		  <input name="infoid[]" type="hidden" value="<?=$r['id']?>">
        </div></td>
      <td height="42"> <div align="center"> 
          <?=$myid?>
        </div></td>
      <td height="25"> <div align="left"> 
          <?=$st?>
          <?=$showtitlepic?>
          <a href='<?=$titleurl?>' target=_blank title="<?=$oldtitle?>">
          <?=$r[title]?>
          </a> 
          <?=$qf?>
          <br>
          <font color="#574D5C">��Ŀ:<a href='ListNews.php?bclassid=<?=$class_r[$r[classid]][bclassid]?>&classid=<?=$r[classid]?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>'> 
          <font color="#574D5C">
          <?=$class_r[$dob][classname]?>
          </font> </a> > <a href='ListNews.php?bclassid=<?=$class_r[$r[classid]][bclassid]?>&classid=<?=$r[classid]?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>'> 
          <font color="#574D5C">
          <?=$class_r[$r[classid]][classname]?>
          </font> </a></font></div></td>
      <td height="25"> <div align="center"> 
          <?=$r[username]?>
        </div></td>
      <td height="25" title="<? echo"����ʱ�䣺".$truetime."\r\n����޸ģ�".$lastdotime;?>"> <div align="center">
          <input name="newstime[]" type="text" value="<?=date("Y-m-d H:i:s",$r[newstime])?>" size="20">
        </div></td>
      <td height="25"> <div align="center"><a title="���ش���:<?=$r[totaldown]?>"> 
          <?=$r[onclick]?>
          </a></div></td>
      <td><div align="center"><a href="pl/ListPl.php?id=<?=$r[id]?>&classid=<?=$r[classid]?>&bclassid=<?=$class_r[$r[classid]][bclassid]?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>" target="_blank" title="��������"><u><?=$r[plnum]?></u></a></div></td>
      <td height="25"> <div align="center"><a href="AddNews.php?enews=EditNews&id=<?=$r[id]?>&classid=<?=$r[classid]?>&bclassid=<?=$class_r[$r[classid]][bclassid]?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>" target="_blank">�޸�</a> | <a href="#empirecms" onclick="window.open('info/EditInfoSimple.php?enews=EditNews&id=<?=$r[id]?>&classid=<?=$r[classid]?>&bclassid=<?=$class_r[$r[classid]][bclassid]?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>','EditInfoSimple','width=600,height=360,scrollbars=yes,resizable=yes');">���</a> | <a href="ecmsinfo.php?enews=DelNews&id=<?=$r[id]?>&classid=<?=$r[classid]?>&bclassid=<?=$class_r[$r[classid]][bclassid]?><?=$addecmscheck?><?=$ecms_hashur['href']?>" onclick="return confirm('ȷ��Ҫɾ����');">ɾ��</a> 
        </div></td>
    </tr>
    <?
	}
	?>
    <input type=hidden name=classid value=<?=$do?>>
    <input type=hidden name=bclassid value=<?=$dob?>>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"> <div align="center"> 
          <input type=checkbox name=chkall value=on onclick=CheckAll(this.form)>
        </div></td>
      <td height="25" colspan="7"><div align="right"> 
          <input type="submit" name="Submit3" value="ɾ��" onclick="document.listform.enews.value='DelNews_all';document.listform.action='ecmsinfo.php';">
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
          <select name="istop" id="istop">
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
          <input type="submit" name="Submit7" value="�ö�" onclick="document.listform.enews.value='TopNews_all';document.listform.action='ecmsinfo.php';">
		  <input type="submit" name="Submit7" value="�޸�ʱ��" onclick="document.listform.enews.value='EditMoreInfoTime';document.listform.action='ecmsinfo.php';">
		  <input type="button" name="Submit1122" value="������ר��" onClick="PushInfoToZt(this.form);">
          <span id="moveclassnav"></span> 
          <input type="submit" name="Submit5" value="�ƶ�" onclick="document.listform.enews.value='MoveNews_all';document.listform.action='ecmsinfo.php';">
          <input type="submit" name="Submit6" value="����" onclick="document.listform.enews.value='CopyNews_all';document.listform.action='ecmsinfo.php';">
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> 
        <?=$returnpage?>
      �� </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> <font color="#666666">��ע����ѡ����ɫΪδ�����Ϣ�������ߺ�ɫΪ��ԱͶ�壻��ϢID����Ϊδ����,���ID��ˢ��ҳ��.</font></td>
    </tr>
  </table>
</form>
<IFRAME frameBorder="0" id="showclassnav" name="showclassnav" scrolling="no" src="ShowClassNav.php?ecms=2&classid=<?=$classid?><?=$ecms_hashur['ehref']?>" style="HEIGHT:0;VISIBILITY:inherit;WIDTH:0;Z-INDEX:1"></IFRAME>
</body>
</html>