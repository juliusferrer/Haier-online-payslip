<?php 
  include("../connect.php");
  include("../auth.php");
  include("./view_summary.php");
 

# For authentication, To verfiy who is the user who logged in

  $id = $_SESSION["SESS_MEMBER_ID"];
  $qry = "SELECT * FROM employee_record WHERE employee_id = '$id'" or die (mysqli_error());
  $result = mysqli_query($mysqli, $qry);

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $fname = $row["name"];
    $lname = $row["lastName"];
    $mname = $row["middleName"];
  }

  
  

?>
<!-- test -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haier Online Payslip</title>

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" type="text/css" href="">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<nav class="transparent">
    <div class="nav-wrapper">
        <div class="container">

            <a href="#" class="brand-logo">
                <img src="../images/LOGO2-01.png" alt="" class="responsive-img" style="height: 30px;" >
            </a>
            <ul id="nav-mobile" class="right">
                <!-- <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li> -->
                <li><a href="logout.php" class="red-text">Logout</a></li>
            </ul>
            </div>

        </div>
  </nav>

    <section>

            <div class="container" >
            <br>
            <img class="responsive-img " src="../images/header-01.png" alt=""> 
            <br>
            <h5 class="center"> Welcome <?php echo $fname." ".$mname." ".$lname; ?> </h2>    
             <div class="divider"></div>
            </div>
           
            <br>

    </section>
   
<br>  
   
  <section>
        <div class="container grey lighten-5">

        <table class="highlight responsive-table centered z-depth-4">
        <thead class="light-blue darken-5"> 
          <tr class="white-text ">
              <th>Pay Period</th>
              <th>Action</th>
              <th>Net Pay</th>
          </tr>
        </thead>

        <tbody>
        <?php do{ ?>
          <tr>
            <td><?php echo $row['payPeriod'];?></td>
            <td><a href="payslip_details.php">View Details</a></td>
            <td><?php echo $row['netPay'];?></td>
          </tr>
        <?php }while($row = $queryEmployeeRecord->fetch_assoc()); ?>
        </tbody>
      </table>

        </div>
  </section>



	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      var i = <?php echo $fname;?>;

      console.log(i)

    </script>
</body>
</html>