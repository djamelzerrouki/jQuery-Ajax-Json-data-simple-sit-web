<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$dbbase='salat';
$base= mysqli_connect($dbhost,  $dbuser, $dbpass, $dbbase);
 
 $q=$_GET['q'];

 if (mysqli_connect_errno())
  die('Could not connect: ' . mysql_error());
 

$return_arr = array();
$sql="SELECT * FROM timesalat WHERE jour='".$q."';";
if ($result = mysqli_query( $base, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {

    $row_array['id'] = $row['id'];
    $row_array['jour'] = $row['jour'];
    $row_array['h1'] = $row['h1'];
    $row_array['h2'] = $row['h2'];
    $row_array['h3'] = $row['h3'];
    $row_array['h4'] = $row['h4'];
    $row_array['h5'] = $row['h5'];

    array_push($return_arr,$row_array);
   }
 }

mysqli_close($base);

echo json_encode($return_arr);
?>