<?php
include_once('db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GD Goenka University Semester Re-registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    </head>
    <body>
        <h1 class="heading"><img src="../mm.png" class="head"></h1>
        <div class="heading"><h1>Semester Re-Registration Portal</h1></div>

        <?php
            $enrolmentNumber = $_GET['enrolmentnumber'];
            $sql = "SELECT * FROM "
        ?>


        <p>
            Enrolment Number: <br><u><?php echo $enrolmentNumber; ?></u>
        </p>
        <br>
        <br>
        <br>
        <ol>
			<li>Name of the Student <br><u><?php echo $name; ?></u> </li><br>
			<li> 
                <ol type="i">
                    <li>Father's Name <br><u><?php echo $name; ?></u> </li><br>
                    <li>Occupation of Father <br><u><?php echo $name; ?></u> </li><br>
                    <li>Father's Email Id <br><u><?php echo $name; ?></u> </li><br>
			    </ol>
		    </li>
            <li> 
                <ol type="i">
                    <li>Mother's Name <br><u><?php echo $name; ?></u> </li><br>
                    <li>Occupation of Mother <br><u><?php echo $name; ?></u> </li><br>
                    <li>Mother's Email Id <br><u><?php echo $name; ?></u> </li><br>
                </ol>
            </li>
	        <li>School of <br><u><?php echo $name; ?></u> </li><br>
	        <li>Stream <br><u><?php echo $name; ?></u> </li><br>
            <li>Additional information<br><br>
                <ol type="A">
                    <li>Domicile  <br><u><?php echo $name; ?></u> </li><br>
                    <li>Stay  <br><u><?php echo $name; ?></u> </li><br>
                </ol>
            </li>
        </ol>
        <form action="registration.php" method="GET">
            <p>
                please provide your semester number... 
                <select name="Semester" type="number">
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
                <p class="right">
                    <input type="submit" value="proceed >>">
                </p>
            </p>
        </form>
    </body>
</html>