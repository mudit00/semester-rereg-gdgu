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
        <div class="heading"><h1>Semester Re-Registration Details</h1></div>

        <?php
            $enrolmentNumber = $_POST['enrolmentnumber'];
            $semester = $_POST['semester'];

            $sql = "SELECT * FROM $table_students WHERE enrolmentno = $enrolmentNumber;";

            $result = mysqli_query($database_link, $sql);

            if($result == false) {
                die("The enrolment number entered by you is invalid. Please try again...");
            }

            $values = mysqli_fetch_array($result);

            if($values == false) {
                die("The enrolment number entered by you is invalid. Please try again...");
            }

            $name = $values['name'];
            $emailId = $values['emailid'];
            $phoneNumber = $values['phonenumber'];
            $address = $values['address'];
            $fatherName = $values['fathername'];
            $fatherEmailId = $values['fatheremailid'];
            $fatherOccupation = $values['fatheroccupation'];
            $motherName = $values['mothername'];
            $motherEmailId = $values['motheremailid'];
            $motherOccupation = $values['motheroccupation'];
            $school = $values['school'];
            $programme = $values['programme'];
            $stream = $values['stream'];
            $stay = $values['stay'];
            $domicile = $values['domicile'];
        ?>

        <form>
            <p>
                Enrolment Number: <u><?php echo $enrolmentNumber; ?></u>
                <input type="hidden" name="enrolmentnumber" value="<?php echo $enrolmentNumber; ?>">
            </p>
            <br>
            <br>
            <br>
            <ol>
                <li>Name of the Student <br><input type="text" disabled="disabled" value="<?php echo $name; ?>"> </li><br>
                <li>Email Id of the Student <br><input type="text" disabled="disabled" value="<?php echo $emailId; ?>"> </li><br>
                <li>Phone Number of the Student <br><input type="text" disabled="disabled" value="<?php echo $phoneNumber; ?>"> </li><br>
                <li> 
                    <ol type="i">
                        <li>Father's Name <br><input type="text" disabled="disabled" value="<?php echo $fatherName; ?>"> </li><br>
                        <li>Occupation of Father <br><input type="text" disabled="disabled" value="<?php echo $fatherOccupation; ?>"> </li><br>
                        <li>Father's Email Id <br><input type="text" disabled="disabled" value="<?php echo $fatherEmailId; ?>"> </li><br>
                    </ol>
                </li>
                <li> 
                    <ol type="i">
                        <li>Mother's Name <br><input type="text" disabled="disabled" value="<?php echo $motherName; ?>"> </li><br>
                        <li>Occupation of Mother <br><input type="text" disabled="disabled" value="<?php echo $motherOccupation; ?>"> </li><br>
                        <li>Mother's Email Id <br><input type="text" disabled="disabled" value="<?php echo $motherEmailId; ?>"> </li><br>
                    </ol>
                </li>
                <li>School of <br><input type="text" disabled="disabled" value="<?php echo $school; ?>"> </li><br>
                <li>Programme <br><input type="text" disabled="disabled" value="<?php echo $programme; ?>"> </li><br>
                <li>Stream <br><input type="text" disabled="disabled" value="<?php echo $stream ?>"> </li><br>
                <li>Semeseter <br><input type="text" disabled="disabled" value="<?php echo $semester; ?>"> </li><br>
                <li>Additional information<br><br>
                    <ol type="A">
                        <li>Domicile  <br><input type="text" disabled="disabled" value="<?php echo $domicile; ?>"> </li><br>
                        <li>Stay  <br><input type="text" disabled="disabled" value="<?php echo $stay; ?>"> </li><br>
                    </ol>
                </li>
                <li>
                    Course(s):
                    <table>
                        <tr> <th>Course Code</th> <th>Course Title</th> </tr>
                        <?php
                        for($i = 0; $i < count($_POST['coursecodes']); $i++) {
                            echo "<tr><td>".$_POST['coursecodes'][$i]."</td><td>".$_POST['coursenames'][$i]."</td></tr>";
                        }
                        ?>
                    </table>
                </li>
            </ol>
            <p class="right">
                <input type="submit" value="print" onclick="window.print()">
            </p>
        </form>
    </body>
</html>