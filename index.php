<?php

require 'app/flowers.php';

use app\FlowerFactory;

if (isset($_POST['envoyer'])) {
 $type = $_POST['type'];
 $factory = new FlowerFactory();
 $flower = $factory->create($type);
 echo '<span style="color:#999b84;font-size:50px;display:block; text-align: center;margin:150px 0 50px 0">'
  . $flower->createFlower() . "</span>";
}
?>
<!doctype html>
<html>
<style>
 form {
  box-sizing: border-box;
  padding: 2rem;
  border-radius: 1rem;
  background-color: hsl(0, 0%, 100%);
  border: 4px solid hsl(0, 0%, 90%);

  margin-left: 400px;
  margin-right: 400px;
 }

 .container {
  display: flex;
 }

 .row {
  flex: 50%;
  padding: 10px;
  height: 70px;
  margin-left: 50px;
 }

 .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #e6d0ce;
  border: none;
  margin-left: 180px;
  border-radius: 15px;
  box-shadow: 0 9px #999;
 }

 .button:hover {
  background-color: #ddb7ab
 }

 .button:active {
  background-color: #ddb7ab;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
 }
</style>

<head>
 <title>Rose Or Iris</title>
</head>

<body>
 <form method="post">
  <div class="container">
   <div class="row">
    <input type="radio" name="type" value="Rose" checked /> Rose <br />
   </div>
   <div class="row">
    <input type="radio" name="type" value="Iris" /> Iris <br />
   </div>
  </div>
  <input class="button" type="submit" name="envoyer" value="Envoyer" />
 </form>
</body>

</html>