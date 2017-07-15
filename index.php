<?php
ini_set('display_errors', 0);

if ($_GET['q'])
    $q = $_GET['q'];



$length = strlen($q);

?>

<html>


<head>
<link href="https://fonts.googleapis.com/css?family=Catamaran:700" rel="stylesheet">
<style>

	body {
	background-color: #33c4e2;
		
	}

	.content>p {
    color: white;
    font-family: 'Catamaran', sans-serif;
    font-size: 8vw;
    margin-left: 3.4vw;
}



	
	.field {
    display: flex;
    margin: auto;
    width: 55%;
}

.field>input[type=text],
.field>button {
  display:block;
    font-size: 20px;

}

.field>input[type=text] {
  flex: 1;
    padding: 0.6em;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

.field>input[type=submit] {
    padding: 0.6em 1.5em;
    background-color: rgb(219, 89, 69);
    color: white;
    border: none;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;

}

@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);
body {
  font-family: 'Montserrat', sans-serif;
    ]
	
	
	
	
	
	
	
</style>
</head>


<body>

<form action="index.php?q=.$_GET['q']. method="post>
	    
        <div class="field" id="searchform">
        <input style="border:none;" type="text" id="q" name="q" placeholder="zoek een nummer dat je..." />
        <input type="submit" value="Search">
	    </div>
	    </form>
<p>typ een nummer in waarvan je wil zien hoe je het schrijft (max 999)</p>
<p>bijv 53 //drieenvijftig</p>	
	
	
<div class="content">
<p><?php

$een = 'een';
    //1

$twee = 'twee';
    //2

$drie = 'drie';
    //3

$vier = 'vier';
    //4

$vijf = 'vijf';
    //5

$zes = 'zes';
    //6

$zeven = 'zeven';
    //7

$acht = 'acht';
    //8

$negen = 'negen';
    //9



$tien = 'tien';
    //10

$elf = 'elf';
    //11

$twaalf = 'twaalf';
    //12

$dertien = 'dertien';
    //13

$veertien = 'veertien';
    //14

$vijftien = 'vijftien';
    //15

$zestien = 'zestien';
    //16

$zeventien = 'zeventien';
    //17

$achttien = 'achtien';
    //18

$negentien = 'negentien';
    //19



$twintig = 'twintig';
    //20

$dertig = 'dertig';
    //30

$veertig = 'veertig';
    //40

$vijftig = 'vijftig';
    //50

$zestig = 'zestig';
    //60

$zeventig = 'zeventig';
    //70

$tachtig = 'tachtig';
    //80

$negentig = 'negentig';
    //90



$honderd = 'honderd';
    //10^2

$duizend = 'duizend';
    //10^3

$miljoen = 'miljoen';
    //10^6

$miljard = 'miljard';
    //10^9

$biljoen = 'biljoen';
    //10^12

$biljard = 'biljard';
    //10^15

$triljoen = 'triljoen';
    //10^18

$triljard = 'triljard';
    //10^21

$quadriljoen = 'quadriljoen';
    //10^24

$quadriljard = 'quadriljard';
    //10^27





$length = strlen($q);
//hoelang is het getal zelf bijv bij 59673968 is variable length '8'


if (strpos($length, '1') !== false) {
    
    
    if (strpos($q, '1') !== false) {
echo $een;    
}
    if (strpos($q, '2') !== false) {
echo $twee;    
}
    if (strpos($q, '3') !== false) {
echo $drie;    
}
    if (strpos($q, '4') !== false) {
echo $vier;    
}
    if (strpos($q, '5') !== false) {
echo $vijf;    
}
    if (strpos($q, '6') !== false) {
echo $zes;    
}
    if (strpos($q, '7') !== false) {
echo $zeven;    
}
    if (strpos($q, '8') !== false) {
echo $acht;    
}
    if (strpos($q, '9') !== false) {
echo $negen;    
}    
}



if (strpos($length, '2') !== false) {
	$eenheden = substr($q, 1);

	
	$tiental = substr($q, 0, -1);

	
	if (strpos($q, '10') !== false)	{
		global $c;
		$c = $tien;
	}

	if (strpos($q, '11') !== false)	{
		global $c;
		$c = $elf;
	}
	if (strpos($q, '12') !== false)	{
		global $c;
		$c = $twaalf;
	}
	if (strpos($q, '13') !== false)	{
		global $c;
		$c = $dertien;
	}
	if (strpos($q, '14') !== false)	{
		global $c;
		$c = $veertien;
	}
	if (strpos($q, '15') !== false)	{
		global $c;
		$c = $vijftien;
	}
	if (strpos($q, '16') !== false)	{
		global $c;
		$c = $zestien;
	}
	if (strpos($q, '17') !== false)	{
		global $c;
		$c = $zeventien;
	}
	if (strpos($q, '18') !== false)	{
		global $c;
		$c = $achtien;
	}
	if (strpos($q, '19') !== false)	{
		global $c;
		$c = $negentien;
	}
	
	if (strpos($tiental, '2') !== false)	{
		global $a;
		$a = $twintig;
	}
	if (strpos($tiental, '3') !== false)	{
		global $a;
		$a = $dertig;
	}
	if (strpos($tiental, '4') !== false)	{
		global $a;
		$a = $veertig;
	}
	if (strpos($tiental, '5') !== false)	{
		global $a;
		$a = $vijftig;
	}
	if (strpos($tiental, '6') !== false)	{
		global $a;
		$a = $zestig;
	}
	if (strpos($tiental, '7') !== false)	{
		global $a;
		$a = zeventig;
	}
	if (strpos($tiental, '8') !== false)	{
		global $a;
		$a = $tachtig;
	}
	if (strpos($tiental, '9') !== false)	{
		global $a;
		$a = $negentig;
	}
	
	
	if (strpos($eenheden, '1') !== false)	{
		global $b;
		$b = $een;
	}
	if (strpos($eenheden, '2') !== false)	{
		global $b;
		$b = $twee;
	}
	if (strpos($eenheden, '3') !== false)	{
		global $b;
		$b = $drie;
	}
	
	if (strpos($eenheden, '4') !== false)	{
		global $b;
		$b = $vier;
	}
	if (strpos($eenheden, '5') !== false)	{
		global $b;
		$b = $vijf;
	}
	if (strpos($eenheden, '6') !== false)	{
		global $b;
		$b = $zes;
	}
	if (strpos($eenheden, '7') !== false)	{
		global $b;
		$b = $zeven;
	}
	if (strpos($eenheden, '8') !== false)	{
		global $b;
		$b = $acht;
	}
	if (strpos($eenheden, '9') !== false)	{
		global $b;
		$b = $negen;
	}
	

	
	if (strpos($eenheden, '0') !== false)	{
		global $c;
		global $a;
		$c = $a;
	}
	else{
		$c = ($b . 'en' . $a);
	}


	$eindgetal = $c;
	echo $eindgetal;
	
}



if (strpos($length, '3') !== false) {
	$honderdtal = substr($q, 0, -2);
	$tiental = substr($q, 1, -1);
	$eenheden = substr($q, -1);
	$overig = substr($q, 1);

	
	
	if (strpos($honderdtal, '1') !== false)	{
		global $a;
		$a = '';
	}
	if (strpos($honderdtal, '2') !== false)	{
		global $a;
		$a = $twee;
	}
	if (strpos($honderdtal, '3') !== false)	{
		global $a;
		$a = $drie;
	}
	if (strpos($honderdtal, '4') !== false)	{
		global $a;
		$a = $vier;
	}
	if (strpos($honderdtal, '5') !== false)	{
		global $a;
		$a = $vijf;
	}
	if (strpos($honderdtal, '6') !== false)	{
		global $a;
		$a = $zes;
	}
	if (strpos($honderdtal, '7') !== false)	{
		global $a;
		$a = $zeven;
	}
	if (strpos($honderdtal, '8') !== false)	{
		global $a;
		$a = $acht;
	}
	if (strpos($honderdtal, '9') !== false)	{
		global $a;
		$a = $negen;
	}
	
	
	
	$d = 'en';
	
	
	if (strpos($tiental, '1') !== false)	{
		global $b;
		global $d;
		$b = $tien;
		$d = '';
	}
	
	if (strpos($tiental, '2') !== false)	{
		global $b;
		$b = $twintig;
	}
	if (strpos($tiental, '3') !== false)	{
		global $b;
		$b = $dertig;
	}
	if (strpos($tiental, '4') !== false)	{
		global $b;
		$b = $veertig;
	}
	if (strpos($tiental, '5') !== false)	{
		global $b;
		$b = $vijftig;
	}
	if (strpos($tiental, '6') !== false)	{
		global $b;
		$b = $zestig;
	}
	if (strpos($tiental, '7') !== false)	{
		global $b;
		$b = $zeventig;
	}
	if (strpos($tiental, '8') !== false)	{
		global $b;
		$b = $tachtig;
	}
	if (strpos($tiental, '9') !== false)	{
		global $b;
		$b = $negentig;
	}
	
	
	
	
	
	if (strpos($eenheden, '1') !== false)	{
		global $c;
		$c = $een;
	}
	if (strpos($eenheden, '2') !== false)	{
		global $c;
		$c = $twee;
		global $d;
		$d = 'ën';
	}if (strpos($eenheden, '3') !== false)	{
		global $c;
		$c = $drie;
		global $d;
		$d = 'ën';
	}if (strpos($eenheden, '4') !== false)	{
		global $c;
		$c = $vier;
	}if (strpos($eenheden, '5') !== false)	{
		global $c;
		$c = $vijf;
	}if (strpos($eenheden, '6') !== false)	{
		global $c;
		$c = $zes;
	}if (strpos($eenheden, '7') !== false)	{
		global $c;
		$c = $zeven;
	}if (strpos($eenheden, '8') !== false)	{
		global $c;
		$c = $acht;
	}if (strpos($eenheden, '9') !== false)	{
		global $c;
		$c = $negen;
	}

	
	
	
	
if (strpos($overig, '10') !== false)	{
		global $c;
		global $b;
		global $d;
		$c = $tien;
		$b = '';
		$d = '';
	}
	
	if (strpos($overig, '11') !== false)	{
		global $c;
		global $b;
		global $d;
		$c = $elf;
		$b = '';
		$d = '';
	}
	
	if (strpos($overig, '12') !== false)	{
		global $c;
		global $b;
		global $d;
		$c = $twaalf;
		$b = '';
		$d = '';
	}
	
	if (strpos($overig, '13') !== false)	{
		global $c;
		global $b;
		global $d;
		$c = $dertien;
		$b = '';
		$d = '';
	}
	
	if (strpos($overig, '14') !== false)	{
		global $c;
		global $b;
		global $d;
		$c = $veertien;
		$b = '';
		$d = '';
	}
	
if (strpos($tiental, '0') !== false)	{
	if (strpos($eenheden, '0') !== false)	{
		
		$d = '';
		
	}
}
	
	
	echo ($a . 'honderd' . $c . $d . $b . '');

}
	
	
if (strpos($length, '4') !== false) {
	$duizendtal = substr($q, 0, -3);
	$honderdtal = substr($q, 1, -2);
	$tiental = substr($q, 2, -1);
	$eental = substr($q, -1);
	
	
	if (strpos($honderdtal, '0') !== false)	{
	if (strpos($duizendtal, '1') !== false)	{
	$c = $duizend;
	}
	
	if (strpos($duizendtal, '2') !== false)	{
	$c = $twee . $duizend;
	}
	
	if (strpos($duizendtal, '3') !== false)	{
	$c = $drie . $duizend;
	}
	
	if (strpos($duizendtal, '4') !== false)	{
	$c = $vier . $duizend;
	}
	
	if (strpos($duizendtal, '5') !== false)	{
	$c = $vijf . $duizend;
	}
	
	if (strpos($duizendtal, '6') !== false)	{
	$c = $zes . $duizend;
	}
	
	if (strpos($duizendtal, '7') !== false)	{
	$c = $zeven . $duizend;
	}
	
	if (strpos($duizendtal, '8') !== false)	{
	$c = $acht . $duizend;
	}
	
	if (strpos($duizendtal, '9') !== false)	{
	$c = $negen . $duizend;
	}
	
	
	}
	
	
	if (strpos($duizendtal, '1') !== false)	{
	
	
	if (strpos($honderdtal, '1') !== false)	{
	$c = $elf . $honderd;
	}	else if (strpos($honderdtal, '2') !== false) {
		$c = $twaalf . $honderd;
	}
	else if (strpos($honderdtal, '3') !== false) {
		$c = $dertien . $honderd;
	}
	else if (strpos($honderdtal, '4') !== false) {
		$c = $veertien . $honderd;
	}
	else if (strpos($honderdtal, '5') !== false) {
		$c = $vijftien . $honderd;
	}
	else if (strpos($honderdtal, '6') !== false) {
		$c = $zestien . $honderd;
	}
	else if (strpos($honderdtal, '7') !== false) {
		$c = $zeventien . $honderd;
	}
	else if (strpos($honderdtal, '8') !== false) {
		$c = $achtien . $honderd;
	}
	else if (strpos($honderdtal, '9') !== false) {
		$c = $negentien . $honderd;
	}
		
	}


		else {
		$tientalhonderd = substr($q, 0, -3);
		$eentalhonderd = substr($q, 1, -2);

		
		
		if (strpos($tientalhonderd, '2') !== false)	{
		$a = $twintig;
		}
		
		if (strpos($tientalhonderd, '3') !== false)	{
		$a = $dertig;
		}
		
		if (strpos($tientalhonderd, '4') !== false)	{
		$a = $veertig;
		}
		
		if (strpos($tientalhonderd, '5') !== false)	{
		$a = $vijftig;
		}
		
		if (strpos($tientalhonderd, '6') !== false)	{
		$a = $zestig;
		}
		
		if (strpos($tientalhonderd, '7') !== false)	{
		$a = $zeventig;
		}
		
		if (strpos($tientalhonderd, '8') !== false)	{
		$a = $tachtig;
		}
		
		if (strpos($tientalhonderd, '9') !== false)	{
		$a = $negentig;
		}
		
		
		if (strpos($eentalhonderd, '1') !== false)	{
		$b = $een;
		}
		
		if (strpos($eentalhonderd, '2') !== false)	{
		$b = $twee;
		}
		
		if (strpos($eentalhonderd, '3') !== false)	{
		$b = $drie;
		}
		
		if (strpos($eentalhonderd, '4') !== false)	{
		$b = $vier;
		}
		
		if (strpos($eentalhonderd, '5') !== false)	{
		$b = $vijf;
		}
		
		if (strpos($eentalhonderd, '6') !== false)	{
		$b = $zes;
		}
		
		if (strpos($eentalhonderd, '7') !== false)	{
		$b = $zeven;
		}
		
		if (strpos($eentalhonderd, '8') !== false)	{
		$b = $acht;
		}
		
		if (strpos($eentalhonderd, '9') !== false)	{
		$b = $negen;
		}
		
		$c = ($b . 'en' . $a . 'honderd');
		
	}

	
	
	

	
	
	echo $c;
	
	
}
	
		
	
?></p>
</div>
</body>	
</html>