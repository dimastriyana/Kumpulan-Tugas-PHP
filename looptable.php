<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table style="width: 50%;">
    <th style="background-color:#228B22;color:white;">Nomor</th>
    <th style="background-color:#228B22;color:white;">Keterangan</th>
    <?php
    $nomor = 1; 
    for ($i=1; $i <= 8; $i++) {
        if($i%2==0){
            $nama = 'Perempuan';
            $warna = '#eefbf3';
        }
        elseif ($i%2==1) {
            $nama = 'Laki';
            $warna = '#ccf3dc';
        }
        echo "<tr style='width:40%;'> <td style='background-color:#228B22;color:white;padding-left:10px;'>$nomor</td>
        <td style='background-color:$warna;padding-left:10px'>$nama</td> </tr>";
        $nomor = $nomor + 1;
    }
    ?>
</table>
</body>
</html>