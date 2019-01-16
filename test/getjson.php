<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$dbbase='departemant';
$base= mysqli_connect($dbhost,  $dbuser, $dbpass, $dbbase);

if (mysqli_connect_errno())
  die('Could not connect: ' . mysql_error());

$return_arr = array();
$sql="SELECT * FROM modules";
if ($result = mysqli_query( $base, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id_mod'] = $row['id_mod'];
    $row_array['nom_mod'] = $row['nom_mod'];
    $row_array['description'] = $row['description'];
    $row_array['id_promo'] = $row['id_promo'];

    array_push($return_arr,$row_array);
   }
 }

mysqli_close($base);

echo json_encode($return_arr);
?>