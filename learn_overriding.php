<?php

class Pelatih {
  public $nama;

  public function sapa(){
    echo "Halo &nbsp".$this->nama."posisi anda saat ini adalah pelatih sepak bola\n";
  }
  public function latihan(){
    echo "kita akan mengadakan latihan pada tanggal"."&nbsp";
    date_default_timezone_set('Asia/Jakarta');

    $date = new DateTime('now');
    echo $date->format('d-m-Y p\u\k\u\l H:i:s')."&nbsp"."WIB";
  }
}
class KaptenTim extends Pelatih{
  public function sapa(){
    echo "hei"."&nbsp". $this->nama."anda itu kapten tim ya\n";
  }
  public function parentsapa(){
    return parent::sapa();
  }
}
$ridho = new KaptenTim();
$ridho->nama = 'Ridho'.'&nbsp';
$ridho->parentSapa();
$ridho->latihan();