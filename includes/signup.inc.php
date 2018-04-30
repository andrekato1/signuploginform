<?php 
    if(isset($_POST['submit'])) {
        include_once 'db_handler.inc.php';
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        if(empty($first_name) || empty($last_name) || empty($user_id) || empty($pwd)) {
            header("Location: ../index.php?signup=empty");
            exit(); 
        } else {
            if(!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {               
                header("Location: ../index.php?signup=invalid");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0) {
                    header("Location: ../index.php?signup=usertaken");
                    exit();
                } else {
                    $encryptedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (first_name, last_name, user_id, pwd) VALUES ('$first_name', '$last_name', '$user_id', '$encryptedPwd');";
                    mysqli_query($conn, $sql);
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
?>