<?php 
    session_start();
    if(isset($_POST['submit'])) {
        include 'db_handler.inc.php';
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        if(empty($user_id) || empty($pwd)) {
            header("Location: ../index.php?login=empty");
            exit(); 
        } else {
            $sql = "SELECT * FROM users WHERE user_id='$user_id'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1) {
                header("Location: ../index.php?login=error");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    $hashedPwdCheck = password_verify($pwd, $row['pwd']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../index.php?login=error");
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        //Logs the user in
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        $_SESSION['user_id'] = $row['user_id'];
                        header("Location: ../members_area.php");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php?login=error");
        exit();
    }

?>