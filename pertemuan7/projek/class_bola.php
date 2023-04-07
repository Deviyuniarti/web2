<?php
    class Bola{
        public $jarijari;
        public $phi;
    

    function __consctruct($r,$phi) {
        $this->jarijari = $r;
        $this->phi= $phi;
        
    }

    function hitungvolume($r)
    {
        $phi = 3.14;
        $volume = 4/3 * $phi * pow($r, 3);
        return $volume;
    }

    function hitungLuas($r) 
    {
        $phi = 3.14;
        $LuasSisi = 4 * $phi * pow($r,2);
        return $LuasSisi;
    }
}   
    $bola = new Bola();
    echo "Volume bola dengan jari-jari 7 cm adalah " . $bola->hitungVolume(7) . " cm³";
    echo "<br>";
    echo "Luas Sisi  dengan sisi 10 cm adalah " . $bola->hitungLuas(10) . " cm³";
?>