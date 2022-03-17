<?php 
if(isset($_POST['fnama']))
{
$fnama = $_POST['fnama'];
$matpel = $_POST['matpel'];
$nilai = $_POST['nilai'];



$keterangan = ($nilai >= 60) ? 'Lulus' : 'Gagal';
//2. tentukan grade A, B, C, D, E (if multi kondisi)
if($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if($nilai >= 75 && $nilai < 85) $grade = 'B'; 
else if($nilai >= 60 && $nilai < 75) $grade = 'C';
else if($nilai >= 30 && $nilai < 60) $grade = 'D'; 
else if($nilai >= 0 && $nilai < 30) $grade = 'E';
else $grade = '';  
//3. tentukan predikat (switch case)
switch ($grade) {
    case 'A': $predikat = 'Memuaskan'; break;
    case 'B': $predikat = 'Bagus'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
}


echo "<span class='success'>Hasil dari  : <b>METODE POST</b></span><br/>";
echo "Nama : ".$fnama."<br/>Matpel : ".$matpel."<br/>Nilai : ".$nilai."<br/>Grade : ".$grade."<br/>Predikat : ".$predikat;

}