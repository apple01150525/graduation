<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//��ѯSQL�����Ҫ��ʾ�Զ����ֶμǵ���SQL�����Ӳ�ѯ�ֶ�
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlefont,titlepic,title from ".$infotb." where ".$yhadd."userid='$user[userid]' and ismember=1".$add." order by newstime desc limit $offset,$line";
$sql=$empire->query($query);
//����ͷ�����Ƽ���������
$ftnr=ReturnFirsttitleNameList(0,0);
$ftnamer=$ftnr['ftr'];
$ignamer=$ftnr['igr'];

$public_diyr['pagetitle']='������Ϣ';
$url="<a href='../../'>��ҳ</a>&nbsp;>&nbsp;<a href='../member/cp/'>��Ա����</a>&nbsp;>&nbsp;<a href='ListInfo.php?mid=$mid".$addecmscheck."'>������Ϣ</a>&nbsp;(".$mr[qmname].")";
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<body  class="body_index">
    <?php require(ECMS_PATH.'e/template/incfile/top.php');?>
    <div id="scontent">
        
<div class="wrap1 sclearfix">
    <?php require(ECMS_PATH.'e/template/incfile/left.php');?>

    <div class="stage">
        
        <div class="indexpage">
            <div class="page_tabs sclearfix" style="border:none;border-bottom: 1px solid #d8dce4;">
                <div class="page_tab selected" style="border:none;border-bottom: 2px solid #FF5F63;top:0;bottom:-1px;">��������</div>
            
                <div class="page_tab <?=$indexchecked==1?' selected':''?>" style="border:none;"><a href="ListInfo.php?mid=<?=$mid?>" style="font-size:16px;position:relative;top: 7px;">�ѷ���</a></div>
            
                <div class="page_tab <?=$indexchecked==0?' selected':''?>" style="border:none;"><a href="ListInfo.php?mid=<?=$mid?>&ecmscheck=1" style="font-size:16px;position:relative;top: 7px;">�����</a></div>
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="float:right;width:450px;margin-top:10px;">
					<form name="searchinfo" method="GET" action="ListInfo.php">
					<tr>
						
					  <td width="75%"><div align="right">&nbsp;������ 
						  <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
						  <select name="show">
							<option value="0" selected>����</option>
						  </select>
						  <input type="submit" name="Submit2" value="����">
						  <input name="sear" type="hidden" id="sear" value="1">
						  <input name="mid" type="hidden" value="<?=$mid?>">
						  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
						</div></td>
					</tr>
				  </form>
				</table>
            </div>
            <div class="page_content indexpage_content" style="padding: 22px 0;margin-top: 0px;">
				<div class="indexpage_item">
					<i class="sn" style="left:0;">����</i>
					<i class="sn" style="left:300px;">����ʱ��</i>
					<i class="sn" style="right:200px;">�����</i>
					<i class="sn" style="right:100px;">���</i>
					<i class="sn">����</i>
				</div>
			</div>
            <div class="page_content indexpage_content">
                
				<?
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
					$newstime=date("Y-m-d",$r[newstime]);
					$oldtitle=$r[title];
					$r[title]=stripSlashes(sub($r[title],0,50,false));
					$r[title]=DoTitleFont($r[titlefont],$r[title]);
					if($indexchecked==0)
					{
						$checked='<font color=red>��</font>';
						$titleurl='AddInfo.php?enews=MEditInfo&classid='.$r[classid].'&id='.$r[id].'&mid='.$mid.$addecmscheck;//����
					}
					else
					{
						$checked='��';
						$titleurl=sys_ReturnBqTitleLink($r);//����
					}
					$plnum=$r[plnum];//���۸���
					//����ͼƬ
					$showtitlepic="";
					if($r[titlepic])
					{$showtitlepic="<a href='".$r[titlepic]."' title='Ԥ������ͼƬ' target=_blank><img src='../data/images/showimg.gif' border=0></a>";}
					//��Ŀ
					$classname=$class_r[$r[classid]][classname];
					$classurl=sys_ReturnBqClassname($r,9);
					$bclassid=$class_r[$r[classid]][bclassid];
					$br['classid']=$bclassid;
					$bclassurl=sys_ReturnBqClassname($br,9);
					$bclassname=$class_r[$bclassid][classname];
					//���۵�ַ
					$pagefunr=eReturnRewritePlUrl($r['classid'],$r['id'],'doinfo',0,0,1);
					$eplurl=$pagefunr['pageurl'];
				?>
				<div class="indexpage_item">
					<a href="<?=$titleurl?>" target="_blank"><?=$r[title]?></a>
					<i class="sn" style="right:300px;"><?=$newstime?></i>
					<i class="sn" style="right:200px;"><?=$r[onclick]?></i>
					<i class="sn" style="right:100px;"><?=$checked?></i>
					<i class="sn"><a href="AddInfo.php?enews=MEditInfo&classid=<?=$r[classid]?>&id=<?=$r[id]?>&mid=<?=$mid?><?=$addecmscheck?>">�޸�</a> | <a href="ecms.php?enews=MDelInfo&classid=<?=$r[classid]?>&id=<?=$r[id]?>&mid=<?=$mid?><?=$addecmscheck?>" onclick="return confirm('ȷ��Ҫɾ��?');">ɾ��</a></i>
				</div>
				<?
				}
				?>
				 
            </div>
        </div>
    </div>
    
</div>

    </div>
   <?php require(ECMS_PATH.'e/template/incfile/footer.php');?>


