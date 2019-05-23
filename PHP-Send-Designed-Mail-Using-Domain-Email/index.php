<?php

session_start();

// PHPMailer configuration
require("lib/PHPMailer/PHPMailerAutoload.php");
require_once "PHPMailer_5.2.0/class.phpmailer.php";//call to the mailer class

//company email
$sendToCompany="companyemail_1@domain.com";

if(isset($_POST["press_submit"]))
{  
    $e = test_input($_POST['eaddress']);
    $s = test_input($_POST['subject']);
    $m = test_input($_POST['message']);
    
    if( empty($e) || empty($s) || empty($m))
    {
        fieldsFailure();//required fields are empty
    }
    else
    {
        //send message to company
        sendEmail($sendToCompany,$s,$m);//call sendEmail function
        sleep(0.5);//wait for 0.5 second

        //send message to customer
        sendEmail($e,$s,$m);//call sendEmail function
        sleep(0.5);//wait for 0.5 second
        
        submitSuccess();//call sucess function
    }
}
else
{
    submitFailure();//submission error
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data,ENT_QUOTES,'utf-8');
  return $data;
}

function submitSuccess() 
{
	//put your code here
}

function submitFailure() 
{
	//put your code here
}

function fieldsFailure() 
{ 
	//put your code here
}


function sendEmail($email_add,$subjek,$messages) 
{
	
$message=
'
<body style="margin-top:90px; width:center">

<div style="background:#eceef1;color:#383939;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;margin:0;padding:0" bgcolor="#ECEEF1">

    <table background="#m_709567807946026647_ECEEF1" border="0" cellpadding="0" cellspacing="0" width="100%" style="background:#eceef1;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif" bgcolor="#ECEEF1">
        <tr>
            <td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="620" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
                    <tr>
                        <td height="40" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
                    </tr>
                    
    <tr>
        <td background="#m_709567807946026647_ffffff" style="background:#fff;border-radius:4px;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" bgcolor="#fff" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
                <tbody>
                    <tr>
                    
                        <td font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
                                <tr>
                                    <td colspan="3" height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
                                </tr>


<!--title-->

<tr>
<td width="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<a href="http://bluedrupsltd.com/team/isaacobenson/" style="color:#0088cc;text-decoration:none" target="_blank" rel="noreferrer"><h1 style="font:24px &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;margin:0;padding:0">

<!--used image instead-->
<img src="path-to-company-logo-and-name" alt="Comapany Logo or Name" style="display:block;max-width:100%;outline:none;text-decoration:none;width:auto">

</h1>
</a>
</td>



<td width="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
<tr>
<td colspan="3" height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table border="0" cellpadding="0" cellspacing="0" style="border-bottom-color:#eceef1;border-bottom-style:solid;border-bottom-width:2px;border-top-color:#eceef1;border-top-style:solid;border-top-width:2px;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif" width="100%">
<tr>
<td colspan="3" height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
<tr>
<td width="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tr>
<td align="left" width="90" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">


<!--Success Image-->
<a href="https://github.com/Obenny">

<img src="images/success.png" alt="Success" width="64" height="64" style="display:block;max-width:100%;outline:none;text-decoration:none;width:auto">
</td>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<h2 style="font:18px &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;margin:0;padding:0">

<!--Validation message-->
Message Sent
</h2>
</a>

<!--confirmation statement-->
<p style="color:#6b6c6c;line-height:1.4em;margin:0;padding:10px 0 0">
<br>
See Sent Info below.
</p>

</td>
</tr>
</table>
</td>
<td width="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>


<tr>
<td colspan="3" height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
</table>
</td>
</tr>



<!--message info-->

<tr>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom-color:#eceef1;border-bottom-style:solid;border-bottom-width:2px;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tbody>
<tr>
<td colspan="3" height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
<tr>
<td width="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<h6 style="color:#6b6c6c;font:bold 12px &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;margin:0;padding:0;text-transform:uppercase">
Information
</h6>


<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tbody>
<tr>
<td colspan="2" height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
<tr>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tbody>
<tr>
</tr>
<tr>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tr>


<br><br>
<!--Email label-->
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;padding-right:10px;vertical-align:top" width="120" valign="top">
<strong>Email</strong>
</td>

<!--Email value-->
<td style="color:#6b6c6c;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;padding-bottom:10px;vertical-align:top" valign="top">
'.$email_add.'
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tr>


<br><br>
<!--subject label-->
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;padding-right:10px;vertical-align:top" width="120" valign="top">
<strong>Subject</strong>
</td>

<!--subject value-->
<td style="color:#6b6c6c;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;padding-bottom:10px;vertical-align:top" valign="top">
'.$subjek.'
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
<tr>


<br><br>
<!--message label-->
<td style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;padding-right:10px;vertical-align:top" width="120" valign="top">
<strong>Message</strong>
</td>

<!--message value-->
<td style="color:#6b6c6c;font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;padding-bottom:10px;vertical-align:top" valign="top">
'.$messages.'
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
<td width="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
<tr>
<td colspan="3" height="10" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
</tbody>
</table>



</tbody>
</table>
</td>
</tr>


<!--border line for personal info/profile and powered by-->
<tr>
<td height="20" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>


<tr>
<td height="30" style="font:13px/1.5 &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;vertical-align:top" valign="top"></td>
</tr>
</table>
</td>
</tr>
</table>


</body>

';

			// php mailer code starts here
			$mail = new PHPMailer(true);
			$mail->IsSMTP(); // telling the class to use SMTP

			$mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing and debugging)
			$mail->SMTPAuth = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the server
			$mail->Host = "yourservername.com";      // set "yourservername.com" as the SMTP server
			$mail->Port = 465;                  // set the SMTP port for "yourservername.com" server or 465 for GMAIL server here
			
			
            /*
			
			create a second email address on your domain/server from your c-panel
			
			or 
			
			still use the first domain/server email following the steps below
			
			*/
			$mail->Username = 'companyemail_2@domain.com';//you can still use 'companyemail_1@domain.com' here
			$mail->Password = 'enter password for companyemail_2@domain.com';//'enter password for companyemail_1@domain.com' if using 'companyemail_1@domain.com' above 

			//the "sender company domain email address and company title"
			$mail->SetFrom('companyemail_2@domain.com', 'your company title');
			$mail->AddAddress($email_add);//the "receiver email"

			$mail->Subject = trim('Client Inquiry');//email subject
			$mail->MsgHTML($message);//email message
			
			if (!$mail->send()) 
			{
                $msg = 'Sorry, something went wrong. Please try again later.';
            } 
            else 
            {
                $msg = 'Message sent! Thanks for contacting us.';
            }
}

?>