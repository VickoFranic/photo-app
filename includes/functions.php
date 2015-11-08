<?php

/**
 * Pomocne funkcije
 */

function napraviNoviAlbum($naziv) {

	if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/slike/'))
		mkdir($_SERVER['DOCUMENT_ROOT'] . '/slike/');

	$purge = strtoupper(preg_replace('/\s+/', '-', $naziv));	// UPPERCASE naziv, zamjena razmaka sa crticom

	// Vraca TRUE ako je direktorij(album) uspjesno kreiran, FALSE ako nije
	if (mkdir($_SERVER['DOCUMENT_ROOT'] . '/slike/' . $purge)) {
		header('refresh:0');	// Refresh page, timeout 0
	}
	else
		echo "Greška prilikom kreiranja albuma, sorry.";
}

function izbrisiAlbum($naziv) {

	$folder = glob($naziv[0] . '/*');

	foreach ($folder as $file) {
		unlink($file);
	}

	rmdir($naziv[0]);
	header('refresh:0');
}