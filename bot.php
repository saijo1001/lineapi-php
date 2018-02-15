<?php

date_default_timezone_set('Asia/Tokyo'); // You don't need.
include 'LineApi.php';


/* Type. 1	Mail & Pass Login

$mail     = 'xxx@gmail.com';
$password = 'xxx';
$cert = '';
$Line = new Line(NULL, $mail, $pass, NULL);

*/



/* Type. 2	Mail & Pass Login & Certificate

$mail     = 'xxx@gmail.com';
$password = 'xxx';
$cert = 'XXXXXXXXXXX';
$Line = new Line(NULL, $mail, $pass, $cert);

*/



/* Type. 3	URL Login */
$Line = new Line();



// LOGIN TEST
print_r($Line->getProfile());
