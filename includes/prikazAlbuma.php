<?php
if (empty($slike))
	echo "<p><h4>Nema slika u albumu, dodajte par ? ;)</h4></p>";
	echo "<div id='canvas'>";
foreach ($slike as $s) {
	?>
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a data-toggle="modal" href="#big"><img class="img-responsive pic" src="<?php echo ltrim($s, '.') ?>"></a>
		</div>
<?php
}
?>
		<div id="big" class="modal fade">
			<div class="modal-dialog">
				<img id="data" class="img img-responsive img-thumbnail">
			</div>
		</div>
	</div>
</div>
<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/unosNovihSlika.php';
?>
	<div class="col-md-6 text-right">
		<a href="/" class="btn btn-info">Natrag</a>
	</div>
</div>