<?php
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
  culpa qui officia deserunt mollit anim id est laborum.';

  // ottengo l'argomento passato all'url
  $badword = $_GET['badword'];

  /* cambio l'argomento ottenuto con '***' utilizzando
  str_replace(porzione da modificare, con cosa modificare, sringa dell'elemento da modificare) */
  $badword_change = str_replace($badword, '***', $testo);

  // stampo su schermo il testo modificato
  var_dump($badword_change);
?>
