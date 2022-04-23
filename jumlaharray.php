<html>
<head>
<title> Pemrograman PHP dengan array </title>
</head>
<body>
<?php
// penulisan array dapat dibuat seperti berikut
$nama[] = " Achmad  ";
$nama[] = " Yusuf ";
$nama[] = " Al Maruf ";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
// menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array = " .$jum_array;
?>
</body>
</html>