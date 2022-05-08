<?php

echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">';



error_reporting(0);
$getal=$_POST['getal'];
$dag=$_POST['dag'];
$team11=$_POST['Team1'];
$team22=$_POST['Team2'];
$team33=$_POST['Team3'];
$team44=$_POST['Team4'];
$team55=$_POST['Team5'];

$team1 = array(26741, 28144, 37602, 38934, 28542, 29964, 25928);
$team2 = array(35163, 27980, 28553, 38960, 32398, 38771, 28409);
$team3 = array(25546, 35507, 32767, 33419, 28494, 35045, 25593);
$team4 = array(38864, 39374, 33624, 35097, 27457, 29002, 39182);
$team5 = array(25339, 26028, 34077, 25956, 39611, 28210, 29144);


echo"<table border='1'>";
echo "<h1>Het totaaloverzicht:</h1><TABLE border='1' class='table'><thead><TR><TD> Team </TD><TD> Maandag </TD><TD> Dinsdag </TD><TD> Woensdag </TD><TD> Donderdag </TD><TD> Vrijdag </TD><TD> Zaterdag </TD><TD> Zondag </TD></TD>";
echo "<tr><th>Team1</th><th>26741</th><th>28144</th><th>37602</th><th>38934</th><th>28542</th><th>29964</th><th>25928</tr>";
echo "<tr><th>Team2</th><th>35163</th><th>27980</th><th>28553</th><th>38960</th><th>32398</th><th>38771</th><th>28409</tr>";
echo "<tr><th>Team3</th><th>25546</th><th>35507</th><th>32767</th><th>33419</th><th>28494</th><th>35045</th><th>25593</tr>";
echo "<tr><th>Team4</th><th>38864</th><th>39374</th><th>33624</th><th>35097</th><th>27457</th><th>29002</th><th>39182</tr>";
echo "<tr><th>Team5</th><th>25339</th><th>26028</th><th>34077</th><th>25956</th><th>39611</th><th>28210</th><th>29144</tr>";
echo "</table>";
echo "<br>";

echo "<h2>De gevraagde resultaaten</h2><br>";

$teamscount = 0;
if($team11)
{
    $teamscount += 1;
}
if($team22)
{
    $teamscount += 1;
}
if($team33)
{
    $teamscount += 1;
}
if($team44)
{
    $teamscount += 1;
}
if($team55)
{
    $teamscount += 1;
}
if($teamscount != 0){
echo "Het aantal teams waarover berekend is: $teamscount teams <br>";

$aantalteams = 0;
if($team1)

switch ($getal){
case "Hoogste_waarde":
    $Hoogste_waarde = 0;
if ($team11 && $team1[$dag] > $Hoogste_waarde)
{
    $Hoogste_waarde = $team1[$dag];
} 
if ($team22 && $team2[$dag] > $Hoogste_waarde)
{
    $Hoogste_waarde = $team2[$dag];
}
if ($team33 && $team3[$dag] > $Hoogste_waarde)
{
    $Hoogste_waarde = $team3[$dag];
}
if ($team44 && $team4[$dag] > $Hoogste_waarde)
{
    $Hoogste_waarde = $team4[$dag];
}
if ($team55 && $team5[$dag] > $Hoogste_waarde)
{
    $Hoogste_waarde = $team5[$dag];
}
echo "De meerdere aantal stappen van deze teams is: $Hoogste_waarde stappen";
break;

case "Gemiddelde":
    $Gemiddelde = 0;
if ($team11 && $team1[$dag] += $Gemiddelde)
{
    $Gemiddelde = $team1[$dag];
} 
if ($team22 && $team2[$dag] += $Gemiddelde)
{
    $Gemiddelde = $team2[$dag];
}
if ($team33 && $team3[$dag] += $Gemiddelde)
{
    $Gemiddelde = $team3[$dag];
}
if ($team44 && $team4[$dag] += $Gemiddelde)
{
    $Gemiddelde = $team4[$dag];
}
if ($team55 && $team5[$dag] += $Gemiddelde)
{
    $Gemiddelde = $team5[$dag];
}
$Gemiddelde /= $teamscount;
echo "De gemiddelde aantal stappen van deze teams is: $Gemiddelde stappen";
break;

case "Totaal":
    $Totaal = 0;
if ($team11 && $team1[$dag] += $Totaal)
{
    $Totaal = $team1[$dag];
} 
if ($team22 && $team2[$dag] += $Totaal)
{
    $Totaal = $team2[$dag];
}
if ($team33 && $team3[$dag] += $Totaal)
{
    $Totaal = $team3[$dag];
}
if ($team44 && $team4[$dag] += $Totaal)
{
    $Totaal = $team4[$dag];
}
if ($team55 && $team5[$dag] += $Totaal)
{
    $Totaal = $team5[$dag];
}
echo "De meerdere aantal stappen van deze teams is: $Totaal stappen";
break;
}}
?>
