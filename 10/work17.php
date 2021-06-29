<!DOCTYPE html>
<html>
<head>
<title>work17</title>
<style type="text/css">
th{
height:10px;
width:70px;
background-color:#AAAAAA;
}
td{
font-family:Verdana;
font-size:15px;
height:50px;
width:70px;
}
td.family{
font-size:25px;
font-weight:bold;
background-color:#AAAAAA;
}
</style>
</head>
<body>

<?php

if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
} else {
    $ym = date("Y-m");
}
$today = getdate();

$tm = strtotime($ym);
$dt = getdate($tm);
$fm = mktime(0,0,0,$dt["mon"],1, $dt["year"]);
$fw = date("w", $fm);
$ld = date("t", $tm);
$le = mktime(0,0,0,$dt["mon"],$ld,$dt["year"]);
$lw = date("w", $le);

$lastym = date("Y-m", strtotime("-1 month", $tm));

$nextym = date("Y-m", strtotime("+1 month", $tm));

$wd = ["日", "月", "火", "水", "木", "金", "土"];

print "<h2>". $dt["month"]. "," . $dt["year"] ."</h2>";

print "<table border =\"2\">";

print "<tr>";
print "<td><a href=\"work17.php?ym={$lastym}\">前月</a></td>";
print "<td colspan=\"5\" align=\"center\"><a href=\"work17.php\">今月</a></td>";
print "<td><a href=\"work17.php?ym={$nextym}\">翌月</a></td>";
print "</tr>";

print "<tr>";
foreach($wd as $value){
    print "<th>{$value}</th>";
}

print "</tr>";

print "<tr>";

for($i=0; $i<$fw; $i++){
    print "<td></td>";
}

for($j=1; $j<=$ld; $j++){
    if($today["mday"] == $j &&
       $today["mon"]  == $dt["mon"] &&
       $today["year"] == $dt["year"])
        print "<td class=\"today\">{$j}</td>";
    else 
        print "<td>{$j}</td>";
    
    if(($j+$i) % 7 == 0){
        print "</tr><tr>";
    }
}

for($i=6; $lw<$i; $i--){
    print "<td></td>";
}

print "</tr>";
print "</table>";
?>

</body>
</html>
