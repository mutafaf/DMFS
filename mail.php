<?php

require_once './Mail-1.2.0/Mail.php';

$from = $_POST["emid"];
$to = "info@dmfs.com.pk"; 
$subject = $_POST["subjectCont"];
$body = $_POST["<?php

 $content="text/html; charset=ISO-8859-1";
$mime="1.0";
/* SMTP server name, port, user/passwd */
$smtpinfo["host"] = "ssl://smtp.dmfs.com.pk";
$smtpinfo["port"] = "465";
$smtpinfo["auth"] = true;
$smtpinfo["username"] = "info@dmfs.com.pk";
$smtpinfo["password"] = "Mut***afaf11";

$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject,'Content-Type'=> $content,'MIME-Version'=>$mime);
$smtp = &Mail::factory('smtp', $smtpinfo);

$mail = $smtp->send($to, $headers, $body);
//$success = $smtp->send($to, $headers, $body);
//echo json_encode($status);



if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "error sending mail</p>");
} else {
    echo("<p>Message successfully sent!</p>");
}
?> 