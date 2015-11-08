<form id="album-delete" method="POST">
<?php
foreach($slike as $s) {
?>

	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
		<a class="thumbnail" href="<?php echo 'album/' . str_replace('./slike/', '', $s); ?>">
			<img class="img-responsive" src="/assets/placeholder.png" alt="">
		</a>
		<h2 class="text-center"><blockquote><?php echo substr($s, 8) ?></blockquote></h2>
		<button id="delete" type="checkbox" name="album[]" value="<?php echo $s ?>" class="glyphicon glyphicon-trash"></button>
	</div>
<?php
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['album']))
	izbrisiAlbum($_POST['album']);
?>
</form>