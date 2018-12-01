<?php
$dimas1= "Silahkan <u>menuju</u> ke <a href =
'http://www.masuk.com'> Toko Kelontong
<strong>Aneka Barang</strong></a>";
$dimas2 = strip_tags($dimas1, "<strong><u>");
echo $dimas2;
?>