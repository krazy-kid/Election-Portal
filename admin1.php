<!doctype html>
<html>
<head>
    <title>Administration Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background: #7D7986">
<!-- first Div for Software Title -->
<div class="firstdiv">
    <p class="textstyle">Administration Page</p>
</div>

<form action="usermodel.php" method="post" name="form1">
    <div class="regmiddlediv">
        <p class="fieldname" style="margin-left: 20px;">Stud ID : </p>
        <input type="text" name="studid" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z0-9]{1,20}$" required/>
        <p class="fieldname" style="margin-left: 20px;">First name : </p>
        <input type="text" name="fname" style="position:absolute;margin-left: 130px; margin-top: -40px;" pattern="^[a-zA-Z]{1,20}$" required/>
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

        <input type="submit" name="admin_button" value="Submit" class="btn" style="margin-left:130px;width: 100px;height: 25px;">
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
