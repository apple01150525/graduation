<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//查询SQL，如果要显示自定义字段记得在SQL里增加查询字段
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlefont,titlepic,title from ".$infotb." where ".$yhadd."userid='$user[userid]' and ismember=1".$add." order by newstime desc limit $offset,$line";
$sql=$empire->query($query);
//返回头条和推荐级别名称
$ftnr=ReturnFirsttitleNameList(0,0);
$ftnamer=$ftnr['ftr'];
$ignamer=$ftnr['igr'];

$public_diyr['pagetitle']='管理信息';
$url="<a href='../../'>首页</a>&nbsp;>&nbsp;<a href='../member/cp/'>会员中心</a>&nbsp;>&nbsp;<a href='ListInfo.php?mid=$mid".$addecmscheck."'>管理信息</a>&nbsp;(".$mr[qmname].")";
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
                <div class="page_tab selected" style="border:none;border-bottom: 2px solid #FF5F63;top:0;bottom:-1px;">管理文章</div>
            
                <div class="page_tab <?=$indexchecked==1?' selected':''?>" style="border:none;"><a href="ListInfo.php?mid=<?=$mid?>" style="font-size:16px;position:relative;top: 7px;">已发布</a></div>
            
                <div class="page_tab <?=$indexchecked==0?' selected':''?>" style="border:none;"><a href="ListInfo.php?mid=<?=$mid?>&ecmscheck=1" style="font-size:16px;position:relative;top: 7px;">待审核</a></div>
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="float:right;width:450px;margin-top:10px;">
					<form name="searchinfo" method="GET" action="ListInfo.php">
					<tr>
						
					  <td width="75%"><div align="right">&nbsp;搜索： 
						  <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
						  <select name="show">
							<option value="0" selected>标题</option>
						  </select>
						  <input type="submit" name="Submit2" value="搜索">
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
					<i class="sn" style="left:0;">标题</i>
					<i class="sn" style="left:300px;">发布时间</i>
					<i class="sn" style="right:200px;">点击数</i>
					<i class="sn" style="right:100px;">审核</i>
					<i class="sn">操作</i>
				</div>
			</div>
            <div class="page_content indexpage_content">
                
				<?
				while($r=$empire->fetch($sql))
				{
					//状态
					$st='';
					if($r[istop])//置顶
					{
						$st.="<font color=red>[顶".$r[istop]."]</font>";
					}
					if($r[isgood])//推荐
					{
						$st.="<font color=red>[".$ignamer[$r[isgood]-1]."]</font>";
					}
					if($r[firsttitle])//头条
					{
						$st.="<font color=red>[".$ftnamer[$r[firsttitle]-1]."]</font>";
					}
					//时间
					$newstime=date("Y-m-d",$r[newstime]);
					$oldtitle=$r[title];
					$r[title]=stripSlashes(sub($r[title],0,50,false));
					$r[title]=DoTitleFont($r[titlefont],$r[title]);
					if($indexchecked==0)
					{
						$checked='<font color=red>×</font>';
						$titleurl='AddInfo.php?enews=MEditInfo&classid='.$r[classid].'&id='.$r[id].'&mid='.$mid.$addecmscheck;//链接
					}
					else
					{
						$checked='√';
						$titleurl=sys_ReturnBqTitleLink($r);//链接
					}
					$plnum=$r[plnum];//评论个数
					//标题图片
					$showtitlepic="";
					if($r[titlepic])
					{$showtitlepic="<a href='".$r[titlepic]."' title='预览标题图片' target=_blank><img src='../data/images/showimg.gif' border=0></a>";}
					//栏目
					$classname=$class_r[$r[classid]][classname];
					$classurl=sys_ReturnBqClassname($r,9);
					$bclassid=$class_r[$r[classid]][bclassid];
					$br['classid']=$bclassid;
					$bclassurl=sys_ReturnBqClassname($br,9);
					$bclassname=$class_r[$bclassid][classname];
					//评论地址
					$pagefunr=eReturnRewritePlUrl($r['classid'],$r['id'],'doinfo',0,0,1);
					$eplurl=$pagefunr['pageurl'];
				?>
				<div class="indexpage_item">
					<a href="<?=$titleurl?>" target="_blank"><?=$r[title]?></a>
					<i class="sn" style="right:300px;"><?=$newstime?></i>
					<i class="sn" style="right:200px;"><?=$r[onclick]?></i>
					<i class="sn" style="right:100px;"><?=$checked?></i>
					<i class="sn"><a href="AddInfo.php?enews=MEditInfo&classid=<?=$r[classid]?>&id=<?=$r[id]?>&mid=<?=$mid?><?=$addecmscheck?>">修改</a> | <a href="ecms.php?enews=MDelInfo&classid=<?=$r[classid]?>&id=<?=$r[id]?>&mid=<?=$mid?><?=$addecmscheck?>" onclick="return confirm('确认要删除?');">删除</a></i>
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


