<?php
/**
 */include 'db_connect.php';
session_start();

/*
if(isset($_POST['login_button']))

{
    $user=mysqli_real_escape_string($_POST['username']);
    $pass=mysqli_real_escape_string($_POST['password']);
    //mysqli_query($dbs,"SELECT * FROM voters");
    $fetch = $db->query("SELECT `sr no.` FROM `voters` WHERE
                         username='$username' and password='$password'");


    $fetch=mysqli_query("SELECT `sr no.` FROM `voters` WHERE
                         username='$username' and password='$password'");


    $count=mysql_num_rows($fetch);
    if($count!="")
    {
        //session_register("sessionusername");
        $_SESSION['login_username']=$user;
        header("Location:index1.php");
    }
    else
    {
       header('Location:login.php');
    }

}*/

if(isset($_POST['login_button'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from voters where username= '$username' and password='$password'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['Username'] = $username;
            //$_SESSION['Password'] = $row['password'];
           //$_SESSION['Department'] = $row['Department'];
            {

                echo "<script>if(confirm('Login Successfull     !')){document.location.href = 'index1.php'};</script>";

             }
        }
     //setcookie('Username', $username, time() + (86400 * 30), "/");
     //$_SESSION['Username']
    }else{
                echo "<script>if(confirm('Login Failed !')){document.location.href = 'login.php'};</script>";
    }
}



else if(isset($_POST['reg_btn'])){
    $Studid = $_POST['studid'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $department  = $_POST['dept'];
    $contact  = $_POST['contact'];
    $email  = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql1 = "Select * from user where Studid = '$Studid' and Firstname = '$firstname'";
    $result1 = mysqli_query($db,$sql1);
    $authorized_user = mysqli_num_rows($result1);

    $sql2 = "select * from voters where password = '$password' and username='$username'";
    $result2 = mysqli_query($db,$sql2);
    $user_exist = mysqli_num_rows($result2);

    if($authorized_user >= 1){
        if($user_exist==0){
            $insert = $db->query("INSERT into voters(Studid,Firstname,Lastname,Department,Contact,Email,username,password)
                   VALUES ('$Studid','$firstname','$lastname','$department','$contact','$email','$username','$password')");
            if($insert){

                echo"<script>if(confirm('Registration Successfull !')){document.location.href = 'login.php'};</script>";
            }else{
                echo"<script>if(confirm('Registration Failed !')){document.location.href = 'register.php'};</script>";
            }
        }else{
            echo"<script>if(confirm('User Already Exist !')){document.location.href = 'login.php'};</script>";
        }
    }
    else{
        echo"<script>if(confirm('Unauthorized user !')){document.location.href = 'login.php'};</script>";
    }

}

else if(isset($_POST['admin_button'])){
    $Studid = $_POST['studid'];
    $firstname = $_POST['fname'];
    $department  = $_POST['dept'];

    $sql3 = "select * from user where Studid = '$Studid' and Firstname = '$firstname'";
    $result3 = mysqli_query($db,$sql3);
    $user_exist = mysqli_num_rows($result3);


        if($user_exist==0){
            $insert = $db->query("INSERT into user(Studid,Firstname,Department)
                   VALUES ('$Studid','$firstname','$department')");
            if($insert){

                echo"<script>if(confirm('New User Added Successfully !')){document.location.href = 'admin1.php'};</script>";
            }else{
                echo"<script>if(confirm('User Insertion Failed !')){document.location.href = 'admin.php'};</script>";
            }
        }else{
            echo"<script>if(confirm('User Already Exist !')){document.location.href = 'admin1.php'};</script>";
        }
    }

?>






<?php

 if(isset($_POST['login_btn'])) {
        $username = "krazykid";
        $password = "Admin123";
        $username = '$_POST[username]';
        $password = '$_POST[password]';


        if ( ($_POST['username']=="krazykid" && $_POST['password']=="Admin123")) {

            echo "<script>if(confirm('Login Successfull     !')){document.location.href = 'admin1.php'};</script>";
        }else {
           echo "<script>if(confirm('Login Failed !')){document.location.href = 'admin.php'};</script>";
        }
             //session_destroy();
}?>