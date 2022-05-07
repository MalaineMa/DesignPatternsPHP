<?php

require 'app/flowers.php';

use app\FlowerFactory;

if (isset($_POST['envoyer'])) {
 $type = $_POST['type'];
 $factory = new FlowerFactory();
 $flower = $factory->create($type);
 echo '<span style="color:green;font-size:24px;display:block">' . $flower->createFlower() . "</span>";
}
?>
<!doctype html>
<html>

<head>
 <title>Rose Or Iris</title>
</head>

<body>
 <form method="post">
  <input type="radio" name="type" value="Rose" checked /> Rose <br />
  <input type="radio" name="type" value="Iris" /> Iris <br />
  <input type="submit" name="envoyer" value="Envoyer" />
 </form>
</body>

</html>