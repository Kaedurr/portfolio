<?php

$EmailFrom = "katedbee@gmail.com";
$EmailTo = "katedbee@gmail.com";
$Subject = "Email submission - katedurr.com";
$Name = Trim(stripslashes($_POST['Namesljf'])); 
$Email = Trim(stripslashes($_POST['Emailkjkl'])); 
$Message = Trim(stripslashes($_POST['Messageasda'])); 
$Fax = Trim(stripslashes($_POST['Fax'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Fax - Honeypot: ";
$Body .= $Fax;
$Body .= "\n";
$Body .= "Phone - Honeypot: ";
$Body .= $Phone;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=https://katedurr.com/contact\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>