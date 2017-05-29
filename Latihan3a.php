<html>
<head>
<title>latihan Perulangan For dan While</title>
</head>
<body>
<?php
echo "Nama  : Yayuk Kurniawati<br>";
echo "Kelas : SKA-15.A2<br>";
echo "NPM   : 888740306150114<br>";
echo "Matakuliah   : Pemrograman Web<br>";
echo "<hr>";
echo "<h3>Program Sederhana Perulangan For</h3>";
echo "<hr>";

echo'<font face = "cambria" size = "2">';
echo'<table align = "center" border ="0" cellpadding = 8 cellspacing = 8 style = "" ><td align = center>';
echo "<h3> Ini adalah Statement Pernyataan For </h3>";
echo'</td></table>';

echo '<table align = "center" border ="2" cellpadding = 5 cellspacing = 5 style = "border:2px solid #000">';
$b=1;
for ($a=5;$a<=8;$a++)
{	
echo "<td>";
	$c=$b*$a; echo("$b x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";

$d=2;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$d*$a; echo("$d x $a = $c");
	echo("<br>");	
echo "</td>";
}

echo "<tr>";
$e=3;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$e*$a; echo("$e x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";
$f=7;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$f*$a; echo("$f x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "<tr>";
$g=12;
for ($a=5;$a<=8;$a++)
{
echo "<td>";
	$c=$g*$a; echo("$g x $a = $c");
	echo("<br>");
echo "</td>";
}

echo "</table>"
?>
</body>
</html>