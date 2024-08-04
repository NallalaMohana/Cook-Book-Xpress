<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailfrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "21B91A05L0@srkrec.ac.in";
  $headers = "From: ".$mailfrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;



  mail($mailTo,$subject,$txt,$headers);
  header("Location: default.php?mailsend");
}
