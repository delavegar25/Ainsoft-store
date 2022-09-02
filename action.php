<?php

if (isset($_POST['Send']))
{
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Phonenumber=$_POST['Phonenumber'];
    $Message=$_POST['Message'];
    printf("your request has been delivered, your message will be delivered to you before 24hours", $Name, $Email, $Phonenumber, $Message);
}


?>