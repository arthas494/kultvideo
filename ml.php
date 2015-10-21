<?php

/*
if(!isset($_POST["name"]))exit;
if(!isset($_POST[""]))exit;
if(!isset($_POST["phone"]))exit;
if(!isset($_POST["email"]))exit;
if(!isset($_POST["question"]))exit;
*/

//function toWin1251($str){return iconv('utf-8','windows-1251',$str);}

//function toUTF8($str){return iconv('windows-1251','utf-8',$str);}

//$_POST["name"] = "Клиент";
//$_POST["email"] = "klient@mail.ru";
//$_POST["message"] = "рывапыворпалы олажывдлоажы олажывдлаоы";

//$title = "<b>ќбратный звонок</b>";
$mess=$_POST["message"]."\n\n\n".$_POST["email"];


//$mess = toWin1251($mess);	
		
$from=$_POST["name"];

$headers = "From: ".$from."\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-type: text/html; charset=windows-1251\r\n";

mail('kultvideo@mail.ru', $from, $mess);

//mail('anketa-zayavka@bankitb.ru', $from, "<br><br>".$mess , $headers);

//mail('hasanov_a@bankitb.ru', $from, "<br><br>".$mess , $headers);

//mail('art_has@mail.ru', $from, "<br><br>".$mess , $headers);

?>