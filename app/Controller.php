<?php

require 'flowers.php';
require 'bouquet.php';




if (isset($_POST['envoyer'])) {

 $bouquet = new Bouquet();
 $msgg = "Location:../index.php?msg=" . $bouquet->remplir($_POST['quantityRose'], $_POST['quantityIris'], $_POST['quantitySunF']);
 header($msgg);
}
