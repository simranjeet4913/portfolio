<?php
require('mysqli_connect.php');
 if($_SERVER['REQUEST_METHOD']=='POST'){
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $message = $_POST['message'];
	 $query=mysqli_query($dbc,"INSERT INTO contact(name,email, message) VALUES ('$name','$email','$message')");
if($query){
	echo '<script type="text/Javascript">
            alert("Message is sent")
            window.location="home.html"
            </script>';
}
    
else{
	echo '<script type="text/Javascript">
            alert("Message is not sent")
            window.location="home.html"
            </script>';
}
}
    
 
?>