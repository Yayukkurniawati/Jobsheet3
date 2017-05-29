<html><head>
<title>Statement IF</title></head>
<body>
<?php 
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
echo"<form action=\"$php_selt\" method=\"post\">";
$nilail=($_POST['nilail']);
echo"Berapa Nilai PHPmu? :
<input name=\"nilail\" value=\"$nilail\" size=\"3\" type=\"text\" value=\"$nilail\">
<input name=\"cek\" type=\"submit\" value=\"cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol cek
{ echo"<br><hl>";
	if($nilail=="")
		{ echo"Anda Belum Menentukan Nilai..!"; }
	elseif(!is_numeric($nilail)) //jika nilail tidak bertype numeric
		{ echo"Ini Bukan Nilai Angka";}
	else
		{
			if($nilail<=30)		// statement pertama
				{ echo"Anda Mendapat Nilai Huruf <b> E </b>";}
			elseif($nilail<=50)	// statement kedua
				{ echo"Anda Mendapat Nilai Huruf <b> D </b>";}
			elseif($nilail<=70)	// statement ketiga
				{ echo"Anda Mendapat Nilai Huruf <b> C </b>";}
			elseif($nilail<=85)	// statement keempat
				{ echo"Anda Mendapat Nilai Huruf <b> AB </b>";}
			else				// statement kelima
				{ echo"Anda Mendapat Nilai Huruf <b> A </b>";}
		}
	echo"</hl>";
}
?>
</body>
</html>