<?php
$db = [];

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db["db_passw"] = "";
$db["db_name"] = "CMS_PROJECT";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSW,DB_NAME);
// if($connection){
//     echo "Connection succesfull";
// }
// else {
//     echo "connection failed";

// }
?>