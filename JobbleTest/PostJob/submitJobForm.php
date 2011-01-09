<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <title>Add a Job</title>

  <script language="JavaScript" src="calendar_js.js"></script>
  <link rel="stylesheet" href="calendar_css.css">

  <script type="text/javascript">

    function display(obj,id1) {
      txt = obj.options[obj.selectedIndex].value;
      document.getElementById(id1).style.display = 'none';	//Hides the hidden text
      if ( txt.match(id1) ) {
        document.getElementById(id1).style.display = 'block';	//Shows the hidden text
      }
    }

  </script>

</head>

<body>
<form action="submitJob.php" method="post">
  <td class="title">Title:</td>
  <td class="field"><input type="text" name="title" /></td>

  <table width="340" cellspacing="0" cellpadding="2"
    <thead>
      <tr>
        <td class="title">Job Category:</td>
        <td>
	
	        <select name="category" onchange="display(this,'other');">
				<option>Please select:</option>
				<option value="gardening">Gardening</option>
				<option value="painting">Painting</option>
				<option value="mowingLawn">Mowing Lawn</option>
				<option value="rakingLeaves">Raking Leaves</option>
				<option value="shovelingSnow">Shoveling Snow</option>
				<option value="shopping">Shopping</option>
				<option value="movingBox">Moving Boxes, Lifting Heavy Objects</option>
				<option value="installElec">Installing Electronics</option>
				<option value="repairHouse">Repairing Household Appliances</option>
				<option value="waterPlant">Watering Plants</option>
				<option value="takePet">Taking Care of Pet(s)</option>
				<option value="plumbing">Plumbing</option>
				<option value="cleanHouse">Cleaning the House</option>
				<option value="pickMail">Pick Up Mail</option>
				<option value="other">Other</option>
			</select>

        </td>
      </tr>
    </thead>


    <tbody id="other" style="display: none;">

      <td class="title">Other:</td>
      <td class="field"><input type="text" name="otherCategory" /></td>

    </tbody>

    <tbody>
      <td class="title" width= "500" rowspan="2" name="startDate">Start Date:</td>
      <td><?php include("CalendarHackStart.php"); ?></td>
      <td class="title" name="endDate">End Date:</td>
      <td><?php include("CalendarHackEnd.php"); ?></td>
    </tbody>

    <td class="title">Street Name:</td>
    <td class="field"><input type="text" name="stName" /></td>
    <td class="title">City:</td>
    <td class="field"><input type="text" name= "city" /></td>
    <td class="title">Zip Code:</td>
    <td class="field"><input type="text" name= "zipCode" /></td>

    <thead>
      <tr>
        <td class="title">State:</td>
        <td>

			<select name="state">
				<option>State:</option>
				<option value="alabama">Alabama</option>
				<option value="alaska">Alaska</option>
				<option value="arizona">Arizona</option>
				<option value="arkansas">Arkansas</option>
				<option value="california">California</option>
				<option value="colorado">Colorado</option>
				<option value="connecticut">Connecticut</option>
				<option value="delaware">Delaware</option>
				<option value="florida">Florida</option>
				<option value="georgia">Georgia</option>
				<option value="hawaii">Hawaii</option>
				<option value="idaho">Idaho</option>
				<option value="illinois">Illinois</option>
				<option value="indiana">Indiana</option>
				<option value="iowa">Iowa</option>
				<option value="kansas">Kansas</option>
				<option value="kentucky">Kentucky</option>
				<option value="louisiana">Louisiana</option>
				<option value="maine">Maine</option>
				<option value="maryland">Maryland</option>
				<option value="massachusetts">Massachusetts</option>
				<option value="michigan">Michigan</option>
				<option value="minnesota">Minnesota</option>
				<option value="mississippi">Mississippi</option>
				<option value="missouri">Missouri</option>
				<option value="montana">Montana</option>
				<option value="nebraska">Nebraska</option>
				<option value="nevada">Nevada</option>
				<option value="newHampshire">New Hampshire</option>
				<option value="newJersey">New Jersey</option>
				<option value="newMexico">New Mexico</option>
				<option value="newYork">New York</option>
				<option value="northCarolina">North Carolina</option>
				<option value="northDakota">North Dakota</option>
				<option value="ohio">Ohio</option>
				<option value="oklahoma">Oklahoma</option>
				<option value="oregon">Oregon</option>
				<option value="pennsylvania">Pennsylvania</option>
				<option value="rhodeIsland">Rhode Island</option>
				<option value="southCarolina">South Carolina</option>
				<option value="southDakota">South Dakota</option>
				<option value="tennessee">Tennessee</option>
				<option value="texas">Texas</option>
				<option value="utah">Utah</option>
				<option value="vermont">Vermont</option>
				<option value="virginia">Virginia</option>
				<option value="washington">Washington</option>
				<option value="westVirginia">West Virginia</option>
				<option value="wisconsin">Wisconsin</option>
				<option value="wyoming">Wyoming</option>
			</select>

        </td>
      </tr>
    </thead>

    <td class="title">Price:</td>
    <td class="field"><input type="text" name="price" /></td>
    <td class="title">Estimated Time of Job (in minutes):</td>
    <td class="field"><input type="text" name="time" /></td>

    <td class="title">Car Required?
        <input type="radio" name="car" value="yes" /> Yes
        <input type="radio" name="car" value="no" /> No
    </td>

    <td>Manual Labor:
		<select name="manLabor">
			<option>Manual Labor Scale:</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
    </td>

    <td><class= "title">Description:</td>
    <td><class="field"><input type="text" name="description" /></td>

    <tfoot>
      <tr>
        <td> <input type="submit" name="submit" value="Add Job" /></td>
      </tr>
    </tfoot>
  </table>
</form>  
</body>
</html>