<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // let's check user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //let's check that email already exist in the database or not
            $sql = mysqli_query($conn, "SELECT email FROM t_auteur WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - already exist!!";
            }else{
                    //insert all user daa inside table
                    $sql2 = mysqli_query($conn, "INSERT INTO t_auteur (fname, lname, email, password)
                                                VALUES ('{$fname}', '{$lname}', '{$email}', '{$password}')");
                    if($sql2){// if those data inserted
                    $sql3 = mysqli_query($conn, "SELECT * FROM t_auteur WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql3) > 0){
                    $row = mysqli_fetch_assoc($sql3);
                    $_SESSION['user_id'] = $row['user_id'];
                        echo "success";
                    }
                    }else{
                        echo "Something went wrong!";
                    }                             
            }
        }else{
            echo "$email - This is not a valid email";
        }
    }else{
        echo "All input field are required!";
    }    
?>

