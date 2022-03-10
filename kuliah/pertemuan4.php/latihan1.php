<?php 
// FUNCTION

// Built-in function
// Date ();
echo date("l, j F Y");
echo "<hr>";

// Time()
echo time();
//UNIX Timastamp / EPOCH Time
//Detik yang berlalu sejak 1 Januari 1978
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() - 60 * 60 *24 * 100);
echo "<hr>";
//mktime(0,0,0,0,0,0);
//mendapatkan detik pada tanggal tertentu
//jam.menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,23,1,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,23,1,2003));
echo "<hr>";

//MATH
echo pow(2,3); // pangkat
echo "<hr>";
echo round(1,18);
echo "<br>";
// Pembulatan 
// round(), coil(), floor();
echo round(2.9); // terdekat 
echo "<br>";
echo ceil(2.3); // ke atas (ceiling / langit) 
echo "<br>";
echo floor(2.9); // kebawah
echo "<hr>";


?>