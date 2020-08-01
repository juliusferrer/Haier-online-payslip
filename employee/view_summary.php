<?php
include("../connect.php");
  
  $sqlrecord_employee = "SELECT * FROM employee_record"  or die (mysqli_error());
  $queryEmployeeRecord = $mysqli->query($sqlrecord_employee) or die($mysqli->error);
$row = $queryEmployeeRecord->fetch_assoc();

// do{
//   echo $row['employee_id']." ".$row['payPeriod']." ".$row['netPay']. "<br/>";
// }while($row = $queryEmployeeRecord->fetch_assoc());

// print_r($row);

?>