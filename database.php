<?php

$conn=mysqli_connect("localhost","root","","project");
/*
if($conn){
    echo "connected"."<br/>";

}
else{
    echo "not connected"."<br/>";
}


$create="create database project";
$createdata=mysqli_query($conn,$create);
if($createdata)
    echo "created database"."<br/>";
else
    echo "not created database"."<br/>";

$use="use project";
$usage=mysqli_query($conn,$use);
if($usage)
    echo "Database ready to use"."<br/>";
else
    echo "Database not selected";

    $table="create table player(firstName varchar(20),lastName varchar(20),email varchar(20),phone varchar(10),gender varchar(10),role varchar(20),dob varchar(20), address varchar(20),city varchar(10),state varchar(20))";
    $tablecreated=mysqli_query($conn,$table);
    if($tablecreated)
        echo "table created";
    else
        echo "table not created";

*/

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$role = $_POST['role'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$insert = "insert into player values('$firstName', '$lastName', '$email', '$phone', '$gender', '$role', '$dob', '$address', '$city', '$state')";
$insert_data=mysqli_query($conn,$insert);
if($insert_data)
    echo "Registration Successfull"."<br/>";
else
    echo "Try again "."<br/>";
?>
