<?php
$msg = "";

if(isset($_POST['upload'])){

$target = "images/".basename($_FILES['image']['name']);

$conn = mysqli_connect("localhost", "root", "", "newsevent");

$image = $_FILES['image']['name'];
$text = $_POST['text'];
$textbody = $_POST['textbody'];

$sql = "INSERT INTO eventsection(text, textbody, image) VALUES('$text', '$textbody', '$image')";

mysqli_query($conn, $sql);

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
$msg = "Image upload successfully.";
}
else{
$msg = "There was a problem in uploading the image.";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Retrieving data</title>
<link rel="stylesheet" type="text/css" href="style.css">
  
  <script type="text/javascript">
   function news(){
   window.location("location:retrievaldata.php");
   }
   
   function feedback(){
   window.location("location:Feedback.php");
   }
   </script>
</head>

<body>

<div data-role="navbar" data-iconpos="bottom" data-theme="b"> 
<a href="../index.php" rel="external" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-right ui-icon-edit">Logout</a>
              <ul>

                <li><a href="retrievaldata.php" onClick="news()" data-icon="home">News and Events</a></li> 
                <li><a href="feedbackdisplaydata.php" onClick="feedback()" rel="external" data-icon="edit">Feedback</a></li>				
              </ul>
            
            </div>



<div id="content">
<form method ="POST" action="retrievaldata.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">

<div>

<input type="file" name="image" data-ajax="false">
</div>

<div>
<label for="text">Enter Title:</label>
<input type="text" name="text">
</div>

<div>
<label for="textbody">Enter Events Description::</label><br>
<textarea name="textbody" cols="40" rows="4" placeholder="Say something..."></textarea>
</div>

<div>
<input type="submit" name="upload" value="Save">
</div>
<?php
$conn = mysqli_connect("localhost", "root", "", "newsevent");
$sql = "SELECT * FROM eventsection";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
echo "<div id='img_div'>";
echo "<img src='images/".$row['image']."'>";
echo"<h3>".$row['text']."</h3>";
echo "<p>".$row['textbody']."</p>";
echo "</div>";
}
?>

</form>

</div> 
<body>
<html>