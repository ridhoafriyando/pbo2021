<?php

require('vendor/autoload.php');
use App\Mahasiswa;

Mahasiswa::bergerak();

echo Mahasiswa::$status  . '<br/>';

$status_mahasiswa = Mahasiswa::NON_AKTIF;
echo $status_mahasiswa . '<br/>';


echo Mahasiswa::hitungsks(4,4);

?>