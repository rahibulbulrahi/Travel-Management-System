<?php 
    $db = mysqli_connect('localhost','root','','tourism');

    if(isset($_POST['registerbtn']))
    {
        $fullname = $mysqli->real_escape_string($_POST['fullname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $phone = $mysqli->real_escape_string($_POST['phone']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $repeatpassword = $mysqli->real_escape_string($_POST['repeatpassword']);
        
        if(count($errors)==0)
        {
            $sql = "    INSERT INTO customer (name,email,phone,password,repeatpassword) 
                        VALUES ('$username','$useremail','$userphonenumber','$userpassword','$userrepassword')";
            mysqli_query($db,$sql);
            $_SESSION['fullname'] = $fullname;
            $_SESSION['success'] = "You are now registared";
            header("location:login.php");
        }
    }
?>