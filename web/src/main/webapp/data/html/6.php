<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 class=tableborder>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>��Ʒ����(*)</td>
    <td bgcolor=ffffff>
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
</td>
  </tr>
  <tr><td width='16%' height=25 bgcolor='ffffff'>��������</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">��Ϣ����: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      ��� &nbsp;&nbsp; �Ƽ� 
      <select name="isgood" id="isgood">
        <option value="0">���Ƽ�</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; ͷ�� 
      <select name="firsttitle" id="firsttitle">
        <option value="0">��ͷ��</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">�ؼ���&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(�������&quot;,&quot;����)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">�ⲿ����: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(��д����Ϣ���ӵ�ַ��Ϊ������)</font></td>
  </tr>
</table>
</td></tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>����ʱ��</td>
    <td bgcolor=ffffff>
<input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="��Ϊ��ǰʱ��" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>��Ʒ���</td>
    <td bgcolor=ffffff><input name="productno" type="text" id="productno" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[productno]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>Ʒ��</td>
    <td bgcolor=ffffff><input name="pbrand" type="text" id="pbrand" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[pbrand]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>������</td>
    <td bgcolor=ffffff><textarea name="intro" cols="80" rows="10" id="intro"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[intro]))?></textarea>
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>������λ</td>
    <td bgcolor=ffffff><input name="unit" type="text" id="unit" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[unit]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>��λ����</td>
    <td bgcolor=ffffff><input name="weight" type="text" id="weight" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[weight]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>�г��۸�</td>
    <td bgcolor=ffffff><input name="tprice" type="text" id="tprice" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[tprice]))?>" size="60">
Ԫ</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>����۸�</td>
    <td bgcolor=ffffff><input name="price" type="text" id="price" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[price]))?>" size="60">
Ԫ</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>���ֹ���</td>
    <td bgcolor=ffffff><input name="buyfen" type="text" id="buyfen" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[buyfen]))?>" size="60">
��</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>���</td>
    <td bgcolor=ffffff><input name="pmaxnum" type="text" id="pmaxnum" value="<?=$ecmsfirstpost==1?"100":ehtmlspecialchars(stripSlashes($r[pmaxnum]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>��Ʒ����Ƭ</td>
    <td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="60">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="ѡ�����ϴ���ͼƬ"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>��Ʒ��ͼ</td>
    <td bgcolor=ffffff><input name="productpic" type="text" id="productpic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[productpic]))?>" size="60">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=productpic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="ѡ�����ϴ���ͼƬ"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td>
  </tr>
  <tr>
    <td height=25 colspan=2 bgcolor=ffffff><div align=left>��Ʒ����(*)</div></td>
  </tr>
</table>
<div style="background-color:#D0D0D0"><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","300","100%")?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
              �ؼ����滻&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
      Զ�̱���ͼƬ(
      <input name="mark" type="checkbox" id="mark" value="1">
      <a href="SetEnews.php<?=$ecms_hashur[whehref]?>" target="_blank">��ˮӡ</a>)&nbsp;&nbsp; 
      <input name="copyflash" type="checkbox" id="copyflash" value="1">
      Զ�̱���FLASH(��ַǰ׺�� 
      <input name="qz_url" type="text" id="qz_url" size="">
              )</td>
          </tr>
          <tr>
            
    <td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> ͼƬ����תΪ��һҳ&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1"> �Զ���ҳ
      ,ÿ 
      <input name="autosize" type="text" id="autosize" value="5000" size="5">
      ���ֽ�Ϊһҳ&nbsp;&nbsp; ȡ�� 
      <input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
      ���ϴ�ͼΪ����ͼƬ( 
      <input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
      ����ͼ: �� 
      <input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
      *��
      <input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
      )</td>
          </tr>
        </table>
</div>