<!DOCTYPE html>
<html>
<head>
<title>Feedback Section</title>

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="../CSS/jquery.mobile-1.4.5.css"/>

    <script type="text/javascript" src="../JS/jquery.js"></script>

    <script type="text/javascript" src="../JS/jquery.mobile-1.4.5.js"></script>

    <script type="text/javascript" src="../JS/databaseHandler.js"></script>

    <script type="text/javascript" src="../JS/AddUserHandler.js"></script>

    <script type="text/javascript" src="../JS/index.js"></script>
	
      <link rel="stylesheet" type="text/css" href="../css/style.css"/>
	  
	  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
	  
	  <style type="text/css">
	
	  	  table{
           border-collapse:collapse;
           width:100%;
           color:#d96459;
           font-family:monospace;
           font-size:18px;
           text-align:left;
           }

          th{
           background-color:#d96459;
           color:white;
           }

           tr:nth-child(even){
             background-color:#f2f2f2;
             }

	  </style>

</head>

<body>
<div data-role="page">

<div data-role="header">
<div data-role="navbar" data-iconpos="bottom" data-theme="b">
<a href="../index.php" rel="external" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-right ui-icon-edit">Logout</a>
              <ul>
                <li><a href="Admin.php" rel="external" data-icon="home">News and Events</a></li>
                <li><a href="feedbackdisplaydata.php" rel="external" data-icon="edit">Feedback</a></li>				
              </ul>
            </div>
</div>

<div data-role="main">
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Description</th>
</tr>
<?php
$conn = mysqli_connect('localhost','root','','newsevent');
if($conn-> connect_error){
die("Connection failed: ".$conn-> connect_error);
}

$sql = "SELECT * FROM feedbacktable";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
while($row = $result-> fetch_assoc()){
echo "<tr><td>".$row['fname']."&nbsp&nbsp".$row['lname']."</td><td>".$row['email']."</td><td>".$row['descr']."</td></tr>";
}
echo "</table>";
}
else{
echo "0 result";
}

$conn-> close();

?>


</table>



</div>

<div data-role="header">

</div>



</div>

</body>
</html>