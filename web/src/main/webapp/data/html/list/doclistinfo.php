<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//��ѯSQL�����Ҫ��ʾ�Զ����ֶμǵ���SQL�����Ӳ�ѯ�ֶ�
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,userid,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlepic,title from {$dbtbpre}ecms_".$class_r[$classid][tbname]."_doc".$ewhere." order by ".$doorder." limit $offset,$line";
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
<title>����鵵</title>
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
</script>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>λ��: <?=$url?></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <form name="form2" method="GET" action="ListInfoDoc.php">
  <?=$ecms_hashur['eform']?>
    <tr> 
      <td colspan="2"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
          <tr> 
            <td><div class="emenubutton"> 
                <div align="right">
                  <input type=button name=button value=������Ϣ onClick="self.location.href='AddNews.php?enews=AddNews&bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>'">
                  &nbsp; 
                  <input type="button" name="Submit" value="ˢ����ҳ" onclick="self.location.href='ecmschtml.php?enews=ReIndex<?=$ecms_hashur['href']?>'">
                  &nbsp; 
                  <input type="button" name="Submit22" value="ˢ�±���Ŀ" onclick="self.location.href='enews.php?<?=$ecms_hashur['href']?>&enews=ReListHtml&classid=<?=$classid?>'">
                  &nbsp; 
                  <input type="button" name="Submit4" value="ˢ��������ϢJS" onclick="window.open('ecmschtml.php?<?=$ecms_hashur['href']?>&enews=ReAllNewsJs&from=<?=$phpmyself?>','','');">
                  &nbsp; 
                  <input type="button" name="Submit10" value="��Ŀ����" onclick="self.location.href='AddClass.php?<?=$ecms_hashur['ehref']?>&enews=EditClass&classid=<?=$classid?>'">
                  &nbsp; 
                  <input type="button" name="Submit102" value="���Ӳɼ��ڵ�" onclick="self.location.href='AddInfoClass.php?enews=AddInfoClass&newsclassid=<?=$classid?><?=$ecms_hashur['ehref']?>'">
                  &nbsp; 
                  <input type="button" name="Submit103" value="����ɼ��ڵ�" onclick="self.location.href='ListInfoClass.php<?=$ecms_hashur['whehref']?>'">
                </div>
              </div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td width="38%">
<div align="left">[<a href="InfoDoc.php<?=$ecms_hashur['whehref']?>" target="_blank">�����鵵��Ϣ</a>]&nbsp;[<a href="ReHtml/ChangeData.php<?=$ecms_hashur['whehref']?>" target=_blank>��������</a>]&nbsp;[<a href=../../ target=_blank>Ԥ����ҳ</a>]&nbsp;[<a href="<?=$classurl?>" target=_blank>Ԥ����Ŀ</a>]</div></td>
      <td width="62%">
<div align="right"> 
          <input name="keyboard" type="text" id="keyboard2" value="<?=$keyboard?>" size="16">
          <select name="show">
            <option value="0" selected>�����ֶ�</option>
            <?=$searchoptions_r['select']?>
          </select>
		  <?=$stts?>
          <input type="submit" name="Submit2" value="����">
          <input name="sear" type="hidden" id="sear2" value="1">
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
  <input type=hidden name=enews value=DelInfoDoc_all>
  <input type=hidden name=doing value=1>
  <input name="ecmsdoc" type="hidden" id="ecmsdoc" value="0">
  <input name="docfrom" type="hidden" id="docfrom" value="<?=$phpmyself?>">
  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
  <table width="100%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td width="10%" height="25" bgcolor="#C9F1FF"><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">�ѷ���</a></div></td>
      <td width="10%" bgcolor="#C9F1FF"><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?>&ecmscheck=1<?=$ecms_hashur['ehref']?>">�����</a></div></td>
      <td width="10%" class="header"><div align="center"><a href="ListInfoDoc.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>">�鵵</a></div></td>
      <td width="58%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td width="7%" height="25"><div align="center"><a href='ListInfoDoc.php?<?=$search1?>&myorder=4'><u>ID</u></a></div></td>
      <td width="47%" height="25"> <div align="center">����</div></td>
      <td width="18%" height="25"><div align="center">������</div></td>
      <td width="22%" height="25"> <div align="center"><a href='ListInfoDoc.php?<?=$search1?>&myorder=1'><u>����ʱ��</u></a></div></td>
      <td width="6%" height="25"> <div align="center">ѡ��</div></td>
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
		$titleurl=sys_ReturnBqTitleLink($r);
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
		$myid=$r['id'];
		if(empty($r[havehtml]))
		{
		$myid="<a title='δ����'><b>".$r[id]."</b></a>";
		}
	?>
    <tr bgcolor="#FFFFFF" id=news<?=$r[id]?> onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'"> 
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
      <td height="25"> <div align="center"> <a href="#ecms" title="<? echo"����ʱ�䣺".$truetime."\r\n����޸ģ�".$lastdotime;?>"> 
          <?=date("Y-m-d H:i:s",$r[newstime])?>
          </a> </div></td>
      <td height="25"> <div align="center"> 
          <input name="id[]" type="checkbox" id="id[]" value="<?=$r[id]?>">
        </div></td>
    </tr>
    <?
	}
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="4"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="83%"> 
              <?=$returnpage?>
            </td>
            <td width="17%"><div align="right"> 
                <input type="submit" name="Submit3" value="ɾ��" onClick="document.listform.enews.value='DelInfoDoc_all';document.listform.action='ecmsinfo.php';">
                <input type="submit" name="Submit11" value="��ԭ�鵵" onClick="document.listform.enews.value='InfoToDoc';document.listform.doing.value='1';document.listform.action='ecmsinfo.php';">
              </div></td>
          </tr>
        </table></td>
      <td height="25"><div align="center">
          <input type=checkbox name=chkall value=on onClick=CheckAll(this.form)>
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="5"> <font color="#666666">��ע�������ߺ�ɫΪ��ԱͶ�壻��ϢID����Ϊδ����.</font></td>
    </tr>
  </table>
</form>
</body>
</html>