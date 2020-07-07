<?php 
 ob_start();
session_start();
include("db_connect.php"); 

//Get the ipconfig details using system commond
system('ipconfig /all');
 
// Capture the output into a variable
$mycom=ob_get_contents();
// Clean (erase) the output buffer
ob_clean();
 
$findme = "Physical";
//Search the "Physical" | Find the position of Physical text
$pmac = strpos($mycom, $findme);
 
// Get Physical Address
$mac=substr($mycom,($pmac+36),17);
//Display Mac Address
//echo $mac;

$sqlu ="SELECT * FROM Results WHERE MAC='$mac'";
                    $retrieved = mysqli_query($db,$sqlu); 
					$totalvotes = mysqli_num_rows($retrieved);					                                      
                
				 
//Below is  the upload proposal button is clicked 
	if(isset($_POST['btnvote'])) 
     {
     	               
            if(!isset( $_COOKIE['Voter'])){
            	                    	
										
				if($_POST['department']!=''){
					$department = mysqli_real_escape_string($db,$_POST['department']);
	         $party1=mysqli_real_escape_string($db,$_POST['party1']);
			  $party2 = mysqli_real_escape_string($db,$_POST['party2']);
	  	     $party3=mysqli_real_escape_string($db,$_POST['party3']);
		     $party4=mysqli_real_escape_string($db,$_POST['party4']);
		   					
				         
                  if($party1!='')
                                 { $vote="PARTY1";}
				 elseif($party2!='')
				                   { $vote="PARTY2";}
				 elseif($party3!='')
				                    { $vote="PARTY3";}
				 elseif($party4!='')
				                    { $vote="PARTY4";}
				 else {
                              $user="elections";
            	    setcookie("Voter",$user,time()+(3600*24*365));					  
  	                $_SESSION['sweetalertError2']="No department";
	                header("Location:index1.php");
					      
						      exit;		      		
					       }
				 
						  			 
			              $date = date("d/m/y");	
               $query = "INSERT INTO Results (Department,Party,Date,MAC) ".
               "VALUES ('$department', '$vote','$date','$mac')";
                $db->query($query) or die('Error, query failed');
					             $user="elections";
				 	setcookie("Voter",$user,time()+(3600*24*365));
					
					$_SESSION['sweetalertOK']="YoK";
	                    header("Location:index1.php");
				 }
            else{
            	                   $user="elections";
            	    setcookie("Voter",$user,time()+(3600*24*365));
					  
  	                $_SESSION['sweetalertError1']="No department";
	                header("Location:index1.php");
	
                 }

                 }
            else{
  	                $_SESSION['sweetalertError']="Yo";
	                header("Location:index1.php");
	
                 }
  }
 ?>             
                         