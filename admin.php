<?php
?>
<!doctype html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background: #7D7986">

<div class="firstdiv">
    <p class="textstyle">Admin Login</p>
</div>
<!-- Second Div for Login Panel -->
<form action="usermodel.php" method="post" name="form1">
    <div class="middlediv">
        <p class="fieldname" style="margin-left: 20px;">Username : </p>
        <input type="text" name="username" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z]{1,20}$"required/>
        <p class="fieldname" style="margin-left: 20px;">Password : </p>
        <input type="password" name="password" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required/>

        <input type="submit" name="login_btn" value="Sign In" class="btn" style="margin-left:130px;width: 100px;height: 25px;">


        <br><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </div>


</form>

<!-- third Div for footer -->
<div class="footerdiv">
    <p>Copyrights @ 2019   Design by KraZyKid</p>
</div>
</body>
</html>

