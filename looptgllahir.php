<!DOCTYPE html>
<html>
<head>
	<title>Ulang Tahun</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<select name='bulan'>
				<?php 
				// $i=1;
				// $month = strtotime('2018-01-01');
				// while ($i <13){
				// $month_name = date('F', $month);
				// echo '<option value="'. $month_name.'">'.$month_name.'</option>';
				// $month = strtotime('+1 month', $month);
				// $i++;
				// }
								$mox = array("1" => "Januari",
											"2" => "Februari",
											"3" => "Maret",
											"4" => "April",
											"5" => "Mei",
											"6" => "Juni",
											"7" => "Juli",
											"8" => "Agustus",
											"9" => "September",
											"10" => "Oktober",
											"11" => "November",
											"12" => "Desember",);
				$x = 1;
				while ($x <= 12) {
					 echo '<option value="'.$mox[$x].'">'.$mox[$x].'</option>';
				$x = $x + 1;
				}
				?>
			</select>
			<select name='tanggal'>
				<?php 
				$i=1;
				while ($i < 32){
					echo "<option value='$i'>$i</option>";
				$i++;
				}
				?>
			</select>
			<select name='tahun'>
				<?php 
				$p=1945;
				while ($p <= 2018){
					echo "<option value='$p'>$p</option>";
				$p++;
				}
				?>
			</select>
		</br>
			<input type="submit" name="button" value="Submit"></input>
		</tr>
	</table>
</form>
</body>
</html>



<?php    
if(isset($_POST['button'])){ //check if form was submitted
//untk tahun //
	//convert to variable//
$tahun = $_POST["tahun"];
$tanggal = $_POST["tanggal"];
$bulan = $_POST["bulan"];
//tahun
$umur = 2018 - $tahun;
//Bulan
$blnskrng = date("m");
$blninpt = array_search("$bulan",$mox);
if($blnskrng > $blninpt){
	$barbar = $blnskrng - $blninpt;
}elseif ($blninpt > $blnskrng) {
	$umur = $umur - 1;
	$xxx = $blninpt - $blnskrng;
	$barbar = 12 - $xxx;
	}
if($bulan == "Februari" && $tanggal > 28){
	echo "<script>alert('Tolong Masukkan Data yang Valid!!');</script>";
}else{
echo "Tanggal Lahir Anda adalah : $tanggal $bulan $tahun, Usia anda saat ini $umur Tahun $barbar Bulan"; 
}
}   
?>