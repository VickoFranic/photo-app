<?php
	include '/includes/header.php';

	$req = $_SERVER['REQUEST_URI'];
	$ime = ltrim($req, '/album');	// uzimamo ime albuma

	$slike = glob("./slike/" . $ime . "/*");	// niz sa svim slikama
?>

	<div class="col-lg-12">
        <h1 class="page-header">Album: <?php echo $ime ?></h1>
    </div>
    
<?php
	include '/includes/prikazAlbuma.php';

include '/includes/footer.php';
