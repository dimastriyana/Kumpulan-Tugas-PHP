<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<select name='bulan'>
			
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
	</table>
</form>
</body>
</html>