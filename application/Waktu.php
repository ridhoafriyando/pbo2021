<?php

namespace App;

Trait Waktu
{
  public function pERTEMUAN(){
    date_default_timezone_set('Asia/Jakarta');

    $date = new DateTime('now');
    echo $date->format('d-m-Y p\u\k\u\l H:i:s')."&nbsp"."WIB";
  }
}