<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<?php 
 $ns1 = ['Nama'=>'Devi Yuniarti','nim'=>'0110222264','uts'=>95,'uas'=>90,'tugas'=>80];
 $ns2 = ['Nama'=>'Lilis Cahyani','nim'=>'0110222269','uts'=>50,'uas'=>85,'tugas'=>90];
 $ns4 = ['Nama'=>'Maulida Khairunnisa','nim'=>'0110222363','uts'=>89,'uas'=>96,'tugas'=>85];
 $ns3 = ['Nama'=>'Nur Magfirah','nim'=>'0110222247','uts'=>85,'uas'=>70,'tugas'=>90];
 $ns4 = ['Nama'=>'Maulida Khairunnisa','nim'=>'0110222254','uts'=>81,'uas'=>96,'tugas'=>85];
 $ns5 = ['Nama'=>'Putri Sestiani' ,'nim'=>'0110222538','uts'=>65,'uas'=>86,'tugas'=>80];
 $ns6 = ['Nama'=>'Rifika Mahardini Usman' ,'nim'=>'0110222753','uts'=>70,'uas'=>89,'tugas'=>90];
 $ns7 = ['Nama'=>'Tirta Sari' ,'nim'=>'0110222278','uts'=>90,'uas'=>65,'tugas'=>82];
 $ns8 = ['Nama'=>'Vinni Selfiani Fikdar' ,'nim'=>'0110222274','uts'=>87,'uas'=>90,'tugas'=>84];
 $nilai= [$ns1, $ns2 , $ns3, $ns4, $ns5, $ns6, $ns7, $ns8];
?>
<h2 style= "color:red">Daftar Nilai Mahasiswa</h2>
<table border="2" style="text-align: center;" width="100%">
    <thead style= "background:green">
        <tr>
            <th>Nama</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
        </thead>
        <tbody style="background:lightGreen">
            <?php
            foreach($nilai as $ns){ 
            echo '<tr><td>'.$ns['Nama'].'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
        }
        ?>
        </tbody>
    </thead>
</table>
</body>
</html>