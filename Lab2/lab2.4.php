<html>
<head>
<title>laboratorio 2.4</title>
</head>
<body>
<?php
$personas = array ("juan" => "Panama",
"john" => "USA",
"eica" => "finlandia",
"kusanagi" => "japon");

foreach ($personas as $persona => $pais){
	print "$persona es de $pais<br>";
}
 echo "<br>".$persona["juan"];
 echo "<br>".$persona["eica"];
?>
</body>
</html>