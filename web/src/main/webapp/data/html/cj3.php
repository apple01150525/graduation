<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬ��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>����ʱ������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�ļ���С����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--filesize--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_filesize]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_filesize]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_filesize]" type="text" id="add[z_filesize]" value="<?=stripSlashes($r[z_filesize])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬ�ߴ�����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--picsize--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_picsize]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_picsize]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_picsize]" type="text" id="add[z_picsize]" value="<?=stripSlashes($r[z_picsize])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬ�ֱ�������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--picfbl--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_picfbl]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_picfbl]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_picfbl]" type="text" id="add[z_picfbl]" value="<?=stripSlashes($r[z_picfbl])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��Դ����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--picfrom--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_picfrom]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_picfrom]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_picfrom]" type="text" id="add[z_picfrom]" value="<?=stripSlashes($r[z_picfrom])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬСͼ����</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>����ǰ׺ 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        Զ�̱��� </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (����д���������ֶε�ֵ)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬ��ͼ����</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--picurl--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>����ǰ׺ 
        <input name="add[qz_picurl]" type="text" id="add[qz_picurl]" value="<?=stripSlashes($r[qz_picurl])?>"> 
        <input name="add[save_picurl]" type="checkbox" id="add[save_picurl]" value=" checked"<?=$r[save_picurl]?>>
        Զ�̱��� </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_picurl]" cols="60" rows="10" id="add[zz_picurl]"><?=ehtmlspecialchars(stripSlashes($r[zz_picurl]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_picurl]" type="text" id="picurl5" value="<?=stripSlashes($r[z_picurl])?>">
        (����д���������ֶε�ֵ)</td>
    </tr>
  </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬ������</strong><br>
      (
      <input name="textfield" type="text" id="textfield" value="[!--ecmsspicurl--]" size="20">
      <br>
      <input name="textfield2" type="text" id="textfield2" value="[!--ecmsbpicurl--]" size="20">
	  <br>
      <input name="textfield2" type="text" id="textfield2" value="[!--ecmspicname--]" size="20">
      )<br>
      ��ʽ:����ͼ[!empirecms!]��ͼ[!empirecms!]����</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_morepic]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_morepic]))?></textarea></td>
        </tr>
        <tr> 
          <td>��ַǰ׺:
<input name="add[qz_morepic]" type="text" id="add[qz_morepic]" value="<?=stripSlashes($r[qz_morepic])?>">
<input name="add[save_morepic]" type="checkbox" id="add[save_morepic]" value=" checked"<?=$r[save_morepic]?>>
        Զ�̱���
        </td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ÿ����ʾ��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--num--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_num]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_num]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_num]" type="text" id="add[z_num]" value="<?=stripSlashes($r[z_num])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��ͼ�������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--width--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_width]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_width]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_width]" type="text" id="add[z_width]" value="<?=stripSlashes($r[z_width])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��ͼ�߶�����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--height--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_height]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_height]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_height]" type="text" id="add[z_height]" value="<?=stripSlashes($r[z_height])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ͼƬ�������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--picsay--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_picsay]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_picsay]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_picsay]" type="text" id="add[z_picsay]" value="<?=stripSlashes($r[z_picsay])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>
