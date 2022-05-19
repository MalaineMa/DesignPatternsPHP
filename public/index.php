<?php

use App\Framework\Factory;
use App\Framework\Session;

require_once __DIR__ . '/../vendor/autoload.php';
$session = new Session();
$session->checkCurrent($_GET['bouquet']);
if(!empty($_POST))
  $session->addToList($_POST);
if(isset($_GET['bouquet']))
$myBouquet = Factory::init($session->getList())
->setBouquet($_GET['bouquet'])
->build();
?>
<!doctype html>
<html>

<head>
  <title>Bouquet</title>
  <link rel="stylesheet" href="/style.css">
  <script src="script.js"></script>
</head>

<body>

  <h1>Create Bouquet</h1>
  <div class="container">
    <div class="row">
      <label for="list_bouquet">Type of bouquet</label>
      <select id="list_bouquet" onchange="reloadPage(this)">
        <option value="">Choose a type</option>
        <?php
        foreach (Factory::getPossibleBouquets() as $bouquetName) :
        ?>
          <option 
          <?php if(isset($_GET['bouquet']) && $_GET['bouquet'] == $bouquetName):?>
          selected
          <?php endif;?>
          ><?= $bouquetName ?></option>
        <?php
        endforeach;
        ?>
      </select>
    </div>
  </div>
  <?php
  if(isset($myBouquet)):
    require_once __DIR__ . '/../app/views/form.php';
    ?>
    <div class="container">
      <?=$myBouquet->render()?>
    </div>
    <?php
  endif;
  ?>
</body>

</html>