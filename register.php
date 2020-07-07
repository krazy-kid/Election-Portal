<!doctype html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background: #7D7986">
<!-- first Div for Software Title -->
<div class="firstdiv">
    <p class="textstyle">Registration Page</p>
</div>
<!-- Second Div for Login Panel -->
<form action="usermodel.php" method="post" name="form1">
    <div class="regmiddlediv">
        <p class="fieldname" style="margin-left: 20px;">Stud ID : </p>
        <input type="text" name="studid" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z0-9]{1,20}$" required/>
        <p class="fieldname" style="margin-left: 20px;">First name : </p>
        <input type="text" name="fname" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z]{1,20}$" required/>
        <p class="fieldname" style="margin-left: 20px;">Last name : </p>
        <input type="text" name="lname" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z]{1,20}$" required/>
        <p class="fieldname" style="margin-left: 20px;">Department : </p>
        <select name="dept" style="position:absolute;margin-left: 130px; margin-top: -40px;">
            <option value="" disabled selected>--Select--</option>

            				                            <option>Mechanical</option>
            				                           <option>Electrical</option>
            				                           <option>Civil</option>
            				                           <option>C.S.E</option>
            				                           <option>I.T</option>
            				                           <option>Electronics</option>
            				                            <option>Mining</option>

            				           </select>
        <p class="fieldname" style="margin-left: 20px;">Contact : </p>
        <input type="text" name="contact" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="[0-9]{10}" required/>
        <p class="fieldname" style="margin-left: 20px;">Email : </p>
        <input type="text" name="email" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
        <p class="fieldname" style="margin-left: 20px;">Username : </p>
        <input type="text" name="username" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z]{1,20}$" required/>
        <p class="fieldname" style="margin-left: 20px;">Password : </p>
        <input type="password" name="password" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required/>

        <input type="submit" name="reg_btn" value="Register" class="btn" style="margin-left:130px;width: 100px;height: 25px;">

    </div>
</form>

<!-- third Div for footer -->
<div class="footerdiv">
    <p>Copyrights @ 2018   Design by KraZyKid</p>
</div>
</body>
</html>
