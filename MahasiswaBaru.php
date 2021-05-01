<?php

namespace App;

class MahasiswaBaru extends Mahasiswa{
    protected $no_registrasi;

    function __construct($nim,$nama,$tgl,$jk,$no_reg){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
        $this->no_registrasi = $no_reg;
    }

    function bayarGedung(){

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

    public function getNoReg()
    {
        return $this->no_registrasi;
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

    public function setNoReg($no_reg)
    {
        $this->no_registrasi = $no_reg;
    }

    // public function tuntaskan() //error karena tuntaskan merupakan function di class Mahasiswa adalah final
    // {
    //     echo "bawa perbaikan";
    // }
}
?>