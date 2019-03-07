<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("zaharrow.artem@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: zaharrow.artem@gmail.com \r\n"))
 {     echo "nice"; 
} else { 
    echo "bad";
}?>