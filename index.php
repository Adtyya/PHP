<?php 

// TRAPESIUM
$atas = 10;
$bawah = 10;
$tinggi = 10;
$luas = (($atas + $bawah)*$tinggi)/2;
echo "trapesium<br>";
echo "Rumus = atas * bawah <br>";
echo "atas = 10 bawah=10\n";
echo "Jadi luas trapesium adalah $luas cm<br>" ;
// SEGITIGA
echo "<br>";
$alas = 10;
$tinggi = 15;
$luas_segitiga = 1/2 * $alas * $tinggi;
echo "segitiga<br>";
echo "Rumus = 1/2 * alas * tinggi<br>";
echo "alas = 10 tinggi = 15\n";
echo "jadi luas Segitiga adalah $luas_segitiga<br>" ;

// Lingkaran
echo "<br>";
$jari_jari = 10;
$phi = 3.14;
$luas_lingkaran = $phi * $jari_jari;
echo "Lingkaran<br>";
echo "Rumus = phi * r<br>";
echo "phi = 3.14 jari-jari = 10\n";
echo "jadi luas lingkaran adalah $luas_lingkaran<br>" ;

//Persegi
echo "<br>";
$sisi = 20;
$luas_persegi = $sisi * $sisi;
echo "Persegi<br>";
echo "Rumus = sisi * sisi<br>";
echo "sisi = 20\n";
echo "jadi luas persegi adalah $luas_persegi<br>" ;

//Tabung
echo "<br>";
$jariJ = 3;
$tinggiT = 3;
$luas_permukaan_tabung = 2 * 3.14 * $jariJ * $tinggiT;
echo "Tabung<br>";
echo "Rumus = 2 * 3.14 * jari-jari * tinggi<br>";
echo "jari-jari = 3 tinggi = 3\n";
echo "jadi luas permukaan tabung adalah $luas_permukaan_tabung<br>" ;

?>