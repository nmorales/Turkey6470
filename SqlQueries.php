<?php

if(isset($_POST['searchJobs'])){
    //connect  to the database
    $db=mysql_connect  ("sql.mit.edu", "tfleish",  "turkey") or die ('I cannot connect to the database  because: ' . mysql_error());
    //-select  the database to use
    $mydb=mysql_select_db("tfleish+test");
    //-query  the database table
    $today = 2011-1-1; // TODO: TODAY'S DATE!!
    $sqlRepeat = "SELECT JobID FROM Repeat WHERE Date >" . $date .  "AND (Status = 'open' OR Status = 'apps')";
    //-run  the query against the mysql query function
    $result = mysql_query($sqlRepeat);
    //-create  while loop and loop through result set
    while($row=mysql_fetch_array($result)){
      $id  =$row['JobID'];
      $sqlJobs = "Select * FROM Jobs WHERE ID =" . $id;
      $result = mysql_query($sqlJobs);
      while ($rowJobs=mysql_fetch_array($resultJobs))

      //-display the result of the array
      echo "<ul>\n";
      echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n";
      echo "</ul>";
   }
}

if(isset($_POST['getNewsFeed'])) {
  //connect to the database
  $db = mysql_connect("sql.mit.edu", "tfleish",  "turkey") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("tfleish+test");
  //-query  the database table 
  $sql
}


?>
