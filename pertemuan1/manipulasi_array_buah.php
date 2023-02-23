<?php
$arrayBuah = ["Semangka","Melon","Mangga","Jeruk"];

//mengurutkan array
sort($arrayBuah);

//mrnghapus nilai array yang  paling terakhir
array_pop($arrayBuah);

//menghapus spesifik value 
unset($arrayBuah[1]);

//menambah value array dibelakang
array_push($arrayBuah,"Apel");

//menghapus value paling depan
array_shift($arrayBuah);

//menambah value array didepan
array_unshift($arrayBuah,"ceri");

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}