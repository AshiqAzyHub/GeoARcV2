<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'geoarcv2');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    
}
// try
// {
//  $DB=new PDO("mysql:host={$DB_SERVER};dbname={$DB_USERNAME}",$DB_USERNAME,$DB_PASSWORD);
//  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOEXCEPTION $e)
// {
//  $e->getMessage();
// }
?>