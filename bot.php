<?php

date_default_timezone_set('Asia/Tokyo'); // You don't need.
include 'LineApi.php';


/* Type. 1	Mail & Pass Login

$mail     = 'oishi.akito@gmail.com';
$password = '0014ha315';
$cert = '';
$Line = new Line(NULL, $mail, $pass, NULL);

*/



/* Type. 2	Mail & Pass Login & Certificate

$mail     = 'oishi.akito@gmail.com';
$password = '0014ha315';
$cert = 'XXXXXXXXXXX';
$Line = new Line(NULL, $mail, $pass, $cert);

*/



/* Type. 3	URL Login */
$Line = new Line();



// LOGIN TEST
print_r($Line->getProfile());
