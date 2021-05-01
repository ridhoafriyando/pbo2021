<?php

require_once ('vendor/autoload.php');

use App\MyDate;
use App\frontend\MyDate as FMyDate;

$tanggal = new FMyDate();
$tgl = new MyDate();

echo $tanggal->penanggalan();

$tgl->setDay(22);
$tgl->setMonth(4);
$tgl->setYear(2021);

echo $tgl->getYear();
