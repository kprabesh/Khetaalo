<?php

if(isset($_POST['submit'])) {
 $name = $_POST['name'];
 $mailfrom=$_POST['email'];
 $message=$_POST['message'];

 $mailTo='prabesh.17@gmail.com';
 $headers="From: ".$mailfrom;
 $txt="You have received a review from".$name."\n\".$message;
 


 mail($mailTo,$message,$headers);
 header("Location:index.html?mailsend");

}

?>