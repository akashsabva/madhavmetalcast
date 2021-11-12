<?php

//$data = json_decode(file_get_contents("php://input"));
//$con = mysqli_connect("localhost","root","","compay");
//$empno = mysqli_real_escape_string($con, "789");
//$fname = mysqli_real_escape_string($con, "KISHAN");
//$lname = mysqli_real_escape_string($con, "SABVA");
//$dept = mysqli_real_escape_string($con, "IT");
//mysqli_query($con, "INSERT INTO `employee1` (`emp_no`, `first_name`, `last_name`, `dept_name`) VALUES ('$empno', '$fname', '$lname', '$dept')");


$data = json_decode(file_get_contents("php://input"));
$con = mysqli_connect("localhost","root","","MADHAV_METAL_CAST_LOCAL");
$name = mysqli_real_escape_string($con, $data->name);
$email = mysqli_real_escape_string($con, $data->email);
$mobileNo = mysqli_real_escape_string($con, $data->mobileNo);
$subject = mysqli_real_escape_string($con, $data->subject);
$message = mysqli_real_escape_string($con, $data->message);
mysqli_query($con, "INSERT INTO `mmc_contact_form` (`NAME`, `EMAIL`, `MOBILE_NO`, `SUBJECT`, `MESSAGE`) VALUES ('$name', '$email', '$mobileNo', '$subject', '$message')");



?>