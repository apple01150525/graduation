<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��Ʒ������</strong><br>
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
    <td height="22" valign="top"><strong>��ƷԤ��ͼ����</strong><br>
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
    <td height="22" valign="top"><strong>��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--flashwriter--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_flashwriter]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_flashwriter]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_flashwriter]" type="text" id="add[z_flashwriter]" value="<?=stripSlashes($r[z_flashwriter])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>������������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--email--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_email]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_email]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_email]" type="text" id="add[z_email]" value="<?=stripSlashes($r[z_email])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��Ʒ��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--star--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_star]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_star]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_star]" type="text" id="add[z_star]" value="<?=stripSlashes($r[z_star])?>">
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
    <td height="22" valign="top"><strong>Flash��ַ����</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--flashurl--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>����ǰ׺ 
        <input name="add[qz_flashurl]" type="text" id="add[qz_flashurl]" value="<?=stripSlashes($r[qz_flashurl])?>"> 
        <input name="add[save_flashurl]" type="checkbox" id="add[save_flashurl]" value=" checked"<?=$r[save_flashurl]?>>
        Զ�̱��� </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_flashurl]" cols="60" rows="10" id="add[zz_flashurl]"><?=ehtmlspecialchars(stripSlashes($r[zz_flashurl]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_flashurl]" type="text" id="flashurl5" value="<?=stripSlashes($r[z_flashurl])?>">
        (����д���������ֶε�ֵ)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>Flash�������</strong><br>
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
    <td height="22" valign="top"><strong>Flash�߶�����</strong><br>
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
    <td height="22" valign="top"><strong>��Ʒ�������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--flashsay--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_flashsay]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_flashsay]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_flashsay]" type="text" id="add[z_flashsay]" value="<?=stripSlashes($r[z_flashsay])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>
