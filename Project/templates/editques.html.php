<form action= "editques.php" method="post">
	<div class="col-md-6 col-lg-4">
		<input type="hidden" name="quesid" value="<?=$question['id'];?>">
		<label  for='content'>Edit your post here:</label>
		<textarea class="form-control" id=content name="content" rows="3" cols="40"><?=$question['content']?></textarea>
	</div>
	<br />
		<div class="card-action">
			<input class="btn btn-primary" type="submit" value="Save">
        </div>  
		
</form>