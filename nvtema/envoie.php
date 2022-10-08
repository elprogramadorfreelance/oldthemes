
<?

@import_request_variables("gpc");//import variables 
$youremail = "contact@nouveauvisage.fr"; //your mail 
$subject = "demande d'information"; // for example, title of your contact page page - contact 
$redirect = "http://iungosinaga.com/nouveauvisage/site_nouveauvisage2.bo/?page_id=177";//url to be redirected when contact form is sent
$secs = "5";// time in seconds will be redirected
if(eregi("MIME-Version:",$postVars)) {
  mail("contact@nouveauvisage.fr", "Form Hijack Attempt", "A spam relay was attempted from the Web site and was blocked.", "From:SpamMonitor");
  die();
  } //block spam

 $secret = 'ssshhitsasecret'; 
  $token = md5(rand(1, 1000).$secret);
  $_SESSION['token'] = $token;
  ?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" >
<head>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
<title>Merci....</title> 

<meta http-equiv="refresh" content="<?=$secs;?>;URL=<?=$redirect;?>" /> 

</head>
<body>
<?


$quehablo = $_POST["paquetes"];

  // variables to stop spammers 
  $name = stripslashes($name);
  $prenom = stripslashes($prenom);
  $societe = stripslashes($societe);
  $telecopie = stripslashes($telecopie);
  $telephone = stripslashes($telephone);
  $informacion = stripslashes($informacion);
//$paquetes = stripslashes($paquetes);
  $message = stripslashes($message);
  $headers .= "From: " . $email . "\r\n\r\n"; 
  //This is where the email is sent using your values from above. Be sure to update this if you change any fields in contact.php
  mail("$youremail", "$subject","
  Nom : $name
  Prénom : $prenom
  Société : $societe
  Email : $email
  Téléphone : $telephone
  Télécopie : $telecopie
  Information : $informacion



  Message : $message 

",$headers);
  // Strip \r and \n from the email address
  $_POST['email'] = str_replace("\r", "", $_POST['email']);
  $_POST['email'] = str_replace("\n", "", $_POST['email']);
  $_SESSION['token'] = $token; 
  $token = md5(rand(1, 1000).$secret);
  $secret = 'ssshhitsasecret';
  $field = preg_replace( "/[\n\r]+/", " ", $field );
  // Remove injected headers
  $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i");
  $_POST['email'] = preg_replace($find, "", $_POST['email']);
  $message = preg_replace($find, "", message); 
  $email=str_replace("\r","\n",$email);
  $name=str_replace("\r","\n",$name);
  $societe=str_replace("\r","\n",$societe);
  $informacion = str_replace("\r","\n",$informacion);
  $message=str_replace("\r","\n",$message);
  $telephone=str_replace("\r","\n",$telephone);
  $telecopie=str_replace("\r","\n",$telecopie);
  $phone=str_replace("\r","\n",$phone);

  
  
  if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
  ob_clean();
  mail("$youremail", "Message Killed", "$message", "From: $name <$email>");
  exit("Message killed.");
  }
  if (eregi('^(bcc$|content-type|mime-version|--)',$key))
  print_error("Field names indicate exploit."); //bloqueo de spam
?>
<p>Merci de patienter vous allez etre redirigé vers la page précédente dans 5 secondes.</p>


</body>
</html>
