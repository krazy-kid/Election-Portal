<?php session_start();
//setcookie("Voter",$user,time()-(3600*24*365));
include("db_connect.php");

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
</head>
<meta charset="utf-8">
<title>Home</title>
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

<!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" href="style.css" media="screen">
<!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
<link rel="stylesheet" href="style.responsive.css" media="all">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">




<script src="script.js"></script>
<script src="script.responsive.js"></script>


<script type="text/javascript" src="images/canvasjs.min.js"></script>



<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 0px;padding-left: 0px;  }
    .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
    .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
<?php
$sqluser ="SELECT * FROM Results";
$retrieved = mysqli_query($db,$sqluser);
$totalvotes = mysqli_num_rows($retrieved);

$sqlamend ="SELECT * FROM Results WHERE Party='PARTY1'";
$retr = mysqli_query($db,$sqlamend);
$totalparty1 = mysqli_num_rows($retr);

$sqlresub ="SELECT * FROM Results WHERE Party='PARTY2' ";
$retrre = mysqli_query($db,$sqlresub);
$totalparty2 = mysqli_num_rows($retrre);

$sqlexpd ="SELECT * FROM Results WHERE Party='PARTY3'";
$retexp = mysqli_query($db,$sqlexpd);
$totalparty3 = mysqli_num_rows($retexp);

$sqlc ="SELECT * FROM Results WHERE Party='PARTY4'";
$retc = mysqli_query($db,$sqlc);
$totalparty4 = mysqli_num_rows($retc);


if($totalparty1!=0){$party1=round(( $totalparty1/$totalvotes)*100);}else{$party1=0;} //this gives the initial submissions studies percentage
if($totalparty2!=0){$party2=round(($totalparty2/ $totalvotes)*100);}else{$party2=0;}  //this gives the resubmsion studies percentage
if($totalparty3!=0){$party3=round(($totalparty3/ $totalvotes)*100);}else{$party3=0;}//this gives the expedited studies percentage
if($totalparty4!=0){$party4=round(( $totalparty4/ $totalvotes)*100);}else{$party4=0;}  //this gives amendments studies percentage


if($party1>$party2 &&$party1>$party3 &&$party1>$party4){$party1e='true';}else{$party1e='false';}
if($party2>$party1 &&$party2>$party3 &&$party2>$party4){$party2e='true';}else{$party2e='false';}
if($party3>$party1 &&$party3>$party2 &&$party3>$party4){$party3e='true';}else{$party3e='false';}
if($party4>$party1 &&$party4>$party2 &&$party4>$party3){$party4e='true';}else{$party4e='false';}

?>



<script type="text/javascript">

    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer",
            {
                title:{
                    text: "CURRENT SURVEY RESULTS",
                    fontSize: 30
                },
                exportFileName: "Pie Chart",
                exportEnabled: false,
                animationEnabled: true,
                legend:{
                    verticalAlign: "bottom",
                    horizontalAlign: "center",
                    fontSize: 15,
                    fontFamily: "font-family: Times New Roman",
                    fontColor: "black"
                },

                data: [
                    {
                        type: "pie",
                        showInLegend: true,
                        toolTipContent: "{name}: <strong>{y}%Votes</strong>",
                        indexLabel: "{name} {y}%Votes",
                        dataPoints: [
                            { y:<?php echo$party1; ?>,
                                name: "Alex",
                                color: 'Yellow',
                                exploded:<?php echo$party1e; ?>
                            },

                            { y:<?php echo$party2; ?>,
                                name: "Maddy",
                                color: 'Orange',
                                exploded:<?php echo$party2e; ?>
                            },

                            { y:<?php echo$party3; ?>,
                                name: "Peppe",
                                color:'Green',
                                exploded:<?php echo$party3e; ?>
                            },

                            { y:<?php echo$party4; ?>,
                                name: "Jimmy",
                                color: 'Blue',
                                exploded:<?php echo$party4e; ?>
                            }

                        ]
                    }
                ]
            });
        chart.render();
        function date_time(id)
        {
            date = new Date;
            year = date.getFullYear();
            month = date.getMonth();
            months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
            d = date.getDate();
            day = date.getDay();
            days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
            h = date.getHours();
            if(h<10)
            {
                h = "0"+h;
            }
            m = date.getMinutes();
            if(m<10)
            {
                m = "0"+m;
            }
            s = date.getSeconds();
            if(s<10)
            {
                s = "0"+s;
            }
            result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
            document.getElementById(id).innerHTML = result;
            setTimeout('date_time("'+id+'");','1000');
            return true;
        }

    }
</script>
</script>

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
<h2 class="art-slogan">2019 Students University Representative results page</h2>

<marquee  scrollamount="4" class="art-marquee">This election will start on 5 April 2019 will end on 10 April 2019</marquee>

<script>
<span id="date_time"></span>
    <script type="text/javascript">0 window.onload = date_time('date_time');
</script>

</header>
<div class="art-sheet clearfix">
    <div class="art-layout-wrapper">
        <div class="art-content-layout">
            <div class="art-content-layout-row">
                <div class="art-layout-cell art-content">




                    <div class="art-postcontent art-postcontent-0 clearfix">

                        <div class="art-layout-cell layout-item-0" style="width: 50%" >
                            <p>
                            <center>

                                <div id="chartContainer" style="height: 410px; width: 100%;">

                                </div>
                            </center>
                            </p>
                        </div>
                        <center><a href="login.php" class="art-button" style="font-family: 'Times New Roman'; font-size: 16px;  font-weight: bold; ">Go back</a></center>

                    </div>


                </div>
            </div>
        </div>
    </div><footer class="art-footer">
        <div style="position:relative;padding-left:10px;padding-right:10px"><p>© 2019, Designed by KraZyKid. All Rights Reserved.</p></div>
    </footer>

</div>
<p class="art-page-footer">
        <span id="art-footnote-links">
        </span>
</p>



</body></html>