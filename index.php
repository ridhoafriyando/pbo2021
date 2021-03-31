<?php
require_once 'Mahasiswa.php';

$ridho = new MahasiswaBaru('H1101191066','RIDHO ARJUMAL AFRIYANDO','1999-09-24','Pria');
$fulan = new Mahasiswa('H1101231057','Fulan','2007-06-12','Wanita');
$cetakFulan = new Cetak();

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?>
    <h3> RIDHO ARJUMAL AFRIYANDO </h3>
    <?php
      $ridho->tampilkanUmur();
      $ridho->bayarGedung();
    ?> 
    <h3> FULAN </h3>
    <?php
      $fulan->tampilkanUmur();
      $fulan->bayarGedung();
    ?><br>
    <?php
      $cetakFulan->cetakKtm('Dian Prawira'); 
    ?>

  </body>
</html>