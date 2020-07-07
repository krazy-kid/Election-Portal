<?php 
 ob_start();
 session_start();
 include("db_connect.php");


system('ipconfig /all');
 

$mycom=ob_get_contents();

ob_clean();
 
$findme = "Physical";

$pmac = strpos($mycom, $findme);
 

$mac=substr($mycom,($pmac+36),17);

$sqlu ="SELECT * FROM Results WHERE MAC='$mac'";
                   $retrieved = mysqli_query($db,$sqlu); 
				$Macadress = mysqli_num_rows($retrieved);					                                      



if(!isset($_SESSION['Username'])){
    header('Location:login.php');
}



?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <title>Home</title>




    <link rel="stylesheet" href="style.css" media="screen">

    <link rel="stylesheet" href="style.responsive.css" media="all">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="script/sweetalert.css">




    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

    <style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 0px;padding-left: 0px;  }
        .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
        .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

    </style>


    </script>

    <?php if(isset($_COOKIE['Voter'])) {?>
       <script type="text/javascript">

        $(document).ready(function(){
            var myValue = "Load";
            swal({
                    title: "You are back!",
                    text: "Since you already voted,do you want to see how these parties are performing? Click results",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonColor: "red",
                    confirmButtonColor: "green",
                    confirmButtonText: "Yes,Results!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: true,
                    closeOnCancel:true,
                    buttonsStyling: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        window.location ="poll.php";
                    }
                    else {
                        // swal("Cancelled", "Your Proposal file is safe :)", "error");
                    }
                });

        });

        </script>
    <?php }?>


    <?php if(isset($_SESSION['sweetalertOK'])) {?>
        <script type="text/javascript">

            $(document).ready(function(){
                var myValue = "Load";
                swal({
                        title: "You have voted successfully",
                        text: "Click Results if you want to see how this election is going",
                        type: "success",
                        showCancelButton: true,
                        cancelButtonColor: "red",
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes,Results!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: true,
                        closeOnCancel: true,
                        buttonsStyling: false
                    },
                    function(isConfirm){
                        if (isConfirm) {
                            window.location ="poll.php";
                        }
                        else {
                            // swal("Cancelled", "Your Proposal file is safe :)", "error");
                        }
                    });

            });

        </script>
        <?php  session_destroy(); }?>

    <?php if(isset($_SESSION['sweetalertError'])) {?>
        <script type="text/javascript">
            $(document).ready(function(){
                sweetAlert("NO Way...", "You have arleady voted you cant vote again!", "error");
            });
        </script>
        <?php  session_destroy(); }?>

    <?php if(isset($_SESSION['sweetalertError1'])) {?>
        <script type="text/javascript">
            $(document).ready(function(){
                sweetAlert("Voting Mistake...", "You did not select the department or year you are voting for try again!", "error");
            });
        </script>
        <?php

        session_destroy();
        setcookie("Voter","",time()-(3600*24*365));

    }?>
    <?php if(isset($_SESSION['sweetalertError2'])) {?>
        <script type="text/javascript">
            $(document).ready(function(){
                sweetAlert("Voting Mistake...", "You did not select a Candidate your are voting for try again!", "error");
            });
        </script>
        <?php

        session_destroy();
        setcookie("Voter","",time()-(3600*24*365));

    }?>

    <?php if(!isset($_COOKIE['Voter'])&&$Macadress==0){?>
        <script type="text/javascript">
            $(document).ready(function(){
                var myValue = "Load";
                swal({
                        title: "Terms & Conditions?",
                        text: "Clicking Proceed you agree to our terms and conditions that your a RCERT Student and you are Authorized to participate in this president election",
                        //type: "warning",
                        showCancelButton: true,
                        cancelButtonColor: "red",
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes,Proceed!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: true,
                        closeOnCancel: false,
                        buttonsStyling: false
                    },
                    function(isConfirm){
                        if (isConfirm) {
                            // function(){ location.reload(); }
                        }
                        else {
                            swal("Too bad", "Thanks for being honest :)", "error");
                        }
                    });

            });

        </script>

    <?php   }elseif(!isset($_COOKIE['Voter'])&&$Macadress!=0){  ?>

        <script type="text/javascript">
            $(document).ready(function(){
                sweetAlert("NO Way...", "You have already voted you cant vote again!", "error");
            });
        </script>


    <?php } ?>
 	
	

 
 </head>
<body>
<div id="art-main">
<header class="art-header" style="background-color: #FCFCFC;">

    <div class="art-shapes">
        <div class="art-object789181989"></div>

            </div>
<h1 class="art-headline">
    <a href="/" style="color: #FCFCFC;font-size: xx-large">Rajiv Gandhi College Of Engineering, Chandrapur</a>
</h1>
<h2 class="art-slogan">2019 Elections for Students University Representative RCERT</h2>

<marquee  scrollamount="4" class="art-marquee">This election will start on 5 April 2019 will end on 10 April 2019</marquee>
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                	<div class="art-content-layout">
    <div class="art-content-layout-row">
    	        	
    <form method="post" action="vote.php"'>

    <div class="art-layout-cell layout-item-0" style="width: 50%" >
        <span style="font-weight: bold; font-size: 14px; font-family: 'Courier New';">
        	Signed In as : <?php echo $_SESSION['Username'];?>

        </span>&nbsp;

         <span style="font-weight: bold; font-size: 14px; font-family: 'Courier New';">
        	<a href="logout.php">Logout</a>
        </span>&nbsp;


        <br><br>

        <span style="font-weight: bold; font-size: 14px; font-family: 'Courier New';">
        	SELECT DEPARTMENT :<select style='width:220px;height:37px;border:1px solid;' name="department"  id='department' >
                 <option value="" disabled selected>--Select--</option>
                 <option>Mechanical</option>
                 <option>Civil</option>
                 <option>Electrical</option>
                 <option>Electronics</option>
                 <option>C.S.E</option>
                 <option>I.T.</option>
                 <option>Mining</option>


             </select>
        </span>&nbsp;

         <span style="font-weight: bold; font-size: 14px; font-family: 'Courier New';">
        	SELECT YEAR :<select style='width:220px;height:37px;border:1px solid;' name="year"  id='year' >
                 <option value="" disabled selected>--Select--</option>
                 <option>1st Year</option>
                 <option>2nd Year</option>
                 <option>3rd Year</option>
                 <option>4th Year</option>


             </select>
        </span>&nbsp;




        <p style="text-align: left;">
        	<span style="font-weight: bold; font-family: 'Courier New'; font-size: 20px;">
        		VOTE FOR UNIVERSITY REPRESENTATIVE</span>
        	</p>
        	


      <table class="art-article" style="width: 100%; ">
      <tbody>
        <tr>
      	    <td style="width: 25%; ">
      	            <img width="145" height="120" alt="" class="art-lightbox" src="images/images1.jpg" radius="100%">
                    <br><br><br>&nbsp;
                <label class="art-checkbox">
                    <input type="radio" name="party1"><span style="font-size: 16px; font-family: 'Times New Roman'; font-weight: bold;">Alex</span></label>
            </td>
       <td style="width: 25%; "><img width="145" height="120" alt="" class="art-lightbox" src="images/images2.jpg" ><br><label class="art-checkbox"><br><br>&nbsp;
             <input type="radio" name="party2"><span style="font-family: 'Times New Roman'; font-weight: bold; font-size: 16px;">Maddy</span></label><br>
     </td>
       <td style="width: 25%; "><img width="145" height="120" alt="" class="art-lightbox" src="images/images3.jpg" >
       <br><br><br><label class="art-checkbox"><input type="radio" name="party3"><span style="font-family: 'Times New Roman'; font-size: 16px; font-weight: bold;">Peppe</span></label><br>
       </td>
       <td style="width: 25%; "><img width="145" height="120" alt="" class="art-lightbox" src="images/images4.jpg" ><br><br><br><label class="art-checkbox">
        <input type="radio" name="party4"><span style="font-weight: bold; font-family: 'Times New Roman'; font-size: 16px;">Jimmy</span></label><br>
        </td></tr>
        </tbody>
        </table>
       <p style="text-align: left;"><span style="font-size: 14px; font-family: 'Courier New'; ">
       	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
     <span style="font-size: 14px; font-family: 'Courier New'; ">&nbsp;</span>

            <a href="poll.php"><center><input type="submit" class="art-button" value="Cast Your Vote" id="btnvote" name="btnvote"></center></a> &nbsp;
        <a href="poll.php"> <center><input type="button" class="art-button" value="Check Results"  name="btnvote"></center> </a>&nbsp;

   <span style="font-size: 14px; font-family: 'Courier New'; ">&nbsp;</span>
   <span style="color: rgb(255, 255, 255); "><span style="font-family: 'Courier New'; font-size: 14px;"></span></span>

    </div>

    </div>
</div>

</div>


</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
        <div style="position:relative;padding-left:10px;padding-right:10px"><p>© 2019, KraZyKid . All Rights Reserved.</p></div>
    </footer>

</div>
<p class="art-page-footer">
        <span id="art-footnote-links">
        </span>
</p>
</div>


</body></html>