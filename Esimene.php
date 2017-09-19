<?php
	//see on kommentaar, järgmisena paar muutujat
	$myName = "Daniel";
	$myFamilyName = "Sula";
	
	$monthNamesEt = ["Jaanuar", "Veebruar", "Märts", "Aprill", "Mai", "Juuni", "Juuli", "August", "September", "Oktoober", "November", "Detsember"];
	//var_dump ($monthNamesEt);
	//echo $monthNamesEt[1];
	$monthNow = $monthNamesEt[date("n")-1];
	
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
	//echo "Koolipäeva lõpuni on jäänud" . round($toTheEnd / 60);
	
	//tegeleme vanusega
	$myBirthYear;
	$ageNotice = "";
	//var_dump($_POST);
	if ( isset($_POST["birthYear"]) ) {
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST["birthYear"];
		//echo $myAge;
		$ageNotice = "<p>Teie vanus on ligikaudu " . $myAge. " aastat.</p>";
		
		$ageNotice .= "<p>Olete elanud järgnevatel aastatel:</p>";
		$ageNotice .= "\n <ul> \n";
		
		$yearNow = date("Y");
		for ($i = $myBirthYear; $i <= $yearNow; $i ++) {
			$ageNotice .= "\n <li>" .$i ."</li> \n";
		}
		$ageNotice .="</ul>";
	}
	//teeme tsükli
	/*for ($i = 0; $i<5; $i ++) {
		echo "ha";
	}*/
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
		echo date("d. ") .$monthNow .date(" Y") .", kell lehe avamisel oli " .date("H:i:s")  ;
		echo ", käes on ". $partOfDay .".</p>";
	?>
	<?php
	echo $myName . " "  . $myFamilyName;
	?>
	<h2>Natuke aastaarvudest</h2>
	<form method="POST">
		<label> Teie sünniaasta: </label>
		<input type="number" name="birthYear"  id="birthYear" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		<input type="submit" name="submitbirthYear" value="Kinnita">
	
	</form>
	
	<?php
		if ($ageNotice != "") {
			echo $ageNotice;
		}
	
	?>
	
<center><footer>Sulstale Productions &copy;</footer></center>
</body>
</html>