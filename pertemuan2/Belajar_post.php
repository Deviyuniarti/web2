<?php
$nama = $_POST['nama'];
$JK = $_POST['Jenis_Kelamin'];
$Hobi = $_POST['Hobi'];
$Umur = $_POST['Umur'];
$TanggalLahir = $_POST['Tanggal_Lahir'];
$Prodi= $_POST['Prodi'];

echo "Hasil Formulir Pendaftaran  <br>";
echo "Nama : " .$nama ."<br>";
echo "Jenis Kelamin : " .$JK . "<br>";
echo "Umur : " .$Umur . "<br>";
echo "Tanggal Lahir: " .$TanggalLahir . "<br>";
echo "Hobi : " ;
foreach($Hobi as $h){
    echo $h . ',' . "<br>";
}
echo "Prodi : " .$Prodi . "<br>";