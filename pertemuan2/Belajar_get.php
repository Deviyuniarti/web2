<?php
$nama = $_GET['nama'];
$JK = $_GET['Jenis_Kelamin'];
$Hobi = $_GET['Hobi'];
$Umur = $_GET['Umur'];
$TanggalLahir = $_GET['Tanggal_Lahir'];
$Prodi= $_GET['Prodi'];

echo "Hasil Formulir Pendaftaran  <br>";
echo "Nama : " .$nama ."<br>";
echo "Jenis Kelamin : " .$JK . "<br>";
echo "Umur : " .$Umur . "<br>";
echo "Tanggal Lahir: " .$TanggalLahir . "<br>";
echo "Hobi : " ;
foreach($Hobi as $h){
    echo $h . "<br>";
}
echo "Prodi: " .$Prodi . "<br>";