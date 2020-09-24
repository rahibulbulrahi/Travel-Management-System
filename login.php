<?php session_start();?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style/logincss.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <style>
    body {
        background-image: url("images/beach3.jpg");
    }
    </style>
</head>

<body class="text-center" data-gr-c-s-loaded="true">
    
   <?php
        
        include('dbcon.php');

        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $name_search = "select * from user where username = '$username'";
            $query = mysqli_query($con, $name_search);
            
            $user_count = mysqli_num_rows($query);
            

            if($user_count)
            {
                $user_pass = mysqli_fetch_assoc($query);
                
                $db_pass = $user_pass['password'];

                $pass_decode = password_verify($password, $db_pass);

                

                if($pass_decode)
                {
                    echo "Login Complete";

                 /*  ?>
                    <script>
                        location.replace("dashboard.php");
                    </script>
                    <?php
                    */
                    header('location:dashboard.php');
                    $_SESSION['user_name']=$username;
                }
                else
                {
                    echo "Password does not match";
                    ?>
                    <script>
                        location.replace("login.php");
                    </script>
                    <?php
                }
            }else{
                echo "Invalid User Name";
            }

        }
    ?>


    <form class="form-signin" method="POST" action="loginprocess.php" name="datavalid" onsubmit="return validateForm()">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        
        <label for="username" class="sr-only">User Name</label>
        <input type="text" name="username" class="form-control mb-2" placeholder="User Name" required autofocus="" />
        
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" required placeholder="Password" />
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
        <label class="form-check-label" for="autoSizingCheck2"><p class="mb-2 text-white">Remember Me</p></label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="signin">Sign in</button>
        <p class="mb-2 text-muted">Not Registered,</p>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register Now</a>
        <div></div>
    </form>
        
</body>


</html>