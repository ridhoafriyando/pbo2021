<?php

namespace app;

use app\Minuman;

class  Cendol implements Minuman{
    public function buat(){
        echo " tambankan cendol, masukan santan dan air gula merah cair <br>";
        echo "tambahkan es batu";

    }
    public function minum(){
        echo "disedot dengan pipet/sedotan/selang";

    }
    public function diberikanPadaTeman(){
        echo "ini untukmu, tenang saja tida ada sianida";
    }

}
?>