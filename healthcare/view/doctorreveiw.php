<!Doctype html>
<html>
    <body>
    <head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1> Doctor Review</h1>
</div>
<div class="sticky">


    <form method="post" action="../Controller/reviewcheack.php" novalidate >
    <fieldset>
			<legend>Review</legend>
            <label>Doctor Name:</label><br>
			<input type="text" name="dname" required value = ""><br>
            <label>Doctor review:</label><br>
			<input type="text" name="rev" required value = ""><br>
            <br>
			<input type="submit" name="submit" value = "Submit Review"><br>
            </fieldset>
</form>

	


</body>
</html> 