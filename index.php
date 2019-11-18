<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>UTM</title>
		
<script type="text/javascript">
function registerpage(){
window.location="HTML/Register.php";
}
</script>

		<script type="text/javascript" src="cordova.js"></script>
		<script type="text/javascript" src="JS/jquery.js"></script>
		<script type="text/javascript" src="JS/jquery.mobile-1.4.5.js"></script>
		<script type="text/javascript" src="JS/databaseHandler.js"></script>
		<script type="text/javascript" src="JS/index.js"></script>
		
		<link rel="stylesheet" href="CSS/jquery.mobile-1.4.5.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/> 
		
    </head>

    <body>
	
	
		<div data-role="page" id="Home">

      <div data-role="header">
        
         <h1>
          <div class="typo">
          <div class="animate-flicker">
              
           <h3>UTM App</h3>   
              <img class="logo" src="UTM.png">
          
            </div>
            </div>
			 
         </h1>
        <a href="#menuPanel" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-left ui-icon-bars">Menu</a>
        <a href="HTML/Register.php" rel="external" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-right ui-icon-edit">Register</a>

          <!-- Menu -->

           <div data-role="navbar" data-iconpos="bottom" data-theme="b"> 
            <!-- Using unordered list to create nav bar.
               Using data-iconpos to indicate where we want the icon to be displayed -->

              <ul>

                <li><a href="#Home" data-icon="home">Home</a></li> 
                <li><a href="HTML/Login_Page.php" rel="external" data-icon="edit">Login</a></li>
				<li><a data-icon="search">Search</a></li> 

              </ul>
            
            </div>

      </div>

    <!-- Panel structure -->

  		<div data-role="panel" id="menuPanel" data-display="overlay" >
  			
  			<h2>Menu</h2>

  			<a href="HTML/displaydata.php" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-btn-icon-left">Event</a> <br/>

            <a href="#" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-btn-icon-left">School</a><br/>

            <a href="#" rel="external"  class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-icon-info ui-btn-icon-left">About Us</a> <br/>

            <a href="HTML/location.php" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-icon-location ui-btn-icon-left">Map</a><br/>

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
  		<div data-role="main" class=" ui-content ui-responsive" data-theme="b">
        
        <h2>University of Technology, Mauritius</h2>
        <p>The University of Technology, Mauritius (UTM) is a public research university in Mauritius.</p>
        <p>The main campus lies in La Tour Koenig, Pointe-aux-Sables, within the district of Moka.</p>
        <p>It was founded following the government of Mauritius approval of the setting up of the University of Technology,</p>
        <p>Mauritius in January 2000 and the proclamation of The University of Technology,</p>
        <p>Mauritius Act on 21 June 2000.</p>

  		</div>
    	
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
  		<div data-role="footer">
  			
  			<p><center>UTM App-Copyright 2018</center></p>

  		</div>

  	</div> <!-- End of homepage-->

      
    </body>
</html>
