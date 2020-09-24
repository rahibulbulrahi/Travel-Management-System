<?php 
require_once('dbcon.php');
session_start();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['username'];
                header("location:dashboard.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }

?>