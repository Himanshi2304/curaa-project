<?php
session_start();
include "db_conn.php";
if(isset($_POST['uname'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);

    if(empty($uname)){
        header("Location: login-page.php?error=Aadhar Number is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE user_name='$uname'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if($row['user_name'] === $uname){
                
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: basic-health-data.html");
                exit();
            }
            else{
                header("Location: login-page.php?error=Incorect Aadhar Number");
                exit();
            }
        }
    }
}
else{
    header("Location: login-page.php");
    exit();
}