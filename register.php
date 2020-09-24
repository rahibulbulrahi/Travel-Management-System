
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Register</title>
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
        background-image: url("images/beach4.jpg");
    }
    </style>
</head>

<body class="text-center" data-gr-c-s-loaded="true">

    <?php 

    session_start();

    $username = "";
    $email = "";
    include('dbcon.php');

    if(isset($_POST['submit']))
    {
        $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $password2 = mysqli_real_escape_string($con, $_POST['repeatpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);

        $usernamequery = "select * from user where username = '$username'";
        $query = mysqli_query($con, $usernamequery);

        $user_count = mysqli_num_rows($query);


        if($user_count>0)
        {
            echo "Username Already exists";
        }else
        {
            if($password === $password2)
            {
                $insert = "INSERT INTO user(fullname, email, username, phone, password) VALUES('$fullname','$email','$username','$phone','$pass')";

                $iquery = mysqli_query($con, $insert);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are registared";

                header('location:login.php');
            }
            else
            {
                echo "Password are not matching";
            }
        }
    }
    ?>





    <form class="form-signin" method="POST" action="" onsubmit="return validateForm()">
        <h1 class="h3 mb-3 font-weight-normal">Please Register Now</h1>

        <label for="fullname" class="sr-only">Full Name</label>
        <input type="text" name="fullname" class="form-control mb-2" placeholder="Full Name" autofocus="" required />

        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email address" required />

        <label for="username" class="sr-only">User Name</label>
        <input type="text" name="username" class="form-control mb-2" placeholder="User Name" required />

        <label for="dob" class="sr-only">Date of Birth</label>
        <input type="date" name="dob" class="form-control mb-2" placeholder="Date of birth" required />

        <label for="phone" class="sr-only">Phone Number</label>
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone Number" required />

        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required />

        <label for="repeatpassword" class="sr-only">Repeat password</label>
        <input type="password" name="repeatpassword" class="form-control" placeholder="Repeat password" required />
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" name="registerbtn">
            Register Now
        </button>
        
        <p class="mb-2 text-muted">Already Registered,</p>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Sign In</a>
        <div></div>
    </form>
    <script>
    function validateForm() {
        var eml = document.forms["datavalid"]["email"].value;
        var pass = document.forms["datavalid"]["password"].value;
        var repass = document.forms["datavalid"]["repeatpassword"].value;
        var mailformat =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var patern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if (!mailformat.test(eml)) {
            alert("Enter Correct format email");
            return false;
        } else if (!pass.match(patern)) {
            alert(
                "Password have to be 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter"
            );
            return false;
        } else if (!repass.match(patern)) {
            alert(
                "Repeat Password have to be 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter"
            );
            return false;
        } else if (pass != repass) {
            alert(
                "Password and Repeat password doesn't match"
            );
            return false;
        }
        return true;
    }
    </script>
</body>

</html>