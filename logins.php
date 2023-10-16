

<?php
$uname=$_POST["user"];
$pass=$_POST["pass"];
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "logins";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
 if($conn->connect_error){
     die("connection failed: ".$conn->connect_error);
 }
 /*$sql = "INSERT INTO login (username, passwords)
 VALUES ('$uname','$pass')";
 
 $conn->query($sql) ;*/
 $sql1="select * from login where username='$uname'";
 if(mysqli_num_rows($conn->query($sql1))>0){
    echo "the user exist";
 }
 else{
     echo "the user does not exit pls sign up";
 }
 
 $conn->close();
 
   
?>