<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>ӰƬ��</td><td bgcolor=ffffff>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>�������</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="ͼ��" onclick="document.add.title.value=document.add.title.value+'(ͼ��)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">����: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>����
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>б��
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>ɾ����
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ɫ: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table>
</td></tr><tr><td bgcolor=ffffff>����ʱ��</td><td bgcolor=ffffff>
<input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="��Ϊ��ǰʱ��" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td bgcolor=ffffff>ӰƬ����ͼ</td><td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="ѡ�����ϴ���ͼƬ"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>ӰƬ����</td><td bgcolor=ffffff><select name="movietype" id="movietype"><option value="��̨Ӱ��"<?=$r[movietype]=="��̨Ӱ��"?' selected':''?>>��̨Ӱ��</option><option value="����Ӱ��"<?=$r[movietype]=="����Ӱ��"?' selected':''?>>����Ӱ��</option><option value="��½Ӱ��"<?=$r[movietype]=="��½Ӱ��"?' selected':''?>>��½Ӱ��</option><option value="�պ�Ӱ��"<?=$r[movietype]=="�պ�Ӱ��"?' selected':''?>>�պ�Ӱ��</option></select></td></tr><tr><td bgcolor=ffffff>��Ʒ��˾</td><td bgcolor=ffffff>
<input name="company" type="text" id="company" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[company]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>��Ʒʱ��</td><td bgcolor=ffffff>
<input name="movietime" type="text" id="movietime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[movietime]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>����</td><td bgcolor=ffffff>
<input name="player" type="text" id="player" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[player]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>����</td><td bgcolor=ffffff>
<input name="playadmin" type="text" id="playadmin" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[playadmin]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>ӰƬ��ʽ</td><td bgcolor=ffffff><input name="filetype" type="text" id="filetype" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[filetype]))?>" size="8">
<select name="select2" onchange="document.add.filetype.value=this.value">
        <option value="">����</option>
        <option value=".rm">.rm</option>
        <option value=".rmvb">.rmvb</option>
        <option value=".mp3">.mp3</option>
        <option value=".asf">.asf</option>
        <option value=".wmv">.wmv</option>
        <option value=".avi">.avi</option>
      </select></td></tr><tr><td bgcolor=ffffff>ӰƬ��С</td><td bgcolor=ffffff><input name="filesize" type="text" id="filesize" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[filesize]))?>" size="12">
<select name="select" onchange="document.add.filesize.value+=this.value">
        <option value="">��λ</option>
        <option value=" MB">MB</option>
        <option value=" KB">KB</option>
        <option value=" GB">GB</option>
        <option value=" BYTES">BYTES</option>
      </select></td></tr><tr><td bgcolor=ffffff>�Ƽ��ȼ�</td><td bgcolor=ffffff><select name="star" id="star"><option value="1"<?=$r[star]=="1"?' selected':''?>>1��</option><option value="2"<?=$r[star]=="2"||$ecmsfirstpost==1?' selected':''?>>2��</option><option value="3"<?=$r[star]=="3"?' selected':''?>>3��</option><option value="4"<?=$r[star]=="4"?' selected':''?>>4��</option><option value="5"<?=$r[star]=="5"?' selected':''?>>5��</option></select></td></tr><tr><td bgcolor=ffffff>����Ҫ��</td><td bgcolor=ffffff>
<input name="playdk" type="text" id="playdk" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[playdk]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>Ƭ��</td><td bgcolor=ffffff>
<input name="playtime" type="text" id="playtime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[playtime]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>�۳�����</td><td bgcolor=ffffff>
<input name="moviefen" type="text" id="moviefen" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[moviefen]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>���ص�ַ</td><td bgcolor=ffffff><script>
function doadd()
{var i;
var str="";
var oldi=0;
var j=0;
oldi=parseInt(document.add.editnum.value);
for(i=1;i<=document.add.downnum.value;i++)
{
j=i+oldi;
str=str+"<tr><td width=7%> <div align=center>"+j+"</div></td><td width=19%><div align=left><input name=downname[] type=text id=downname[] value=���ص�ַ"+j+" size=17></div></td><td width=40%><input name=downpath[] type=text size=36 id=downpath"+j+" ondblclick=SpOpenChFile(0,'downpath"+j+"')><select name=thedownqz[]><option value=''>--��ַǰ׺--</option><?=$newdownqz?></select></td><td width=21%><div align=center><select name=downuser[] id=select><option value=0>�ο�</option><?=$ygroup?></select></div></td><td width=13%><div align=center><input name=fen[] type=text id=fen[] value=0 size=6></div></td></tr>";
}
document.getElementById("adddown").innerHTML="<table width='100%' border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">���ص�ַǰ׺&nbsp;:
      <input name="downurl_qz" type="text" size="32">
      <select name="changeurl_qz" onchange="document.add.downurl_qz.value=document.add.changeurl_qz.value">
        <option value="" selected>ѡ��ǰ׺</option>
        <?=$downurlqz?>
      </select>
	  </td>
  </tr>
  <tr>
    <td height="25">ѡ��/�ϴ�����:
      <input name="changedown_url" id="changedown_url" type="text" size="32">
      <input type="button" name="Submit" value="ѡ��" onclick="window.open('ecmseditor/FileMain.php?type=0&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=changedown_url<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');">&nbsp;
	  <input type="button" name="Submit" value="����" onclick="document.getElementById('changedown_url').focus();document.getElementById('changedown_url').select();clipboardData.setData('text',document.getElementById('changedown_url').value);"></td>
  </tr>
  <tr> 
    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
        <tr> 
          <td width="7%"> <div align="center">���</div></td>
          <td width="19%"><div align="left">��������</div></td>
          <td width="40%">���ص�ַ <font color="#666666">(˫��ѡ��)</font></td>
          <td width="21%"> <div align="center">Ȩ��</div></td>
          <td width="13%"> <div align="center">����</div></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>
    <?php
    if($ecmsfirstpost==1)
    {
    ?>
	<table width='100%' border=0 cellspacing=1 cellpadding=3>
	<?php
	$editnum=3;
	for($pathi=1;$pathi<=$editnum;$pathi++)
	{
	?>
           <tr> 
              <td width='7%'> <div align=center><?=$pathi?></div></td>
              <td width='19%'> <div align=left> 
                  <input name=downname[] type=text value='���ص�ַ<?=$pathi?>' size=17>
                    </div></td>
              <td width='40%'>
	      <input name=downpath[] type=text size=36 id='downpath<?=$pathi?>' ondblclick="SpOpenChFile(0,'downpath<?=$pathi?>');">
	      <select name=thedownqz[]><option value=''>--��ַǰ׺--</option><?=$newdownqz?></select> 
                  </td>
                  <td width='21%'><div align=center> 
                      <select name=downuser[]>
                        <option value=0>�ο�</option>
                        <?=$ygroup?>
                      </select>
                    </div></td>
                  <td width='13%'> <div align=center> 
                      <input name=fen[] type=text value=0 size=6>
                    </div></td>
            </tr>
	<?php
	}
	?>
	</table>
    <?php
    }
    else
    {
	$editnum=0;
	$downloadpath="";
	if($r[downpath])
	{
		$r[downpath]=stripSlashes($r[downpath]);
		//���ص�ַ
		$j=0;
		$d_record=explode("\r\n",$r[downpath]);
		for($i=0;$i<count($d_record);$i++)
		{
			$j=$i+1;
			$d_field=explode("::::::",$d_record[$i]);
			//Ȩ��
			$tgroup=str_replace(" value=".$d_field[2].">"," value=".$d_field[2]." selected>",$ygroup);
			//��ַǰ׺
			$tnewdownqz=str_replace(" value='".$d_field[4]."'>"," value='".$d_field[4]."' selected>",$newdownqz);
			$downloadpath.="<tr><td width='7%'><div align=center>".$j."</div></td><td width='19%'><div align=left><input name=downname[] type=text id=downname[] value='".$d_field[0]."' size=17></div></td><td width='40%'><input name=downpath[] type=text id=downpath".$j." value='".$d_field[1]."' size=36 ondblclick=\"SpOpenChFile(0,'downpath".$j."');\"><select name=thedownqz[]><option value=''>--��ַǰ׺--</option>".$tnewdownqz."</select><input type=hidden name=pathid[] value=".$j."><input type=checkbox name=delpathid[] value=".$j.">ɾ</td><td width='21%'><div align=center><select name=downuser[] id=select><option value=0>�ο�</option>".$tgroup."</select></div></td><td width='13%'><div align=center><input name=fen[] type=text id=fen[] value='".$d_field[3]."' size=6></div></td></tr>";
		}
		$editnum=$j;
		$downloadpath="<table width='100%' border=0 cellspacing=1 cellpadding=3>".$downloadpath."</table>";
	}
	echo $downloadpath;
    }
    ?>
    </td>
  </tr>
  <tr> 
    <td height="25">���ص�ַ��չ����: <input name="editnum" type="hidden" id="editnum" value="<?=$editnum?>">
      <input name="downnum" type="text" id="downnum" value="1" size="6"> <input type="button" name="Submit5" value="�����ַ" onclick="javascript:doadd();"></td>
  </tr>
  <tr> 
    <td id=adddown></td>
  </tr>
</table>
</td></tr><tr><td bgcolor=ffffff>������</td><td bgcolor=ffffff>
<?php
$player_sql=$empire->query("select id,player from {$dbtbpre}enewsplayer");
while($player_r=$empire->fetch($player_sql))
{
	$select_player='';
	if($r[playerid]==$player_r[id])
	{
		$select_player=' selected';
	}
	$player_class.="<option value='".$player_r[id]."'".$select_player.">".$player_r[player]."</option>";
}
?>
<select name="playerid">
<option value=0>�Զ�ʶ��</option>
<?=$player_class?>
</select>
</td></tr><tr><td bgcolor=ffffff>���߹ۿ���ַ</td><td bgcolor=ffffff><script>
function dooadd()
{var i;
var str="";
var oldi=0;
var j=0;
oldi=parseInt(document.add.oeditnum.value);
for(i=1;i<=document.add.odownnum.value;i++)
{
j=i+oldi;
str=str+"<tr><td width=7%> <div align=center>"+j+"</div></td><td width=19%><div align=left><input name=odownname[] type=text value="+j+" size=17></div></td><td width=40%><input name=odownpath[] type=text size=36 id=odownpath"+j+" ondblclick=SpOpenChFile(0,'odownpath"+j+"')><select name=othedownqz[]><option value=''>--��ַǰ׺--</option><?=$newdownqz?></select></td><td width=21%><div align=center><select name=odownuser[] id=select><option value=0>�ο�</option><?=$ygroup?></select></div></td><td width=13%><div align=center><input name=ofen[] type=text value=0 size=6></div></td></tr>";
}
document.getElementById("addonline").innerHTML="<table width='100%' border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="25">�ۿ���ַǰ׺&nbsp;: 
      <input name="onlineurl_qz" type="text" size="32"> <select name="changeonlineurl_qz" onchange="document.add.onlineurl_qz.value=document.add.changeonlineurl_qz.value">
        <option value="" selected>ѡ��ǰ׺</option>
        <?=$downurlqz?>
      </select>
      </td>
  </tr>
  <tr> 
    <td height="25">ѡ��/�ϴ�����: 
      <input name="changeonline_url" id="changeonline_url" type="text" size="32"> <input type="button" name="Submit" value="ѡ��" onclick="window.open('ecmseditor/FileMain.php?type=0&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=changeonline_url<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');">&nbsp;
	  <input type="button" name="Submit" value="����" onclick="document.getElementById('changeonline_url').focus();document.getElementById('changeonline_url').select();clipboardData.setData('text',document.getElementById('changeonline_url').value);"></td>
  </tr>
  <tr> 
    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
        <tr> 
          <td width="7%"> <div align="center">���</div></td>
          <td width="19%"><div align="left">�ۿ�����</div></td>
          <td width="40%">�ۿ���ַ <font color="#666666">(˫��ѡ��)</font></td>
          <td width="21%"> <div align="center">Ȩ��</div></td>
          <td width="13%"> <div align="center">����</div></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>
    <?php
    if($ecmsfirstpost==1)
    {
	?>
	<table width='100%' border=0 cellspacing=1 cellpadding=3>
	<?php
	$oeditnum=3;
	for($opathi=1;$opathi<=$oeditnum;$opathi++)
	{
	?>
		<tr> 
                  <td width='7%'> <div align=center><?=$opathi?></div></td>
                  <td width='19%'> <div align=left> 
                      <input name=odownname[] type=text value='<?=$opathi?>' size=17>
                    </div></td>
                  <td width='40%'> 
		  <input name=odownpath[] type=text id='odownpath<?=$opathi?>' size=36 ondblclick="SpOpenChFile(0,'odownpath<?=$opathi?>');">
		  <select name=othedownqz[]><option value=''>--��ַǰ׺--</option><?=$newdownqz?></select> 
                  </td>
                  <td width='21%'><div align=center> 
                      <select name=odownuser[] id=select>
                        <option value=0>�ο�</option>
                        <?=$ygroup?>
                      </select>
                    </div></td>
                  <td width='13%'> <div align=center> 
                      <input name=ofen[] type=text id=ofen[] value=0 size=6>
                    </div></td>
                </tr>
	<?php
	}
	?>
	</table>
	<?php
    }
    else
    {
	$oeditnum=0;
	$onlinemoviepath="";
	if($r[onlinepath])
	{
		$j=0;
		$od_record=explode("\r\n",$r[onlinepath]);
		for($i=0;$i<count($od_record);$i++)
		{
			$j=$i+1;
			$od_field=explode("::::::",$od_record[$i]);
			//Ȩ��
			$tgroup=str_replace(" value=".$od_field[2].">"," value=".$od_field[2]." selected>",$ygroup);
			//��ַǰ׺
			$tnewdownqz=str_replace(" value='".$od_field[4]."'>"," value='".$od_field[4]."' selected>",$newdownqz);
			$onlinemoviepath.="<tr><td width='7%'><div align=center>".$j."</div></td><td width='19%'><div align=left><input name=odownname[] type=text value='".$od_field[0]."' size=17></div></td><td width='40%'><input name=odownpath[] type=text value='".$od_field[1]."' size=36 id=odownpath".$j." ondblclick=\"SpOpenChFile(0,'odownpath".$j."');\"><select name=othedownqz[]><option value=''>--��ַǰ׺--</option>".$tnewdownqz."</select><input type=hidden name=opathid[] value=".$j."><input type=checkbox name=odelpathid[] value=".$j.">ɾ</td><td width='21%'><div align=center><select name=odownuser[] id=select><option value=0>�ο�</option>".$tgroup."</select></div></td><td width='13%'><div align=center><input name=ofen[] type=text value='".$od_field[3]."' size=6></div></td></tr>";
		}
		$oeditnum=$j;
		$onlinemoviepath="<table width='100%' border=0 cellspacing=1 cellpadding=3>".$onlinemoviepath."</table>";
	}
	echo $onlinemoviepath;
    }
    ?>
    </td>
  </tr>
  <tr> 
    <td height="25">���ߵ�ַ��չ����: <input name="oeditnum" type="hidden" id="oeditnum" value="<?=$oeditnum?>">
      <input name="odownnum" type="text" id="odownnum" value="1" size="6"> <input type="button" name="Submit5" value="�����ַ" onclick="javascript:dooadd();"></td>
  </tr>
  <tr> 
    <td id=addonline></td>
  </tr>
</table>
</td></tr><tr><td bgcolor=ffffff>ӰƬ���</td><td bgcolor=ffffff><textarea name="moviesay" cols="80" rows="10" id="moviesay"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[moviesay]))?></textarea>
</td></tr>