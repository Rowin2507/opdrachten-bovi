<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les 1 bap</title>
  </head>
<body>
  <header>
    <h1>CHOOSE YOUR DRINK</h1>
  </header>

  <form id="form" method="post">
    Choose between: <span>Cola | Beer | Water</span><p>
    <input type="text" name="beverage" id="tekstvak" autofocus>
    <input type="submit" name="submit" value="Go!">
  </form>


<div id="php">
<?php


  $beverage = $_POST['beverage'];


  switch ($beverage) {
    case 'cola':
    case 'Cola':
      echo 'Drink is cola <p />';
      echo'<img src="https://www.cocacola.nl/content/dam/GO/CokeZone/Common/global/logo/logodesktop/coca-cola-logo-260x260.png" style="height: 250px;" />';
      echo '<body style="background-color: #84141F">';
    break;

    case 'beer':
    case 'Beer':
      echo 'Drink not allowed! <p />';
      echo'<img src="https://www.hertogjanfanshop.nl/site/assets/img/logo-hertogjan-centered.png" style="height: 250px;" />';
      echo '<body style="background-color: #89641B">';


    break;

    case 'water':
    case 'Water':
      echo 'Drink is water <p />';
      echo'<img src="http://pngimg.com/uploads/water_bottle/water_bottle_PNG10169.png" style="height: 250px;" />';
      echo '<body style="background-color: #154F77">';
    break;

    case '':
      echo 'No drink chosen!<p />';
      echo '
      <script>
      document.getElementById("php").style.color="black";
      document.getElementById("form").style.color="black";
      document.getElementById("tekstvak").style.border="2px solid black";
      </script>';
    break;

    default:
      echo 'I dont know what drink that is';
      echo '
      <script>
      document.getElementById("php").style.color="black";
      document.getElementById("form").style.color="black";
      document.getElementById("tekstvak").style.border="2px solid black";
      </script>';
    break;
  }
 ?>

</div>

<style>
  body {font-family: sans-serif; margin: 0 auto; text-align: center;}
  header {background-color: black; color: red; padding: 3px 0; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); letter-spacing: 5px;}
  #form {margin-top: 200px; font-size: 19px; color: white;}
  span {font-weight: bold; color: red;}
  #php {font-size: 20px; color: white;}
  input[type=text] {
    width: 250px;
    height: 3em;
    box-sizing: border-box;
    font-size: 16px;
    background-color: transparent;
    color: red;
    padding: 12px 10px 12px 20px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    outline: none;
    margin-bottom: 30px;
  }
  #tekstvak {border: 2px solid white;}
  input[type=submit] {
    width: 65px;
    height: 3em;
    box-sizing: border-box;
    border: 2px solid red;
    font-size: 16px;
    font-weight: bold;
    background-color: red;
    text-align: center;
    color: white;
    padding: 12px 10px 12px 10px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    outline: none;
    cursor: pointer;
  }
  input[type=text]:focus {box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);}
  input[type=submit]:hover {background-color: black; border: 2px solid black; box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);}
  footer {width: 100%; background-color: black; color: red; padding: 15px 0; position: absolute; bottom: 0; font-weight: bold;}
</style>


<footer>
  Rowin Schmidt | 2017 | MediaCollege
</footer>
</body>
</html>
