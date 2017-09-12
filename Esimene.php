<?php
	//see on kommentaar, järgmisena paar muutujat
	$myName = "Daniel";
	$myFamilyName = "Sula";
	//vaatame, mis kell on ja määrame päeva osa
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	if ( $hourNow < 18){  //  <     >     <=    >=    !=
		$partofDay = "Varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "Koolipäev";
	}
	if ($hourNow > 16){
		$partOfDay = "Vaba aeg";
	}	
	//echo $partofDay;	
	//vaatame, kaua koolipäeva lõpuni aega on jäänud
	$timeNow = strtotime(date("d.m.Y H:i:s"));
	//echo $timeNow
	$schoolDayEnd = strtotime(date("d.m.Y" ." " ."15:45"));
	//echo $schoolDayEnd;
	$toTheEnd = $schoolDayEnd - $timeNow;
	echo "Koolipäeva lõpuni on jäänud". round($toTheEnd / 60);
?>

<!DOCTYPE html>
<html>
<head>

</head>
	<meta charset="utf-8">
	<title>Sula Pesa</title>
<body>
	<center>
	<img src="http://i.imgur.com/6OKJeJ5.png" alt="http://i.imgur.com/6OKJeJ5.png" width="592" height="356">
	
	<marquee scrollamount=3 behavior=alternate><p>The stories and information posted here are artistic works of fiction and falsehood.</p></marquee>
	<marquee scrollamount=3 behavior=alternate direction=right><p>Only a fool would take anything posted here as fact.</p></center></marquee>
	</center>
	<left><div style="background-color:black;color:white;padding:10px;">
	<h3>Autorist</h3>
	<p><b>Daniel Sula</b> (sündinud 29. septembril 1994 Tallinnas) on eesti kassisymfooniaorkestri juhataja ning helilooja, kes loob klassikalist ja vaimulikku muusikat. Ta on tuntud eelk6ige isikup2rase minimalistliku kompositsioonitehnika, nn <i>kassiv2ntsutamise</i> poolt, mida ta viljeleb alates 2000. aastate esimesest poolest.</p>
	<p>Kasutab harjumusest Notepad++ tekstiredaktorit</p>
	</div></left>
	<br></br>
	<?php
		echo "<p>See on esimene jupp PHP abil väljastatud teksti!</p>";
		echo "<p> Täna on  ";
		echo date("d.m.Y") .", kell lehe avamisel oli " .date("H:i:s")  ;
		echo ", käes on ". $partOfDay .".</p>";
	?>
	<?php
	echo $myName . " "  . $myFamilyName;
	?>

<center><footer>Sulstale Productions &copy;</footer></center>
</body>







</html>