<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $tester = $_POST['radio'];
 
    $whatNext = $_POST['nextup'];
    $visitorid = $_POST['vistorid'];
    $tag = "You have recived a message from Diseal.Software";
    /* Enter desired email here */
    $mailTo = "";
    $headers .=  "From: ".$mailFrom;
    foreach($_POST['nextup'] as $i)
         $email .= $i . " and ";
    
    $txt = "You Have Recieved email from ".$name." with the subject of " .$subject."\n\n".$message."\n\nI found this site because ".$visitorid."\n\n Hey I thought your site is ".$tester."\n\nWhat you should work on next is".$email;


    mail($mailTo, $tag, $txt, $headers);
    header("Location: index.html?mailsend");
}