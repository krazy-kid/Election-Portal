<?php
?>
<!doctype html>
<html>
<head>
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
     * {
        margin: auto;
        }      margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 80%;
        }
        .center-fit {
            max-width: 80%;
            max-height: 80vh;

.mySlides {display:none;}
</style>
</head>
<body style="background: #7D7986">


<div class="imgbox">
<img width="1260px" class="center_fit" tyle="max-width:400px"  src="images/rcertlogo.png">
</div>

<div class="slidediv" style="max-width:500px">
  <img  class="mySlides" src="images/img3.jpg" style="width:100%">
  <img  class="mySlides" src="images/staff.jpg" style="width:100%">
  <img class="mySlides" src="images/img1.jpg" style="width:100%">
  <img class="mySlides" src="images/img2.jpg" style="width:100%">
</div>

<div class="textjustify">

<p>More than 35 years ago, it was the vision of Late Shri Shantaramji Potdukhe that transformed the educational profile of Chandrapur when he laid foundation of technical education by starting Rajiv Gandhi College of Engineering, Research and Technology (formerly Chandrapur Engineering College ) in 1983. It was a humble beginning with 5 branches and 180 seats. It is now has 460 intake in 7 branches ( Civil Engg, Computer Technology, Electronics Engg, Electronics & Power Engg., Information Technology, Mechanical Engg., Mining Engg.) and PG courses in three disciplines; (Computer Science and Engg, Energy Management System, CAD/CAM) . Today under the dynamic leadership of Principal Dr. Z.J.Khan, the college has proved the academic merit and has successfully cultivated the sense of social responsibility.</p>
<br>
<p>The excellent results are the academic balance sheets of college whereas Energy park, Industrial waste characterization, Fly ash utilization centre and Pollution analysis signify the socio-environmental commitment. Equipped with the academic vision of Shri Shantaramji Potdukhe, a team of highly qualified faculty members put together by progressive Principal Dr. Z.J.Khan, the college is proudly marching ahead on the path of academic excellence...</p>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

<br>
<table><tr><td>
<center>
<a href="admin.php"><input type="button" class="button" value="Admin"  name="admin"></center>&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

      <td>  <a href="rules.php"> <center><input type="button" class="button" value="Go To Voting Page"  name="rule"></center> </a>&nbsp;
</td></tr>
</table>
<div class="footerdiv1">
    <p>Copyrights @ 2019   Design by KraZyKid</p>
</div>
</body>
</html>
