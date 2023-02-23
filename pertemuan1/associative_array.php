<?php
$profileArray = [
   [ "nama" => "Devi Yuniarti", //string
    "kelas" => "TI06", //string
    "ipk" => 4, //integer
    "nim" => 0110222264, //integer
    "sudah_lulus" => false // boolean, true,false]
], [ 
    "nama" => "Asfira Aulia", //string
    "kelas" => "7", //string
    "ipk" => 4, //integer
    "nim" => 0110222264, //integer
    "sudah_lulus" => false // boolean, true,false]
]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}