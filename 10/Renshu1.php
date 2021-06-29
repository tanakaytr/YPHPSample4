<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>練習1</title>
</head>
<body>
<h2>店内のご案内</h2>
<hr/>

<?php

if(isset($_POST["usr"])){
    $name = $_POST["usr"];
    $_SESSION["usr"] = $name;
}

if(!isset($_SESSION["usr"])){
    print "<form action=\"http://localhost/YPHPsample/10/Renshu1.php\" method=\"post\">";
             
    print "お客様の名前をどうぞ。";
    print "<input type = \"text\" name=\"usr\"/><br/>";
    print "<input type = \"submit\" value=\"送信\"/>";
    print "</form>";
} else {
    $name = $_SESSION["usr"];
    print "{$name}さん、いらっしゃいませ。<br/>\n";
}

print "</body>";
print "</html>";

?>
