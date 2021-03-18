<?php 
// $arr = [1, 2, 3, [4, 5, [7, 8, 9] ], 10, 11 ];
// // 8
// echo $arr[3][2][1];

$arr = [12,32,100,-1,20,13];
// 12 32 100 -1 20
// echo "$arr[0] ";
// echo "$arr[1] ";
// echo "$arr[2] ";
// echo "$arr[3] ";
// echo "$arr[4] ";

// for($i = 0; $i < count($arr); $i++) {
//   echo "$arr[$i] ";
// }

// foreach($arr as $a) {
//   echo "$a ";
// }


// $arr = [
//   [1,2,3], 
//   [4,5,6,10], 
//   [7,8,9, 100, 200, 300]
// ];

// 1 2 3
// 4 5 6
// 7 8 9

// for($i = ) {
//   for($j = ) {

//   }
// }

// for ($i = 0; $i < count($arr); $i++) {
// 	for ($j = 0; $j < count($arr[$i]); $j++) {
// 		// echo $arr[$i][$j] . " ";
// 		echo "{$arr[$i][$j]} ";;
// 	}
//   echo "<br>";
// }

// foreach($arr as $baris) {
//   foreach($baris as $angka) {
//     echo "$angka ";
//   }
//   echo "<br>";
// }


// $mahasiswa = ["Sandhika", "Doddy", "Erik"];
// Sandhika 
// Doddy 
// Erik

// foreach() {

// }
// foreach ($mahasiswa as $mhs) {
// 	echo $mhs;
//   echo "<br>";
// }


// $mahasiswa = ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"];
// Sandhika Galih
// 043040023
// sandhikagalih@unpas.ac.id
// Teknik Informatika

// foreach ($mahasiswa as $mhs) {
//   echo $mhs;
//   echo "<br>";
// }

// Nama : Sandhika Galih
// NIM : 043040023
// Email : sandhikagalih@unpas.ac.id
// Jurusan : Teknik Informatika
?>

<?php 
// $mahasiswa = ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"];

// echo "Nama : $mahasiswa[0] <br>";
// echo "NIM : $mahasiswa[1] <br>";
// echo "Email : $mahasiswa[2] <br>";
// echo "Jurusan : $mahasiswa[3] <br>";

$mahasiswa = [
  ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
  ["Doddy Ferdiansyah", "133040023", "doddy@gmail.com", "Teknik Mesin"],
  ["Erik", "143040123", "erik@icloud.com", "Teknik Informatika"]
];

// foreach ($mahasiswa as $mhs) {
//   foreach ($mhs as $m) {
//       echo $m;
//       echo "<br>";
//   }
// }

// Nama : Sandhika Galih
// NIM : 043040023
// Email : sandhikagalih@unpas.ac.id
// Jurusan : Teknik Informatika

// Nama : Doddy
// NIM : 043040023
// Email : doddy@unpas.ac.id
// Jurusan : Teknik Mesin

// Nama : Erik
// NIM : 043040023
// Email : sandhikagalih@unpas.ac.id
// Jurusan : Teknik Informatika

?>

<?php foreach( $mahasiswa as $mhs ) : ?>
	<ul>	
		<li>Nama : <?= $mhs[0]; ?></li>
		<li>NRP : <?= $mhs[1]; ?></li>
		<li>Email : <?= $mhs[2]; ?></li>
		<li>Jurusan : <?= $mhs[3]; ?></li>
	</ul>
<?php endforeach; ?>
