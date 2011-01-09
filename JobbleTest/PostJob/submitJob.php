<?php

if (isset($_POST['submit'])) {
  include("../dbConfig.php");	
  
	if ($_POST["category"] == 'other') {
	  $category = $_POST["otherCategory"];
	} else {
	  $category = $_POST["category"]; 
	}

	$q = "INSERT INTO `tfleish+test`.`Jobs` (`ID`, `Title`, `Start`, `End`, `Repeated`, `StreetName`, `City`, `State`, `ZipCode`, `EstimateLocation`, `Category`, `Price`, `Time`, `Car`, `ManualLabor`, `Description`, `Status`)  VALUES (NULL, '".$_POST["title"]."', '".$_POST["startDate"]."', '".$_POST["endDate"]."', '0', '".$_POST["stName"]."', '".$_POST["city"]."', '".$_POST["state"]."', '".$_POST["zipCode"]."', '".$_POST["zipCode"]."', '".$category."', '".$_POST["price"]."', '".$_POST["time"]."', '".$_POST["car"]."', '".$_POST["manLabor"]."', '".$_POST["description"]."', 'open')";

  $r = mysql_query($q);
  
  // Make sure query inserted user successfully
  if ( !mysql_insert_id() ) {
    die("Error: Post not added to database.");
  } else {
    // Redirect to thank you page.
    // Header("Location: submitJob.php?op=thanks");
    echo "happy face?";
  }
  
}

 /* 
//The thank you page

        elseif ( $_GET["op"] == "thanks" ) {
          echo "<h2>Thanks for entering a job!</h2>";
        }
 
 
//The web form for input ability
 
        else
  {
  include("submitJobForm.php");
  }

*/



?>