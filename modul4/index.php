<?php require "bangunRuang.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $name." | ".$NIM  ?></title>
  <style>
    .container{
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: space-around;
    }
    .class{
      width: 400px;
      height: 400px;
      border: 1px solid black;
      box-shadow: 3px 3px #888888;
      margin-top: 20px;
    }
    .identity{
      border: 1px solid black;
      box-shadow: 3px 3px #888888;
      padding: 20px;
    }
  </style>
</head>
<body>

  <table class="identity">
    <tr>
      <td>Nama</td>
      <td>: <?=$name?></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>: <?=$NIM?></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td>:  <?=$kelas?></td>
    </tr>
  </table><br><br>

  <div class="container">
    <!-- Kubus -->
    <div class="class">
      <center><H1>Kubus</H1></center>
      <center>
        <form action="" method="GET">
          <table>
            <tr>
              <td>side</td>
              <td><input type="text" name="side"></td>
            </tr>
          </table><br>
          <button type="submit" name="countLargeCube">Count Large</button>
          <br>
          <button type="submit" name="countVolumeCube">Count Volume</button>
        </form>
      </center>

      <?php
        if(isset($_GET["countLargeCube"])){
          $side = $_GET["side"];
          $Kubus1 = new Kubus($side);
          $result = $Kubus1->getLarge(); ?>
          <center>
            <h1>Large = <?php echo $result ?></h1>
          </center>
          

          
        <?php }
        if(isset($_GET["countVolumeCube"])){
          $side = $_GET["side"];
          $Kubus1 = new Kubus($side);
          $result = $Kubus1->getVolume(); ?>
          <center>
            <h1>Volume = <?php echo $result ?></h1>
          </center>

        <?php }
      ?>
    </div>

    <!-- Bola -->
    <div class="class">
      <center><H1>Bola</H1></center>
      <center>
        <form action="" method="GET">
          <table>
            <tr>
              <td>radius</td>
              <td><input type="text" name="radius"></td>
            </tr>
          </table><br>
          <button type="submit" name="countLargeBall">Count Large</button>
          <br>
          <button type="submit" name="countVolumeBall">Count Volume</button>
        </form>
      </center>

      <?php
        if(isset($_GET["countLargeBall"])){
          $radius = $_GET["radius"];
          $Bola1 = new Bola($radius);
          $result = $Bola1->getLarge(); ?>
          <center>
            <h1>Large = <?php echo $result ?></h1>
          </center>
          
        <?php }
        if(isset($_GET["countVolumeBall"])){
          $radius = $_GET["radius"];
          $Bola1 = new Bola($radius);
          $result = $Bola1->getVolume(); ?>
          <center>
            <h1>Volume = <?php echo $result ?></h1>
          </center>
        <?php }
      ?>
    </div>

  <!-- Balok -->
  <div class="class">
      <center><H1>Balok</H1></center>
      <center>
        <form action="" method="GET">
          <table>
            <tr>
              <td>length</td>
              <td><input type="text" name="length"></td>
            </tr>
            <tr>
              <td>wide</td>
              <td><input type="text" name="wide"></td>
            </tr><tr>
              <td>height</td>
              <td><input type="text" name="height"></td>
            </tr>
            
          </table>
          <br>
          <button type="submit" name="countLargeBeam">Count Large</button>
          <br>
          <button type="submit" name="countVolumeBeam">Count Volume</button>
        </form>
      </center>

      <?php
        if(isset($_GET["countLargeBeam"])){
          $length = $_GET["length"];
          $wide = $_GET["wide"];
          $height = $_GET["height"];

          $Balok1 = new Balok($length,$wide,$height);
          $result = $Balok1->getLarge(); ?>
          <center>
            <h1>Large = <?php echo $result ?></h1>
          </center>
          
        <?php }
        if(isset($_GET["countVolumeBeam"])){
          $length = $_GET["length"];
          $wide = $_GET["wide"];
          $height = $_GET["height"];

          $Balok1 = new Balok($length,$wide,$height);
          $result = $Balok1->getVolume(); ?>
          <center>
            <h1>Large = <?php echo $result ?></h1>
          </center>
        <?php }
      ?>
  
    </div>
  </div>
</body>
</html>
