<?php

//creating constants which are parametric access to the database
/*MINE COMMENTS
All constants must be Uppercase.
*/
DEFINE ('DB_USER', 'root');//name of the user on the database
DEFINE ('DB_PASSWORD', '');//specify the password of the database
DEFINE ('DB_HOST', 'localhost');///localhost
DEFINE ('DB_NAME', 'newsevent');//this is the name of the database.

/*our approach is based on the following:
operation takes values 1,2,...
1 - query book details based on title
2 - insert a new book
...
*/

//define variables for the submitted parameters
//When declaring a variable, the variable always start with $ sign.
$operation=null;
$newstitle=null;
$newsbody=null;

/*extract the values submitted by the web client (HTML page) using $_GET for get method or $_POST in case post method
format is as follows: localhost:<portname>/foldername/index.php?operation=<value>&title=<value>&author=<value>
check if the parameter has been submitted in the query, then extract the corresponding values.
The empty checks can be delayed until the variable is required, but has been done for simplicity here.
*/
if(!empty($_GET['operation'])){
	$operation=$_GET['operation'];
}

if(!empty($_GET['newstitle'])){
		$newstitle=$_GET['newstitle'];
}

if(!empty($_GET['newsbody'])){
	$newsbody=$_GET['newsbody'];
}

//check value of submitted parameter
if($operation == 2){
	if($newstitle !=null && $newsbody!=null ){
		insertRecord($newstitle, $newsbody);
	}
}else{
	echo ("operation not defined. Specify value 1 or 2");
}


function insertRecord($newstitle_, $newsbody_){
	//the connection string object
	$conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: '.mysqli_connect_error() );

	//define insert query
	$query = "INSERT INTO newstable (newstitle, newsbody) VALUES ('".$newstitle_."', '".$newsbody_."')";

	//execute query on connection object (conn) and echo result
	if (mysqli_query($conn, $query)) {
		echo "New record created successfully";
	 } else {
		echo "Error: " . $query . "" . mysqli_error($conn);
	 }
	 $conn->close();
}

?>
