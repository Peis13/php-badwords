<?php
  // Creare una variabile con un paragrafo di testo.
  // Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
  $badword = $_GET['badword'];
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $testo_censurato = str_replace($badword, '***', $testo);
  $lunghezza_testo = strlen($testo);
  $lunghezza_testo_censurato = strlen($testo_censurato);
?>

<!-- Testo originale -->
<div class="lunghezza-testo">
  <span>
    Lunghezza testo: <?php echo $lunghezza_testo; ?>
  </span>
</div>

<div class="testo">
  <p>
    <?php echo $testo; ?>
  </p>
</div>
<!-- Fine Testo originale -->

<!-- Testo modificato -->
<div class="lunghezza-testo-censurato">
  <span>
    Lunghezza testo censurato: <?php echo $lunghezza_testo_censurato; ?>
  </span>
</div>

<div class="testo-censurato">
  <p>
    <?php echo $testo_censurato; ?>
  </p>
</div>
<!-- Fine Testo modificato -->
