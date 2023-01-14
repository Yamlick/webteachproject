<!Doctype html>
<html>
    <body>
    <head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1> Doctor Reservation</h1>
</div>
<div class="sticky">


    <form method="post" action="../Controller/cheackreserve.php" novalidate >
    <fieldset>
			<legend>Reservation</legend>
            <label>Doctor Name:</label><br>
			<input type="text" name="doctorname" required value = ""><br>
            <label>reverve Doctor:</label><br>
			<input type="text" name="reservation" required value = ""><br>
            <br>
			<input type="submit" name="submit" value = "Submit Reservation"><br>
            </fieldset>
</form>

	


</body>
</html>