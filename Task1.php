<?php
//php funtions
$Fruits=["Apple","Banana","peach","Orange"];
echo implode(",",$Fruits);
//implode function => combine element that inside array in one string with any seprator
echo "<br>";
$str="my , Favorite , Fruit, is, Banana";
print_r(explode(",",$str,5));
//explode function  break string to array
echo "<br>";
echo str_shuffle("Abeer");

//str_shuffle function =>random shuffle character
echo "<br>";
$name="Abeer";
echo gettype($name);
//gettype function =>get the type of variable
//echo "<br>";
//$handle=fopen("test.txt","a+");
//fwrite($handle,"\r\nI love php");
// echo fread($handle,1024);

echo "<br>";
$handle=fopen("test.txt","a+");
fseek($handle,12,SEEK_SET);
fwrite($handle,"\r\nphp laravel");

//cookies and session
//cookies =>Pertaining to the user.this is file store in website this file contains on your informatio ,
//this is information Belonging to your interaction with website.informations stored too in user computer.


//session=>we can store session  on server but we store user key only in cookies.

//To Create Cookies: use setcookie function this function has 5 parameter
//setcookie(name, value, expire, path, domain, secure, http_only);

//To create Session => use session_start() function

//dump seesion and cookie.
setcookie("style","dark");
var_dump($_COOKIE);
session_start();
var_dump($_SESSION);


