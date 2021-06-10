<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatecomment="";
$validateradio="";
$name=$email=$password="";
$v1=$v2=$v3="";
$validatecheckbox="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["fname"];
    if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
    {
        $validatename= "you must enter name";
    }
    else
    {
        $validatename="Your name is ".$_REQUEST["fname"];
    }

    $email=$_REQUEST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validateemail="you must enter email";
    }
    else{
        $validateemail= "Your email is ".$email;
    }

    $password=$_REQUEST["pwd"];
    if (empty($password) || strlen($password)<8 || !preg_match("/(?=.*[@#$%^&+=]).*$/",$password))
    {
        $validatepassword ="you must enter valid password";
    } 
    else
    {
        $validatepassword = "Your password is ".$password;
    }

    // $comment=$_REQUEST["com"];
    if(empty($_REQUEST["com"]))
    {
        $validatecomment="you must write comment";
    }
    else
    {
        $validatecomment=($_REQUEST["com"]);
    }

    if(isset($_REQUEST["gender"]))
    {
        $validateradio= $_REQUEST["gender"];
    }
    else
    {
        $validateradio= "Please select at least one radio";
    }

    if(!isset($_REQUEST["hobby1"])&&!isset($_REQUEST["hobby2"])&&!isset($_REQUEST["hobby3"]))
    {
        $validatecheckbox = "Please select at least one checkbox";
    }
else{
   if(isset($_REQUEST["hobby1"]))
   {
       $v1= $_REQUEST["hobby1"];
   }
   if(isset($_REQUEST["hobby2"]))
   { 
       $v2= $_REQUEST["hobby2"];
   }
   if(isset($_REQUEST["hobby3"]))
   {
    $v3= $_REQUEST["hobby3"];
   }
}
}

?>