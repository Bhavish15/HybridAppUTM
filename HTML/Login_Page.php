<?php include('loginfunctions.php') ?>


<!DOCTYPE html>

<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>UTM</title>

	 <link rel="stylesheet" href="../CSS/jquery.mobile-1.4.5.css"/>

    <script type="text/javascript" src="../JS/jquery.js"></script>

      <script type="text/javascript" src="../JS/jquery.mobile-1.4.5.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/style.css"/>

	  <script>
	  </script>

    </head>

  <body>

	<div data-role="page" id="Login">

      <div data-role="header">

         <h1>
          <div class="typo">
          <div class="animate-flicker">

           <h3>UTM App</h3>
              <img class="logo" src="../UTM.png">

            </div>
            </div>
			<h4>Login Page</h4>
         </h1>
        <a href="#menuPanel" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-left ui-icon-bars">Menu</a>
        <a href="Register.php" rel="external" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-right ui-icon-edit">Register</a>

          <!-- Menu -->

           <div data-role="navbar" data-iconpos="bottom" data-theme="b">
            <!-- Using unordered list to create nav bar.
               Using data-iconpos to indicate where we want the icon to be displayed -->

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

  			<a href="feedbackdisplaydata.php" rel="external" class="ui-btn ui-btn-inline ui-btn-corner-all ui-icon ui-btn-icon-left">Event</a> <br/>

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
        <div data-role="panel" id="SearchPanel" data-display="overlay" data-position="right" data-position-fixed="true" data-theme="b">
           <h2>Search:</h2>

           <form>

            <input type="text" name="searchbox" placeholder="Enter keywords" data-clear-btn="true" style="background-color: white; color: black;">

           </form>

           <a href="#" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-left ui-icon-search">Search</a>
           <a href="#" data-rel="close" class="ui-btn ui-btn-inline ui-icon ui-btn-icon-left ui-icon-delete">Close Panel</a>

           <script>
                 $( document ).on( "pagecreate", "#Login", function() {
                 $( document ).on( "swipeleft swiperight", "#Login", function( e ) {
                    // We check if there is no open panel on the page because otherwise
                    // a swipe to close the left panel would also open the right panel (and v.v.).
                    // We do this by checking the data that the framework stores on the page element (panel: open).
                    if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
                        if ( e.type === "swiperight" ) {
                            $( "#SearchPanel" ).panel( "close" );
                        } else if ( e.type === "swipeleft" ) {
                            $( "#SearchPanel" ).panel( "open" );
                        }
                    }
                });
            });
          </script>

        </div>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
      <div data-role="main" class=" ui-content ui-responsive">

        <form method="POST" action="Login_Page.php">


              <label for="name"><b>Username:</b></label>
              <input type="text" name="username"  data-clear-btn="true">

              <label for="password"><b>Password:</b></label>
              <input type="text" name="password"  data-clear-btn="true">

              <button type="submit" name="login_btn">Login</button>
			  <button type="reset" name="reset_btn">Cancel</button>
			  
			  

        </form>

        <a href="Register.php">No account yet? Sign up here</a>
        <br/><br/>


      </div>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->

    <div data-role="footer">

  			<p><center>UTM App-Copyright 2018</center></p>

  		</div>

  </div> <!-- End of Login Page -->




  </body>

</html>
