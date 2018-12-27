<?php

if((isset($_GET['name']))&&($_GET['name']!= "")){
echo "hello <strong>".$_GET['name']."</strong>" ;
}else{
echo "<span style='color:red'>Pleas enter Name</span>" ;
}
?>