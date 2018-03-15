<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title> REGISTRATION</title>
          <meta name="viewport" content="width=device-width">
	<!--Styling with css-->
	<link href="stylesheetphp.css" type="text/css" rel="stylesheetphp">
          <style>

     	h1 {
     		text-align: center;
         }
          </style>
     </head>
     <body>
          <h1 <img src="mm.png">GD Goenka University  </h1><br>
          <br><h2>REGISTRATION FORM </h2>
<br>
 <ul type="disc">
          <li><b>NAME:-</b>  <?php echo $_POST["name"]; ?><br></li><br>
          <li><b>FATHER NAME:-</b><?php echo $_POST["Fathername"];?></li>
            <ol type="i"><li> <b>OCCUPATION OF FATHER:-</b> <?php echo $_POST["OccupationofFather"];?></li>
                 <li><b>EMAIL ID :-</b> <?php echo$_POST["EFather"]; ?></li>
            </ol><br>
<li><b>MOTHER NAME:-</b><?php echo $_POST["Mothername"];?></li>
 <ol type="i"><li> <b>OCCUPATION OF MOTHER:-</b> <?php echo $_POST["OccupationofMother"]; ?></li>
       <li><b>EMAIL ID :-</b> <?php echo$_POST["EMother"]; ?></li><br>
 </ol>
 <li><b>Address:-</b><?php echo $_POST["address"] ?></li><br>
 <li><b>EMAIL ID:-</b><?php echo $_POST["email"] ?></li><br>
  <li><b>Number:-</b><?php echo $_POST["Mobile"] ?></li><br>
<li><b>Enrollment No.</b> <?php echo $_POST["Enrollmentno"];?></li><br>
<li><B><?php echo $_POST["School"];  ?></B>
     <li> <b>Semester:-</b><?php echo $_POST["Semester"];?></li><br>
     <li> <b>Section:-</b><?php echo $_POST["Section"];?></li><br>
     <li><b> Additional Information:-</b><br> <ul><li><b>Domicile:-</b><?php echo $_POST["Domicile"];?></li>
     <li><b>Stay:-</b><?php echo $_POST["stay"];?></li>
</li></ul><b><br>
<li>Course(s) in which student is registering:</li></b><br>
     <table border="3" >
          <tr>
               <th>Course</th>
               <th>Course code</th>
          </tr>
          <tr>
             <td>
                 <?php
       echo $_POST["1"];
       ?> </td>
       <td><?php
       echo $_POST["a1"];
                 ?>
             </td>
          </tr>   <tr>
                <td>
                    <?php
          echo $_POST["2"];
          ?> </td>
          <td><?php
          echo $_POST["a2"];
                    ?>
                </td>
             </tr>
             <tr>
                <td>
                    <?php
          echo $_POST["3"];
          ?> </td>
          <td><?php
          echo $_POST["a3"];
                    ?>
                </td>
             </tr>
             <tr>
               <td>
                   <?php
          echo $_POST["4"];
          ?> </td>
          <td><?php
          echo $_POST["a4"];
                   ?>
               </td>
             </tr>
             <tr>
                <td>
                    <?php
          echo $_POST["5"];
          ?> </td>
          <td><?php
          echo $_POST["a5"];
                    ?>
                </td>
             </tr>
             <tr>
               <td>
                   <?php
          echo $_POST["6"];
          ?> </td>
          <td><?php
          echo $_POST["a6"];
                   ?>
               </td>
             </tr>
             <tr>
      <td>
          <?php
echo $_POST["7"];
?> </td>
<td><?php
echo $_POST["a7"];
          ?>
      </td>
   </tr>
</table>
</b><br>

 <button onClick="window.print()">Print</button>
</body>
</html>
