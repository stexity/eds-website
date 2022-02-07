<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $to='alifaizan@gmail.com';
        $sub="Form Submission";
        $msg="Name: ".$name."\n"."Subject: ".$subject."\n"."Message".$message;
        $headers="From: ".$email;

        if(mail($to, $sub, $msg, $headers)){
            echo "<h2>Sent Successfully! Thank You"." ".$name.", We Will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong!";
        }
    }
?>