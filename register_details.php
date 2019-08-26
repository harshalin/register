<?php
    include_once('connection.php');

    $db=mysqli_connect($servername,$username,$password,$dbname);
    if($db->connect_error){
    	die("connection failed".$db);
    }
    else{
        echo "sucess";
    }
    
 
    if(isset($_POST['submit'])){
	$name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $bday= $_POST['bday'];
          $query = "INSERT INTO send (name,last_name,email,password,bday) VALUES ('$name','$last_name','$email','$password','$bday')";
          mysqli_query($db,$query);
      }
?>