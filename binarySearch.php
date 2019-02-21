<?php
echo "<form action='' method='POST'> Max data = <select name='max' required>
		<option value='10'> 10 </option>
		<option value='100' selected> 100 </option>
		<option value='1000'> 1000 </option>
		<option value='10000'> 10.000 </option>
		<option value='100000'> 100.000 </option>
		<option value='1000000'> 1.000.000 </option>
		<option value='100000000'> 100.000.000 </option>
		<option value='1000000000'> 1.000.000.000 </option> </select>";
echo "<br><input type='text' name='input' placeholder='angka yang ingin dicari' required> <input type='submit' name='submit' value='cari'></form>";

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return((float)$usec + (float)$sec);
}
$time_start = microtime(true);

$max = "";
$cari = "";	

if(isset($_POST['submit'])){
$max = $_POST['max'];
$cari = $_POST['input'];	
}

	$awal = microtime();
	$ketemu = false;

	$arr = array();
	for($i=1 ; $i<=$max ; $i++){
		Array_push($arr,$i);				// menambah isi array
	}

	$low = 0; 
	$high = count($arr) - 1;
	while ($low <= $high) {
		$mid = floor(($low + $high) / 2); 
		if($arr[$mid] == $cari) {
			$ketemu = true;
			$posisi = $mid;
		}
		if ($cari < $arr[$mid]) $high = $mid -1; 
		else $low = $mid + 1;
	}

	if($ketemu)
		echo "Angka ".$cari. " ditemukan di array [" . $posisi . "]";
	else
		echo $cari." Angka tidak ditemukan";
			
	$time_end = microtime_float();
	$time = $time_end - $time_start;
		
	echo "<b><br> Total execution time is $time seconds\n";
?>