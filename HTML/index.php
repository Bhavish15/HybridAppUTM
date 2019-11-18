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
$fname=null;
$lname=null;
$uname=null;
$rbgender=null;
$password=null;


/*extract the values submitted by the web client (HTML page) using $_GET for get method or $_POST in case post method
format is as follows: localhost:<portname>/foldername/index.php?operation=<value>&title=<value>&author=<value>
check if the parameter has been submitted in the query, then extract the corresponding values.
The empty checks can be delayed until the variable is required, but has been done for simplicity here.
*/
if(!empty($_GET['operation'])){
	$operation=$_GET['operation'];
}

if(!empty($_GET['fname'])){
	$fname=$_GET['fname'];
}

if(!empty($_GET['lname'])){
	$lname=$_GET['lname'];
}

if(!empty($_GET['uname'])){
	$uname=$_GET['uname'];
}
if(!empty($_GET['rbgender'])){
	$rbgender=$_GET['rbgender'];
}

if(!empty($_GET['password'])){
	$password=$_GET['password'];
}

//check value of submitted parameter
if($operation == 2){
	if($fname !=null && $lname!=null && $uname!=null && $rbgender!=null && $password!=null){
		insertRecord($fname, $lname, $uname, $rbgender, $password);
	}
}else{
	echo ("operation not defined. Specify value 1 or 2");
}


function insertRecord($fname_, $lname_, $uname_, $rbgender_, $password_){
	//the connection string object
	$conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: '.mysqli_connect_error() );

	//define insert query
	$query = "INSERT INTO eventtable (fname, lname, uname, gender, password)VALUES ('".$fname_."', '".$lname_."', '".$uname_."', '".$rbgender_."', '".$password_."')";

	//execute query on connection object (conn) and echo result
	if (mysqli_query($conn, $query)) {
		echo "New record created successfully";
	 } else {
		echo "Error: " . $query . "" . mysqli_error($conn);
	 }
	 $conn->close();
}

?>
