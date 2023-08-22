<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost','root','','website') or die("Connection failed :" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users VALUES ('$name', '$username','$email','$password')";
            
            $query = mysqli_query($conn,$sql);

            if($query){
                echo"Succesfully registered Mr/Ms" .$username;
                echo "You'll be redirected to the LOGIN page...";
                header("refresh:3;url=login.html");
            }
            else{
                echo "Error occured";
            }
        
        }

    }else{
        echo "Error occured";
    }

?>
