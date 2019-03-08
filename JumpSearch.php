
<?php  
// Source code PHP Jump Search
  
function jumpSearch($arr, $x, $n) 
{ 
    // Blok yang akan dilompati
    $step = sqrt($n); 
  
    $prev = 0; 
    while ($arr[min($step, $n)-1] < $x) 
    { 
        $prev = $step; 
        $step += sqrt($n); 
        if ($prev >= $n) 
            return -1; 
    } 
  
    // Pencarian menggunakan Linear Search
    while ($arr[$prev] < $x) 
    { 
        $prev++; 
  
        // Jika elemen yang dicari tidak ketemu
        if ($prev == min($step, $n)) 
            return -1; 
    } 
    // Jika elemen ketemu
    if ($arr[$prev] == $x) 
        return $prev; 
  
    return -1; 
} 
  
// Daftar array 
$arr = array( 0, 1, 2, 35, 41, 5, 80, 19, 21, 
                90, 55, 121, 144, 200, 350, 686 ); 
// Array yang dicari
$x = 90;
$n = sizeof($arr) / sizeof($arr[0]); 
      
// Mencari array dengan Jump Search 
$index = jumpSearch($arr, $x, $n); 
  
// Cetak array yang ditemukan dalam index
echo "Number ".$x." is at index " .$index; 
return 0; 
?> 