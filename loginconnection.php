<?php 
        $con=mysqli_connect('localhost','root','','tourism');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }
    ?>