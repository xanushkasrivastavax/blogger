<?php 
$db['db_host'] = "localhost"; //An array to store information
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "dms";

foreach($db as $key => $value){
  define(strtoupper($key), $value); //Function to make constant and we use strtoupper to uppercase key to make constant
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// if($connection)
// {
//   echo "We are connected";
// }


?>