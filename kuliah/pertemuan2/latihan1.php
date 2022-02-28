<?php 
    // pertemuan 2 - PHP dasar 
    // sintaks php

    // Standar output 
    // echo, print 
    // print_r
    // var, dump

    // Penulisan sintaks PHP 
    // 1. PHP di dalam HTMl
    // 2. HTML di dalam PHP
    
  echo "Hello World";
  echo "<hr>";

  //VARIABLE
  $nama ="Revina";
  echo $nama;
  echo "<br>";

  $nama2 = "Bella";
  echo $nama;
  echo "<hr>";

  //STRING 
  echo "Jum\'at";
  echo "<br>";
  echo "vina :\"slibawww\"";
  echo "<hr>";
  //interpolasi
  //mencetak isi variable
  //hanya ""
  echo "hanya bernama $nama2";
  echo "<br>";
  echo "price: $800";
  echo "<hr>";

  //OPERATOR
  echo 1+1*2-5;
  echo "<br>";
  $alas = 10;
  $tinggi = 10;
  $luas_segi_tiga = ($alas*$tinggi) / 2;
  echo $luas_segi_tiga;
  echo "<echo>";
  echo "<hr>";
  //concat
  //penggabung string
  //.
  $yoi="Vina";
  $yio="Bella";
  echo $yoi. "". $yio;
  echo "<hr>";

  //PERBANDINGAN 
  //<, >, <=, >=, ==, !=
  echo 4<5;
  echo "<br>";
  echo 0<5;
  echo "<hr>";
  
  //IDENTITAS
  //===, !==
  echo 10=== "10";
  echo 10=== 10;
  echo "<hr>";

  //DECREMENT/INCREMENT
  //++, --
  $x = 10;
  $x++;
  echo $x;
  echo "<br>";
  $y = 10;
  $y--;
  echo "<br>";
  echo ++$x;
  echo "<br>";
  echo $x++;
  echo "<br>";
  echo $x;


?>








