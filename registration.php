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
        <h1 class="heading"><img src="mm.png" class="head"></h1>
        <div class="heading"><h1>Semester Re-Registration Portal</h1></div>

        <?php
            $enrolmentNumber = $_GET['enrolmentnumber'];
            $semester = $_GET['semester'];
        ?>

        <form action="save.php" method="POST">
            <p>
                Enrolment Number: <u><?php echo $enrolmentNumber; ?></u>
                <input type="hidden" name="enrolmentnumber" value="<?php echo $enrolmentNumber; ?>">
                <input type="hidden" name="semester" value="<?php echo $semester; ?>">
                <br><br>
                fill in your list of courses...
                <table>
                    <tr> <th>Course Code</th> <th>Course Title</th> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                    <tr> <td><input type="text" name="coursecodes[]" placeholder="ABCxxxx"></td> <td><input type="text" name="coursenames[]" placeholder="Course title"></td> </tr>
                </table>
                <p class="right">
                    <input type="submit" value="register >>">
                </p>
            </p>
        </form>
    </body>
</html>