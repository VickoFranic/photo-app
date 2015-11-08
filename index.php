<?php
// Header
include '/includes/header.php';

// Pomocne funkcije
require_once '/includes/functions.php';

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
        include '/includes/prikazSvihAlbuma.php';
    }

    include '/includes/unosNazivaAlbuma.php'; // Button za kreiranje novog albuma  

// Footer
include '/includes/footer.php';