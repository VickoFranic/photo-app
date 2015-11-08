<?php

$root = $_SERVER['DOCUMENT_ROOT'];

// Header
include $root . '/includes/header.php';

// Pomocne funkcije
require_once $root . '/includes/functions.php';

?>
    <div class="col-lg-12">
        <h1 class="page-header">Moji albumi</h1>
    </div>

<?php
    $slike = glob("./slike/*", GLOB_ONLYDIR);

    if (empty($slike)) {
        echo"<p><h4>Ne postoji ni jedan album u galeriji. Želite ga kreirati ?</h4></p>";
    }
    else {
        // Albumi postoje, prikazi ih
        include $root . '/includes/prikazSvihAlbuma.php';
    }

    include $root . '/includes/unosNazivaAlbuma.php'; // Button za kreiranje novog albuma  

// Footer
include $root . '/includes/footer.php';