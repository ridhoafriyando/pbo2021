<?php
namespace application;

class Mahasiswa extends User{
  protected $nim;
  protected $nama;
  protected $tanggal_lahir;
  protected $jenis_kelamin;

  function __construct($nim, $nama, $tgl, $jk)
  {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->tanggal_lahir = $tgl;
    $this->jenis_kelamin = $jk;
  }
  protected function tampilkanAngkatan(){
    $akt = substr($this->nim, 5, -4);

  }
  protected function tampilkanNama(){
    echo $this->nama;
  }
}
?> 