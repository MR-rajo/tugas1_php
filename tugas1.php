<?php 

$judul = "HTML di dalam PHP";
echo "<h1>$judul</h1>";
$subjudul = "=== Biodata Diri ===";
echo "<h1>$subjudul</h1>";
echo "<hr/>";

$nama = "Nama Lengkap : Dimas Putra Agustav";
echo "<h4>$nama</h4>";
$tmptTglLhir = "Tempat,Tanggal Lahir : Jakarta, 17 Agusutus 2007";
echo "<h4>$tmptTglLhir</h4>";
$noTlp = "Nomor WhatsApp : 0819-3567-9330";
echo "<h4>$noTlp</h4>";
$dskripsi = "Deskripsi Diri : Saya adalah seorang mahasiswa yang ingin menjadi Programmer Sesungguhnya.";
echo " <h4>$dskripsi</h4>";
echo "<hr/>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP di dalam HTML</h1>
    <h1><?= $subjudul ?></h1>
    <hr>
    <h4><?= $nama ?></h4>
    <h4><?= $tmptTglLhir ?></h4>
    <h4><?= $noTlp ?></h4>
    <h4><?= $dskripsi ?></h4><br><br>
</body>
</html>


<?php 

$nilaiharian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80;

$apakahnilaiHarianBagus = $nilaiharian >=70;
$apakahnilaiUtsBagus = $nilaiUts >=80;
$apakahnilaiAkhirBagus = $nilaiharian >=80;

$hasil = $apakahnilaiHarianBagus && $apakahnilaiUtsBagus && $apakahnilaiAkhirBagus;
var_dump($hasil); echo "<br/>";
echo "nilai yang muncul adalah false,karena nilai di atas menggunakan operator logika AND,jika menggunakan operator tersebut maka nilai yang di input harus sesuai dengan yang lainnya maka bisa di nyatakan TRUE,tapi sebaliknya jika nilai yang di input berbeda beda,nilai satu dengan yang lainnya berbeda,maka nilai yang muncul adalah false"; echo "<br/>"; echo "<br/>"; echo "<br/>";
$hasil = $apakahnilaiHarianBagus || $apakahnilaiUtsBagus || $apakahnilaiAkhirBagus;
var_dump($hasil);  echo "<br/>";
echo "nilai yang muncul adalah TRUE,karna variabel di atas menggunakan operator OR,jika menggunakan operator OR walaupun nilai dari masing-masing variabel berbeda beda dan dari salah satunya memiliki nilai TRUE maka variabel tersebut akan bernilai TRUE";

?>