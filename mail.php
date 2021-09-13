<?php
function emailVerification($sender, $receiver, $subject, $body) {
if(mail($receiver, $subject, $body, $sender)){
    echo "<script>alert('Email sent successfully to $receiver');</script>";
}else{
    echo "<script>alert('Sorry, failed while sending mail!');</script>";
}
}
function emailForgotPassword($sender, $receiver, $subject, $body) {
    if(mail($receiver, $subject, $body, $sender)){
        echo "<script>alert('Email sent successfully to $receiver');</script>";
    }else{
        echo "<script>alert('Sorry, failed while sending mail!');</script>";
    }
    }
?>