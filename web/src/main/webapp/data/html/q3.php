<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 class=tableborder><tr><td width=16% height=25 bgcolor=ffffff>ͼƬ����</td><td bgcolor=ffffff>
<input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr>
  <tr>
    <td width='16%' height=25 bgcolor='ffffff'>�ؼ���</td>
    <td bgcolor='ffffff'>
<input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(�������&quot;,&quot;����)</font>
</td>
  </tr>
<tr><td width=16% height=25 bgcolor=ffffff>�ļ���С</td><td bgcolor=ffffff><input name="filesize" type="text" id="filesize" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'filesize',stripSlashes($r[filesize]))?>" size="42">
<select name="select" onchange="document.add.filesize.value+=this.value">
        <option value="">��λ</option>
        <option value=" MB">MB</option>
        <option value=" KB">KB</option>
        <option value=" GB">GB</option>
        <option value=" BYTES">BYTES</option>
      </select></td></tr><tr><td width=16% height=25 bgcolor=ffffff>ͼƬ�ߴ�</td><td bgcolor=ffffff><input name="picsize" type="text" id="picsize" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'picsize',stripSlashes($r[picsize]))?>" size="42">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>ͼƬ�ֱ���</td><td bgcolor=ffffff><input name="picfbl" type="text" id="picfbl" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'picfbl',stripSlashes($r[picfbl]))?>" size="42">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>��Դ</td><td bgcolor=ffffff><input name="picfrom" type="text" id="picfrom" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'picfrom',stripSlashes($r[picfrom]))?>" size="42">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>ͼƬСͼ</td><td bgcolor=ffffff><input type="file" name="titlepicfile" size="45">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>ͼƬ��ͼ</td><td bgcolor=ffffff><input type="file" name="picurlfile" size="45">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>ͼƬ���</td><td bgcolor=ffffff><textarea name="picsay" cols="60" rows="10" id="picsay"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'picsay',stripSlashes($r[picsay]))?></textarea>
</td></tr></table>