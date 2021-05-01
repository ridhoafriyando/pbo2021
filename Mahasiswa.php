<?php

namespace App;

class Mahasiswa extends User{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 0;
    public static $status = self::AKTIF;
    public static $sks;
    public static $bobot;
    
    function __construct($nim,$nama,$tgl,$jk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }
    
    public function tampilkanAngkatan(){
        $akt = substr($this->nim,5,2);
        echo $this->nama. ' merupakan angkatan tahun '. $akt . "<br>";
    }
    
    public function tampilkanUmur(){
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y  ;
    }
    
    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getTanggalLahir()
    {
        return $this->tanggal_lahir;
    }

    public function getJenisKelamin()
    {
        return $this->jenis_kelamin;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setTanggalLahir($tgl)
    {
        $this->tanggal_lahir = $tgl;
    }

    public function setJenisKelamin($jk)
    {
        $this->jenis_kelamin = $jk;
    }
    
    public static function bergerak()
    {
        echo "agen solusi, bukan agen perubahan <br/>";
    }

    final public function tuntaskan()
    {
        self::bergerak();
        echo "memperbaiki menjadi lebih baik <br/>";
    }

    // buat fungsi dengan nama hitungsks yang tipenya adalah static
    /**
     * parameter dari fungsi tersebut adalah $sks dan $bobot
     */

    public static function hitungsks($sks, $bobot)
    {
        self::$sks = $sks;
        self::$bobot = $bobot;
        return $sks*$bobot;
    }
}
?>