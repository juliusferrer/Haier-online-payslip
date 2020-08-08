<?php 
  include("../connect.php");
  $id = $_GET['employee_id'];
  $qry3 = "SELECT * FROM employee_record WHERE employee_id = '$id'" or die (mysqli_error());
  $result = mysqli_query($mysqli, $qry3);

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $fname = $row["name"];
    $lname = $row["lastName"];
    $mname = $row["middleName"];
    $emp_id = $row['employee_id'];

  }
  $id2 = $_GET['id'];
  $sqlRecord_employee = "SELECT * FROM employee_record WHERE id = '$id2' ORDER BY payPeriod DESC" or die (mysqli_error());
  $queryEmployee_Record = $mysqli->query($sqlRecord_employee) or die (mysqli_error());
  $row = $queryEmployee_Record->fetch_assoc();
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
     <style>
     body {
      font-size: 12px;
     }

     table {}
     
     </style>
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
    <section  >

    <div  class="container grey lighten-5 z-depth-2">
   
  
    <div class="table-responsive text-font">
    

        <div class="row" id="printableArea">

        <div class="col m6 s12" >
        <table class="highlight responsive-table">
      
            <tbody>
          
           <p>  HAIER ELECTRICAL APPLIANCES PHILIPPINES, INC</p> 
            <tr>
                <th>Department:</th>
                <td><?php echo $row['department']; ?></td>
              </tr>

              <tr>
                <th>Employee Name:</th>
                <td><?php echo $lname." ".$fname." - ".$emp_id; ?></td>
              </tr>

              <tr>
                <th> Basic Pay</th>
                <td><?php echo $row['basicPay']; ?></td>
              </tr>

              <tr>
                 <th>Overtime Pay</th>
                <td><?php echo $row['overtimePeriod']; ?></td>
              </tr>
              
              <tr>
                 <th>INCENTIVES</th>
                <td><?php echo $row['incentives']; ?></td>
              </tr>
              
              
            </tbody>

        </table>
        
        </div>

        <div class="col m6 s12">
        <table class="highlight responsive-table">

            <tbody>
            <p>  Proof Sheet - Trial Computation</p> 

            
            <tr>
                <th>Pay Period</th>
                <td><?php echo $row['payPeriod']; ?></td>
              </tr>
              <tr>
                <th>SSS Contribution</th>
                <td><?php echo $row['sssContribution'].".00"; ?></td>
              </tr>

              <tr>
                <th>PHIC Contribution</th>
                <td><?php echo $row['phicContribution'].".00"; ?></td>
              </tr>

              <tr>
                <th>HDMF Contribution</th>
                <td><?php echo $row['hdmfContribution'].".00"; ?></td>
              </tr>

              <tr>
                <th>SSS LOAN</th>
                <td><?php echo $row['sssLoan']; ?></td>
              </tr>

              <tr>
                <th>PAG-IBIG LOAN</th>
                <td><?php echo $row['pagIbigContribution']; ?></td>
              </tr>

            
            </tbody>
        </table>
        
        </div>
        <!-- <br>
        <div class="fluid">
        <div class="row">
        <div class="col s12">
        <br>
        <div class="divider"></div>
        </div>
        </div>
        </div> -->


        <div class="col m6 s12">
        <table class="highlight responsive-table left">

            <tbody> 
          
            <tr class="total">
                <th>Total Income:</th>
                <td><?php echo $row['total_Income']; ?></td>
              </tr>

              <tr>
                 <th>Undertime/Late</th>
                <td style="font-size:12px; padding-right:90px;"><?php echo $row['undertime/late'].".00"; ?></td>
              </tr>
              

              <tr>
                 <th>OTRegular</th>
                <td><?php echo $row['otreg'].".00"; ?></td>
              </tr>

              <tr>
                 <th>Night Diff.</th>
                <td><?php echo $row['nightDiff'].".00"; ?></td>
              </tr>
            
          </tbody>
        </table>

        </div>

        <div class="col m6 s12">
        <table class="highlight responsive-table"> 
          
            <tr class="total">
                <th>Total Deduction:</th>
                <td><?php echo $row['totalDeductions'].".00"; ?></td>
              </tr>

              <tr>
                 <th class="left">Net Pay:</th>
                <td class="" style="font-size:12px; padding-right:109px;"><?php echo $row['netPay']; ?></td>
              </tr>
              

              <tr>
                 <th>OT SUN:</th>
                <td style="font-size:12px; padding-right:100px;"><?php echo $row['otsun'].".00"; ?></td>
              </tr>

              <tr>
                 <th>OT LEGAL HOLIDAY:</th>
                <td><?php echo $row['otLegalHoliday'].".00"; ?></td>
              </tr>

              <tr>
                 <th>OT SPECIAL HOLIDAY:</th>
                <td>0:00</td>
              </tr>      
            
            </tfoot>
        </table>
        </div>
        

      
    </div>

</div>

        
    </div>
    </div>
    <div class="container">
        <button class="btn blue darken-4 waves-effect waves-dark" style="width:100%;" type="button" onclick="printDiv('printableArea')" value="PRINT / VIEW PAYSLIP">PRINT / VIEW PAYSLIP</button>
        <!-- <input class="btn blue darken-4 waves-effect waves-dark " style="width:100%;" type="button" onclick="printDiv('printableArea')" value="PRINT / VIEW PAYSLIP" /> -->
    </div>

    </section>
  


	<!-- Compiled and minified JavaScript -->
  <script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;

     
}
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>