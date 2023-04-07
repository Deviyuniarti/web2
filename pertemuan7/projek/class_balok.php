<?php

class Balok {
  public $panjangbalok;
  public $lebarbalok;
  public $tinggi;

  function __construct($p, $l, $t) {
    $this->panjangbalok = $p;
    $this->lebarbalok = $l;
    $this->tinggibalok = $t;
  }

  function hitungVolume() {
    return $this->panjangbalok * $this->lebarbalok * $this->tinggibalok;
  }

  function hitungLuasSisi() {
    return 2 * (($this->panjangbalok * $this->lebarbalok) + ($this->panjangbalok * $this->tinggibalok) + ($this->lebarbalok * $this->tinggibalok));
  }
}
$balok = new Balok(5, 6, 10);
echo "Volume balok adalah =  " . $balok->hitungVolume() . " cm³" ; 
echo "<br>";
echo "Luas sisi balok adalah = " . $balok->hitungLuasSisi() . " cm²";