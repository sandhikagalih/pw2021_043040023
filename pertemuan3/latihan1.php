<?php 
// echo 'Mulai <br>';

// for
// for ($i = 10; $i >= 1; $i--){
//     echo 'hello word ' . $i . ' x! <br>';
// }

// while
// $i = 10; // nilai awal
// while( $i >= 1 ){ // kondisi terminasi
//     echo "hello word $i x! <br>";
//     $i--; // increment / decrement
// }

// echo 'Selesai!';



// Nested Loop / Looping Bersarang 
// Looping di dalam looping

for($i = 40; $i >= 1; $i--) { // pengulangan baris
  for ($j = 1; $j <= $i; $j++) { // pengulangan angka
    echo $j;
  }
  echo "<br>";
}

// 1
// 12
// 123
// 1234
// 123
// 12
// 1




?>