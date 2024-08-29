<?php
/****************************************************************** 
WARNING
WARNING
WARNING
WARNING
WARNING
WARNING

THIS FILE MUST NOT HAVE ANY WHITE SPACE BEFORE OR AFTER the < php >
data_xy.php RETURNS A CSV FILE AND INCLUDES THIS FILE AT THE TOP
ANY WHITE SPACE WILL CAUSE D3 TO NOT READ THE TOP ROW CORRECTLY

*******************************************************************/



/*
$servername = "localhost";
$username = "cml_user";
$password = "cmlpass";
$dbname = "cml_lite";
*/


//error_reporting(-1);
//ini_set('display_errors', 'On');

//$servername = "localhost";
$servername = "_mysql.cmlviz.com";
$username = "web_reader";
$password = "ffHEYqqPPt64993TTGnbcv";
$dbname = "cml_lite";

/*
$servername = "54.83.78.144";
$username = "devbd";
$password = "devbd!@#";
$dbname = "CMLTableau2TS-3";


$servername = "corpdbinstance.cbejl3ehaqua.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "Rec0ndite!";
$dbname = "cml_lite";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/****************************************************************** 
WARNING
WARNING
WARNING
WARNING
WARNING
WARNING

THIS FILE MUST NOT HAVE ANY WHITE SPACE BEFORE OR AFTER the < php >
data_xy.php RETURNS A CSV FILE AND INCLUDES THIS FILE AT THE TOP
ANY WHITE SPACE WILL CAUSE D3 TO NOT READ THE TOP ROW CORRECTLY

*******************************************************************/
?>