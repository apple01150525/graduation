<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 class="tableborder"><tr>
    <td width=16% height=25 bgcolor=ffffff>��Ϣ����(*)</td>
    <td bgcolor=ffffff>
<input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr><tr>
    <td width=16% height=25 bgcolor=ffffff>��Ϣ����(*)</td>
    <td bgcolor=ffffff><textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>ͼƬ</td><td bgcolor=ffffff><input type="file" name="titlepicfile" size="45">
</td></tr><tr>
    <td width=16% height=25 bgcolor=ffffff>���ڵ�(*)</td>
    <td bgcolor=ffffff><select name="myarea" id="myarea"><option value="������"<?=$r[myarea]=="������"||$ecmsfirstpost==1?' selected':''?>>������</option><option value="������"<?=$r[myarea]=="������"?' selected':''?>>������</option><option value="������"<?=$r[myarea]=="������"?' selected':''?>>������</option><option value="������"<?=$r[myarea]=="������"?' selected':''?>>������</option><option value="������"<?=$r[myarea]=="������"?' selected':''?>>������</option><option value="������"<?=$r[myarea]=="������"?' selected':''?>>������</option><option value="��̨��"<?=$r[myarea]=="��̨��"?' selected':''?>>��̨��</option><option value="ʯ��ɽ��"<?=$r[myarea]=="ʯ��ɽ��"?' selected':''?>>ʯ��ɽ��</option><option value="ͨ����"<?=$r[myarea]=="ͨ����"?' selected':''?>>ͨ����</option><option value="��ƽ��"<?=$r[myarea]=="��ƽ��"?' selected':''?>>��ƽ��</option><option value="������"<?=$r[myarea]=="������"?' selected':''?>>������</option><option value="����"<?=$r[myarea]=="����"?' selected':''?>>����</option></select></td></tr><tr>
    <td width=16% height=25 bgcolor=ffffff>��ϵ����(*)</td>
    <td bgcolor=ffffff><input name="email" type="text" id="email" value="<?=$ecmsfirstpost==1?$memberinfor[email]:DoReqValue($mid,'email',stripSlashes($r[email]))?>" size="46">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>��ϵ��ʽ</td><td bgcolor=ffffff><input name="mycontact" type="text" id="mycontact" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'mycontact',stripSlashes($r[mycontact]))?>" size="46">
</td></tr><tr><td width=16% height=25 bgcolor=ffffff>��ϵ��ַ</td><td bgcolor=ffffff><input name="address" type="text" id="address" value="<?=$ecmsfirstpost==1?$memberinfor[address]:DoReqValue($mid,'address',stripSlashes($r[address]))?>" size="46">
</td></tr></table>