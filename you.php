<?php
include 'connection.php';

if (isset($_POST['PracticeSubmit']))
{     	
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$homeaddress=$_POST['homeaddress'];
	$phonenumber=$_POST['phonenumber'];
	$password=$_POST['password'];
	$sql="SELECT * FROM usertable where fullname='$fullname' && password ='$password' ";
    $result=$conn->query($sql);
    $row=$result->num_rows;
    if($row<1){
        $sql="INSERT INTO usertable VALUES ('$fullname', '$email', '$state', '$country', '$homeaddress', '$phonenumber', '$password')";
        $conn->query($sql);
    }
}	

if (isset($_POST['login'])) 
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM usertable WHERE fullname='$username' &&  password='$password' ";
    $result=$conn->query($sql);
    $row=$result->num_rows;
    if ($row<1){
        echo "Wrong user credentials";
    } 
    else {
        header('Location:home.html');
    }
}
?>