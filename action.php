<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
    <?php echo "Welcome "; echo $_POST["fname"];  echo " "; echo $_POST["lname"];?>

</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="portfolio">
   <h1> Your Detail..<!-- <?php echo "Welcome "; echo $_POST["fname"];  echo " "; echo $_POST["lname"];?>--></h1>
   <div class="detail">
   <h2 class="bold">Personal detail:-</h2>
       <h2>Name:<?php echo $_POST["fname"];  echo " "; echo $_POST["lname"];?></h2>
       <h2>Father's Name: <?php echo $_POST["fatname"]; ?></h2>
       <h2>Date of birth:<?php echo $_POST["Dob"];?></h2>
<br><br>
       <h2 class="bold">Qualification:-</h2>
       <table>
           <tr>
               <th>Qualified</th>
               <th>Marks obtained</th>
               <th>Total marks</th>
               <th>Marks percentage(%)</th>
           </tr>
           <tr>
               <td><?php echo $_POST["qualification"]; ?></td>
               <td><?php echo $_POST["marks"]; ?></td>
               <td><?php echo $_POST["tmarks"]; ?></td>
               <td><?php echo $_POST["marksp"]; ?></td>
           </tr>
       </table>
   </div>
   <div class="pic">
       <img src="<?php echo $_POST["image"]?>" alt="">
   </div>

    </div>
    
</body>
</html>