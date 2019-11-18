<!DOCTYPE html>
<html>
<head>
<title>News and Events</title>

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="../CSS/jquery.mobile-1.4.5.css"/>

    <script type="text/javascript" src="../JS/jquery.js"></script>

    <script type="text/javascript" src="../JS/jquery.mobile-1.4.5.js"></script>

    <script type="text/javascript" src="../JS/databaseHandler.js"></script>

    <script type="text/javascript" src="../JS/AddUserHandler.js"></script>

    <script type="text/javascript" src="../JS/index.js"></script>
	
      <link rel="stylesheet" type="text/css" href="../css/style.css"/>

</head>

<body>
<div data-role="page">

<div data-role="header">


<div data-role="navbar" data-iconpos="bottom" data-theme="b">
              <ul>

                <li><a href="../index.php" rel="external" data-icon="home">Home</a></li>
                <li><a href="Login_Page.php" rel="external" data-icon="edit">Login</a></li>
				<li><a href="#" data-icon="search">Search</a></li>

              </ul>

            </div>

</div>

<div data-role="main">

<div>
<?php
$conn = mysqli_connect("localhost", "root", "", "newsevent");
$sql = "SELECT * FROM eventsection ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
echo "<div id='img_div'>";
echo "<img src='images/".$row['image']."'>";
echo"<h3>".$row['text']."</h3>";
echo "<p>".$row['textbody']."</p>";
echo "<p>".$row['timepost']."</p>";
echo "</div>";

}
?>
</div>

</div>

<div data-role="footer">

</div>



</div>



</body>
</html>