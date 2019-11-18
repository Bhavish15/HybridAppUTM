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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" href="../CSS/jquery.mobile-1.4.5.css"/>

  <script type="text/javascript" src="../JS/jquery.js"></script>

  <script type="text/javascript" src="../JS/jquery.mobile-1.4.5.js"></script>

  <script type="text/javascript" src="../JS/databaseHandler.js"></script>

  <script type="text/javascript" src="../JS/AddUserHandler.js"></script>

  <script type="text/javascript" src="../JS/index.js"></script>
   <link rel="stylesheet" type="text/css" href="../css/style.css"/>

   <script type="text/javascript">
   function news(){
   window.location("location:retrievaldata.php");
   }
   
   function feedback(){
   window.location("location:Feedback.php");
   }
   
   function insertnews(){

         var newstitle_c = $("[name='newstitle']").val();
         var newsbody_c = $("[name='newsbody']").val();

         var url = "http://localhost/news/newsindex.php?operation=2&newstitle="+newstitle_c+"&newsbody="+newsbody_c;

         $.get(url, function(data,status){
         alert("Reply is: "+ status + " data: "+data);

         });

   alert("inserted");
       }

   </script>


</head>
<body>
<!-- header section -->
  <div data-role="page" id="homeAdminn">

    
	
<div data-role="header">



<div data-role="navbar" data-iconpos="bottom" data-theme="b">
        <a href="../index.php" rel="external" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-right ui-icon-edit">Logout</a>

              <ul>
                <li><a href="Admin.php" rel="external" data-icon="home">News and Events</a></li>
                <li><a href="feedbackdisplaydata.php" rel="external" data-icon="edit">Feedback</a></li>				
              </ul>
            </div>
</div>
    

<!-- Main content section -->
    <div data-role="main" class=" ui-content ui-responsive" id="Home">
      
	  <div id="content">
<form method ="POST" action="retrievaldata.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">

<div>
<input type="file" name="image">
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

</form>



</div> 

	  
	  
	  
	  
	  
	  
	  
    </div>

<!-- footer section -->
    <!-- <div data-role="footer">

    </div> -->


  </div>

</body>
</html>
