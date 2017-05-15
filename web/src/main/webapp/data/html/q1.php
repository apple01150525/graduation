<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><div class="edit-main front-cover">
	<label class="edit-label">标题</label>
	<div class="edit-input">
		<div class="front-cover-type">
			<div class="front-cover-item">
				<input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
			</div>
		</div>
	</div>
</div>
<div class="edit-main front-cover">
	<label class="edit-label">缩略图</label>
	<div class="edit-input">
		<div class="front-cover-type">
			<div class="front-cover-item">
				<input type="file" name="titlepicfile" size="45">
			</div>
		</div>
	</div>
</div>
<div class="edit-main front-cover">
	<label class="edit-label">内容简介</label>
	<div class="edit-input">
		<div class="front-cover-type">
			<div class="front-cover-item">
				<textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>

			</div>
		</div>
	</div>
</div>
<div class="edit-main front-cover">
	<label class="edit-label">新闻正文</label>
	<div class="edit-input">
		<div class="front-cover-type">
			<div class="front-cover-item" style="width:100%">
				<?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":DoReqValue($mid,'newstext',stripSlashes($r[newstext])),"Default","","300","100%")?>

			</div>
		</div>
	</div>
</div>