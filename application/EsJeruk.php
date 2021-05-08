<?php

namespace app;

class EsJeruk implements Minuman{
    public function minum(){
        echo "minumlah";
    }
    public function buat(){
        echo "masukan blender";
    }
    public static function dilihat(){
        echo "cuma boleh dilihat tak boleh diminum";
    }

}
?>