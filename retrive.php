<?php
//show errors
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
//make connection and print error msgs
$con = mysqli_connect("localhost","root","","robotarm") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"robotarm") or die("Error: Can't Connect to DB");
//  receive information from db by using queries 
$sql= mysqli_query($con, "SELECT * FROM base ORDER BY innerID DESC LIMIT 1");
// for printing : 
while ($row = mysqli_fetch_assoc($sql)) { 
     echo (' forward: ');
    echo $row['forward'];
    echo(" ||");
    echo (' backward: ');
    echo $row['backward'];
    echo(" ||");

    echo (' left: ');
    echo $row['left'];
    echo(" ||");
    echo (' right: ');
    echo $row['right'];
    echo(" ||");
     echo (' stop: ');
     echo $row['stop'];
    echo(" ||");

}
//end &close 
mysqli_close($con);
?>