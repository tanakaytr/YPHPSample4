<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
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
td.today{
font-size:25px;
font-weight:bold;
background-color:#AAAAAA;
}
</style>
</head>
<body>

<?php

$tm = time();
$dt = getdate($tm);
$fm = mktime(0,0,0,$dt["mon"],1,$dt["year"]);
$fw = date("w", $fm);
$Id = date("t", $tm);

$wd = ["日", "月", "火", "水", "木", "金", "土"];

print "<h2>". $dt["month"]. "," . $dt["year"] ."</h2>";

print "<table border=\"2\">";

print "<table border=\"2\">";

print "<tr>";
foreach($wd as $value){
    print "<th>{$value}</th>";
}

print "</tr>";

print "<tr>";

for($i=0; $i<$fw; $i++){
    print "<td></td>";
}

for($j=1; $j<=$Id; $j++){
    if($j == $dt["mday"]){
        print "<td class=\"today\">{$j}</td>";
    } else {
        print "<td>{$j}</td>";
    }
    if(($j+$i)%7 == 0){
        print "</tr><tr>";
    }
}

print "</tr>";
print "</table>";

?>

</body>
</html>
