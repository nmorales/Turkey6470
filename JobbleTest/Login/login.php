<?php
        session_start();
       
        // dBase file
        include "../dbConfig.php";

        if ($_GET["op"] == "login")
  {
  if (!$_POST["username"] || !$_POST["password"])
        {
        die("You need to provide a username and password.");
        }
  
  // Create query
  $passwordHash = sha1($_POST['password']);
  $q = "SELECT * FROM User WHERE `UserName` = '" . $_POST["username"] . "' AND `Password` = '".$passwordHash."'";
  // Run query
  $r = mysql_query($q);

  if ( $obj = @mysql_fetch_object($r) )
        {
        $row = mysql_fetch_array($r);
        $userID = $row['UserID'];
        $userName = $row['UserName'];
        // Login good, create session variables
        $_SESSION["valid_id"] = $obj->id;
        $_SESSION["valid_user"] = $_POST["username"];
        // $_SESSION["valid_user_id"] = $userID;
        // $_SESSION["valid_user_name"] = $userName;
        $_SESSION["valid_time"] = time();

	    
	    // Redirect to member page
        Header("Location: ../index.php");
        }
  else
        {
        // Login not successful
        die("Sorry, could not log you in. Wrong login information.");
        }
  }
        else
  {
//If all went right the Web form appears and users can log in
  echo "<form action=\"?op=login\" method=\"POST\">";
  echo "Username: <input name=\"username\" size=\"15\"><br />";
  echo "Password: <input type=\"password\" name=\"password\" size=\"8\"><br />";
  echo "<input type=\"submit\" value=\"Login\">";
  echo "</form>";
  }
        ?>