<?php

if($_REQUEST['method'] == "mailto"){

  $from=$_REQUEST['email'];
//   $from='developer@cwd.co.in';
//   $mailto="developer@cwd.co.in"; 
  $mailto="Thesoultrains@gmail.com";
// Thesoultrains@gmail.com
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
  $headers .='From:'.$from;
  $subject="";
  $message .="
  <b>Name:</b> $_REQUEST[name123] <br>
  <b>Email:</b>$_REQUEST[email123] <br>
  <b>Phone:</b> $_REQUEST[phone123]<br>
  <b>Date:</b> $_REQUEST[dob123]<br>
  <b>Gender:</b> $_REQUEST[radio]<br>
  <b>Hobbies:</b> $_REQUEST[hobbies]<br>
  <b>City:</b> $_REQUEST[city]<br>
  <b>Salary:</b> $_REQUEST[salary]<br>
  <b>Bachelors:</b> $_REQUEST[bachelors]<br>
  <b>Masters:</b> $_REQUEST[masters]<br>
  <b>Facebook:</b> $_REQUEST[facebook]<br>
  <b>Twitter:</b> $_REQUEST[twitter]<br>
  <b>Instagram:</b> $_REQUEST[insta]<br>
  <b>Website:</b> $_REQUEST[web]<br>
  ";

$events = implode(",", $_REQUEST['events']);
$field = implode(",", $_REQUEST['design']);

for($i=0; $i<count($_REQUEST['media']); $i++){
  $sno = $i+1;
  $reason .= "$sno. ".$_REQUEST['media'][$i].'<br>';
}

for($i=0; $i<count($_REQUEST['mod']); $i++){
    $sno = $i+1;
    $reason .= "$sno. ".$_REQUEST['mod'][$i].'<br>';
}
for($i=0; $i<count($_REQUEST['data']); $i++){
    $sno1 = $i+1;
    $areas .= "$sno1. ".$_REQUEST['data'][$i].'<br>';
}

  $message .= "
  <b>Events:</b> $events<br>
  <b>Primary Field Work:</b> $field<br>
  <b>Reasons to attend Soul Train:</b><br>
  $reason
  <b>Areas you want growth in:</b><br>
  $areas
  <b>About Myself:</b><br>
  $_REQUEST[review]
  ";

//   echo $message;
  
 $mail = mail($mailto,$subject,$message,$headers);
//  var_dump($mail);

 if($mail == true){
    $result['status'] = 200;
    $result['message'] = "Mail sent successfully";
    $result['status1'] = 'success';
 }else{
    $result['status'] = 400;
    $result['message'] = "Mail has not been sent";
    $result['status1'] = 'warning';
 }

 echo json_encode($result);

}
?>