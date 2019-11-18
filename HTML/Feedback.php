<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>UTM</title>

		<link rel="stylesheet" href="../CSS/jquery.mobile-1.4.5.css"/>

		<script type="text/javascript" src="../JS/jquery.js"></script>
      
		<script type="text/javascript" src="../JS/jquery.mobile-1.4.5.js"></script>

	
		<script type="text/javascript" src="../JS/index.js"></script> 
      <link rel="stylesheet" type="text/css" href="../css/style.css"/> 
	  
  <script type="text/javascript">

function insertfeedback(){


      var fname_c = $("[name='fname']").val();
      var lname_c = $("[name='lname']").val();
      var descr_c = $("[name='descr']").val();
      var email_c = $("[name='email']").val();

      var url = "http://localhost/news/feedbackDB.php?operation=2&fname="+fname_c+"&lname="+lname_c+"&descr="+descr_c+"&email="+email_c;

      $.get(url, function(data,status){
      alert("Reply is: "+ status + " data: "+data);

      });

alert("inserted");
    }
</script>   
		
    </head>

    <body>
	
		<div data-role="page" id="Home">

      <div data-role="header">
        
         <h1>
          <div class="typo">
          <div class="animate-flicker">
              
           <h3>UTM App</h3>   
              <img class="logo" src="../UTM.png">
          
            </div>
            </div>
			 <h4>Feedback</h4>
         </h1>
        <a href="#menuPanel" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-left ui-icon-bars">Menu</a>
        <a href="Register.php" rel="external" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-right ui-icon-edit">Register</a>

          <!-- Menu -->

           <div data-role="navbar" data-iconpos="bottom" data-theme="b"> 
            

              <ul>

                <li><a href="../index.php" rel="external" data-icon="home">Home</a></li> 
                <li><a href="Login_Page.php" rel="external" data-icon="edit">Login</a></li>
				<li><a href="#" data-icon="search">Search</a></li> 

              </ul>
            
            </div>

      </div>

    <!-- Panel structure -->

  		<div data-role="panel" id="menuPanel" data-display="overlay" >
  			
  			<h2>Menu</h2>

  			<a href="feedbackdisplatdata.php" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-btn-icon-left">Event</a> <br/>

            <a href="#" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-btn-icon-left">School</a><br/>

            <a href="#" rel="external"  class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-icon-info ui-btn-icon-left">About Us</a> <br/>

            <a href="#" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-icon-location ui-btn-icon-left">Map</a><br/>

            <a href="#Home" data-rel="close" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-icon-delete ui-btn-icon-left">Close Menu</a>




          <script>
             $( document ).on( "pagecreate", "#Home", function() {
             $( document ).on( "swipeleft swiperight", "#Home", function( e ) {
                // We check if there is no open panel on the page because otherwise
                // a swipe to close the left panel would also open the right panel (and v.v.).
                // We do this by checking the data that the framework stores on the page element (panel: open).
                if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
                    if ( e.type === "swiperight" ) {
                        $( "#menuPanel" ).panel( "open" );
                    } else if ( e.type === "swipeleft" ) {
                        $( "#menuPanel" ).panel( "close" );
                    }
                }
            });
        });
      </script>

  		</div>

     <!-- Search Panel structure --> 
		

  	
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
  	  <div data-role="main" class=" ui-content ui-responsive">
        
        <form>

              <label for="fname"><b>First Name:</b></label>
              <input type="text" name="fname">

              <label for="lname"><b>Last Name:</b></label>
              <input type="text" name="lname">
					
			  <label for="descr"><b>Description:</b></label>
              <textarea rows="4" cols="50" name="descr"></textarea>
			  
			  <label for="email"><b>Email:</b></label>
              <input type="text" name="email">
              
      
        </form>    
		
        <a href="#" class="ui-btn ui-btn-inline ui-btn-b ui-btn-corner-all ui" data-type="submit" onclick="insertfeedback()">Submit</a>
        <a href="#" class="ui-btn ui-btn-inline ui-btn-b ui-btn-corner-all ui" data-type="reset">Reset</a>

      </div>
    	
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
  		<div data-role="footer">
  			
  			<p><center>UTM App-Copyright 2019</center></p>

  		</div>

  	</div> <!-- End of homepage-->

      
    </body>
</html>
