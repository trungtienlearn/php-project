<div class="container">
	<h1 class="text-center">SỬA BÀI VIẾT</h1>
	<div class="alert alert-success <?=$alert ? '' : 'd-none'?>" role="alert">
		<?=$alert ? $alert : ""?>
	</div>
	<form method="post">
		<label class="form-label">Tiêu đề bài viết</label>
		<input type="text" name="title" class="form-control" value="<?=$data['title']?>">
		<label class="form-label">Nội dung bài viết</label>
		<textarea class="form-control" rows="10" name="content"><?=$data['content']?></textarea>
		<button class="btn btn-primary my-3" type="submit">Submit</button>
	</form>
</div>