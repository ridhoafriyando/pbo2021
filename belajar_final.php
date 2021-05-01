<?php

require_once('vendor/autoload.php');

use App\MahasiswaBaru;

$ridho = new MahasiswaBaru('H1101191066, Ridho Arjumal Afriyando', '24-09-1999', 'L', '1111100000');

$ridho->tuntaskan();
$ridho->hitungSks();
