<html>
<head>
</head>
<body>
  <?php
  $nim ="03743834";
  $nama = "Budi";
  $umur ="23";
  $nilai=82.23;
  $status = TRUE;
  echo "NIM : ".$nim."<br>";
  echo "Nama : ".$nama."<br>";
  print "Umur : ".$umur;print"<br>";
  printf("Nilai :%.3f<br>",$nilai);
  if ($status)
  echo "Status:Aktif";
  else
  echo "Status:Tidak Aktif";

  $a=10;
  $b=5;
  $c=12;
  $d=13;
  $e=11;
  $f=6;
  $g=4;

  echo "<p>10 ~ 5 ~ ",
    $a+$b-($b/2), "<br>";
  echo "10 ~ 6 ~ ",
    ($a + $f - 9) /2, "<br>";
  echo "10 ~ 6 ~ ",
    ($a + $f - 9) /2, " ~ ", ($f-($a + $f - 9) /2) *2* $a, "<br>";
  echo "11 ~ 6 ~ -6.5 ~ ",
    $e+$f-(-6.5*14-2)-4, "<br>";
  echo "11 ~ 5 ~ ",
    ($e-$b+4.5)*(-1), "<br>";
  echo "13 ~ 4 ~ ",
    ($d-$g-2.5)*(-1), "<br>";
  echo "13 ~ 4 ~ ",
    ($d-$g-3.44)*(-1), "<br>";
  echo "12 ~ 3 ~ ",
    ($d-$g-3.44)*(-1), "<br>";
  echo "11 ~ 4 ~ -5.5 ~ ",
    ($e-$g-1), "<br>";


  ?>
</body>
</html>
