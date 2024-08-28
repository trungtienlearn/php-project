<div class="post-query">
<?php foreach ($data as $key => $value): ?>
<div class="query-post-wrap">
	<div class="post-item" onclick="openPopup(<?=$value['id']?>)">
		<img class="img-post-thumbnail" alt=<?=$value['img']?> src="<?=$value['img']?>"?>
		<div class="post-body">
			<div class="post-title"><?=$value['post_title']?></div>
			<div class="post-description"><?=substr($value['post_content'], 0, 100) . '......';?></div>
		</div>
		<div class="post-footer">
			<span>Ngày</span>
			<span>Bình Luận</span>
			<span>Thích</span>
		</div>
	</div>
</div>
<?php endforeach;?>
</div>