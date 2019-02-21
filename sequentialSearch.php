<?php
ini_set("memory_limit","256M");

echo "<form action='' method='POST'> Max data = <select name='max' required>
		<option value='10'> <selected> 10 </option>
		<option value='100'> 100 </option>
		<option value='1000'> 1000 </option>
		<option value='10000'> 10.000 </option>
		<option value='100000'> 100.000 </option>
		<option value='1000000'> 1.000.000 </option>
		<option value='100000000'> 100.000.000 </option>
		<option value='1000000000'> 1.000.000.000 </option> </select>";
echo "<br><input type='text' name='input' placeholder='angka yang ingin dicari' required> <input type='submit' name='submit' value='cari'></form>";

$max = "";
$cari = "";	

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return((float)$usec + (float)$sec);
}
$time_start = microtime(true);

if(isset($_POST['submit'])){
$max = $_POST['max'];
$cari = $_POST['input'];	
}

	$awal = microtime();
	$ketemu = false;


	$arr = array();
	for($i=1 ; $i<=$max ; $i++){
	Array_push($arr,$i);			// menambah isi array
	}
	shuffle($arr);						// acak isi array

	for ($i=0; $i<count($arr); $i++){
		if($arr[$i] == $cari) {
			$ketemu = true;
			$posisi = $i;
		}
	  }
		
	  if($ketemu)
	  echo "Angka ".$cari. " ditemukan di array [" . $posisi . "]";
  else
	  echo $cari." Angka tidak ditemukan";
			
		$time_end = microtime_float();
		$time = $time_end - $time_start;
			
		echo "<b><br> Total execution time is $time seconds\n";
?>