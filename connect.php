<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gnd'];
$city=$_POST['city'];

$connect=new mysqli('localhost','root','','form_infos');
if($connect->connect_error) 
    {echo 'Error while registering'. $connect->connect_error; }
else{
    $sql="INSERT INTO `info` (`Name`, `email`, `gender`, `city`) VALUES ('$name','$email','$gender','$city')";
    $result=$connect->query($sql);
    echo '<p style="background: url(back.jpg); background-size: cover;">';
    echo '<p style="background-color: cyan; font-size: 25px; font-style: italic; padding:3px;  text-align: center;">Congratulations</p>';
    echo '<p style="background-color: cyan; font-size: 25px; font-style: italic; padding:3px;  text-align: center; ">Registration successful</p>';
    echo '<p style="background-color: cyan; font-size: 25px; font-style: italic; padding:3px;  text-align: center; ">You will get an email regarding further details</p>';
    echo '</p>';
}
   
?>