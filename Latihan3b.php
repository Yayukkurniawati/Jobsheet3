<html>
<head>
<title>Latihan Perulangan For dan While</title>
</head><body>
<?php
echo "Nama  : Yayuk Kurniawati<br>";
echo "Kelas : SKA-15.A2<br>";
echo "NPM   : 888740306150114<br>";
echo "Matakuliah   : Pemrograman Web<br>";
echo "<hr>";
echo "<h3>Program Sederhana Perulangan For</h3>";
echo "<hr>";

$month = date("m");
$year = date("Y");
$day = date("d");


	// t untuk menghitung jumlah hari dalam sebulan
	// ini digunakan untuk menampilkan semua tanggal pada bulan ini 
	$endDate = date("t", mktime(0,0,0,$month,$day,$year));
	
	// membuat tabel kalender 
	echo'<font face = "cambria" size = "2">';
	echo'<table align = "center" border ="0" cellpadding = 8 cellspacing = 8 style = "" ><td align = center>';
	
	// menampilkan hari ini
	echo "<h2> Hari ini Tanggal : ".date("  d F Y </h2>", mktime(0,0,0,$month,$day,$year));
	echo'</td></table>';
	
	
	// membuat tabel baris nama-nama hari
	echo'<table align = "center" border ="2" cellpadding = 8 cellspacing = 8 style = "border:2px solid #000"> 
		<tr bgcolor ="#000000">
		<td align = center><font color = red>Minggu</font></td>
		<td align = center><font color = white>Senin</font></td>
		<td align = center><font color = white>Selasa</font></td>
		<td align = center><font color = white>Rabu</font></td>
		<td align = center><font color = white>Kamis</font></td>
		<td align = center><font color = white>Jumat</font></td>
		<td align = center><font color = white>Sabtu</font></td>
		</tr>';
		
		// cek tanggal 1 hari sekarang
		$s = date ("w", mktime (0,0,0,$month,1,$year));
		for ($ds = 1; $ds<=$s;$ds++) {
			echo "<td style = \"font-family:cambria; color:#000000\" align = center valign = middle bgcolor = \"#FFFFFF\"></td>";}
		
		for ($d = 1; $d<= $endDate; $d++)
		{
			// jika variabel w= 0 disini 0 adalah hari minggu akan membuat baris baru dengan </tr>
			if (date("w", mktime(0,0,0,$month,$d,$year)) == 0) {echo "<tr>";}
			$fontColor = "#000000";
			
			// menentukan warna pada tanggal hari biasa 
			if (date("D", mktime(0,0,0,$month,$d,$year)) == "Sun") 
			{$fontColor = "red"; }
			
		echo "<td style = \"font-family:cambria; color:#333333\" align = center valign = middle> <span style=\"color: $fontColor\"> $d </span></td>";
		
		// jika variabel w = 6 disini 6 adalah hari Sabtu maka akan pindah baris dengan menutup baris</tr>
		if(date("w", mktime(0,0,0, $month, $d, $year)) == 6)
		{
		echo"</tr>";
		}
		
		}
		echo'</table>';
?>

</body>
</html>
