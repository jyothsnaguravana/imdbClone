<?php
    $conn = mysqli_connect("localhost", "root", "","imdb");
    if (!$conn) {
        echo "ERRRRRRRRROR";
    } 
    else{
       if(isset($_POST["sub"])){
        $mail = $_POST["email"];
        $pwd = $_POST["pwd"];
        $stmt = "select * from users where email = '".$mail."' and password = '".$pwd."'";
        $exe_stmt = mysqli_query($conn ,$stmt);
        $count = 0;
        while($row = mysqli_fetch_assoc($exe_stmt )){
            $count ++;
         }
            if($count == 1){
                session_start();
                $_SESSION['mail'] = $mail;
                header('location:../index.php');
                // echo "<h1>user verified</h1>";
            }
            else{
                echo "<h1 style='color:red;'>No such user</h1>";
            }
       }
    }
?>