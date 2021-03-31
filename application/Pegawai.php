<?php
namespace application;

class Pegawai extends User{
    protected $nip;
    protected $nama;
    protected $no_hp;
    protected $gaji_pokok;

    function __construct($nip,$nama,$hp,$gp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gp;
    }

    function tampilkanGaji(){

    }

    public function getNip()
    {
        return $this->nip;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNoTelp()
    {
        return $this->no_hp;
    }

    public function getGajiPokok()
    {
        return $this->gaji_pokok;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNoTelp($hp)
    {
        $this->no_hp = $hp;
    }

    public function setGajiPokok($gp)
    {
        $this->gaji_pokok = $gp;
    }
}

?>