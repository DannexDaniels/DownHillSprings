<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    if (isset($_POST['submit_all'])){
        //user details
        $name = $_POST['fname']." ".$_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['msg'];

        //my details
        $mail_to = 'info@downhillspringsresort.co.ke';
        $subject = 'CONTACTED FROM WEBSITE';
        $header = 'From: '.$name.'\r\nReply-To: '.$email;
        $message = $msg." 
        
Sent by: ".$name."
Phone: ".$phone;

        if (mail($mail_to,$subject,$message,$header)){
            echo '<script>alert("Message Sent Successfully.")</script>';
            echo '<script>window.location.href = "contact.html";</script>';
        }else{
            echo '<script>alert("Something Went Wrong. Please try again.")</script>';
            echo '<script>window.location.href = "contact.html";</script>';
        }
    }else{
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        //my details
        $mail_to = 'info@downhillspringsresort.co.ke';
        $subject = 'FROM WEBSITE';
        $header = 'From: '.$name.'\r\nReply-To: '.$email;
        $message = $msg."

Sent by: ".$name;

        if (mail($mail_to,$subject,$message,$header)){
            echo '<script>alert("Message Sent Successfully.")</script>';
            echo '<script>window.location.href = "index.html";</script>';
        }else{
            echo '<script>alert("Something Went Wrong. Please try again.")</script>';
            echo '<script>window.location.href = "index.html";</script>';
        }
    }

?>