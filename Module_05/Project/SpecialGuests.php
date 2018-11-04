<!DOCTYPE html>
<html>
  <head>
    <base href="fundwebappdevsvm.centralus.cloudapp.azure.com">
  </head>
  
  <body>
    <div class="header">
      <div class="logo">
        <a href="/mod4_project/HomePage.html"><img src="https://www.freepnglogos.com/uploads/twitch-logo-png-6.png" alt="twitch logo png" width="100px"/></a>
      </div>
      <div class="WebsiteName">
        <a href="/mod4_project/HomePage.html"><h1>Twitchcon</h1></a>
      </div>
    </div>
    <nav class="navbar">
      <center>
        <div class="navbar-container">
          <table id="navbar" class="navbar-nav" cellspacing="60px">
            <tr style="height:1px;">
              <td><a href="/mod4_project/HomePage.html" class="nav-link">Home</a></td>
              <td class="active"><a href="/mod4_project/EventInfo.html" class="nav-link">Event Information</a></td>
              <td><a href="/mod4_project/AboutUs.html" class="nav-link">About Us</a></td>
              <td><a href="/mod4_project/ContactUs.html" class="nav-link">Contact Us</a></td>
              <td>
                <div class="wrap">
                  <div class="search">
      	  					<input type="text" class="searchTerm" placeholder="Search">
        						<button type="submit" class="searchButton">
                      <img src="https://www.oswego.edu/oswego-search/img/search.png" class="searchicon" style="height:20px; width: 20px;">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </center>
    </nav>
    <div class="GuestTable" style="font-size: 125%;">
      <center>
        <div class="GuestTable-container">
          <?php
            $servername="localhost:3306";

            $username = "MPierce";
            $password = "Fundwebappdevs1342";
            $dbname = "demo";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if($conn->connect_error) {
            	echo "Error:Unexpected connection error. Please retry.";
            	echo mysqli_connect_error();
            } else {
                /*if(empty($_POST['chbx'])) {*/
                  $result = $conn->query("SELECT * FROM twitchguests");
	
                  if(($result != 0) && ($result->num_rows > 0)) {
                    $row = $result->fetch_assoc();
  
                    $Username = $row['Username'];
                    $Site = $row['Site'];
                    $MeetGreet = $row['MeetGreet'];
                    $Sessions = $row['Sessions'];
                    $ArtistAlley = $row['ArtistAlley'];
                    $id = $row['id'];
                    while($row = mysqli_fetch_assoc($result)){
                      echo '<a href="http://';
                      echo $row['Site'];
                      echo '">';
                      echo $row['Username'];
                      echo '</a>';
                      echo '<br/>';
                      echo '<br/>';
                    }
                  }
                  $conn->close();
                }
          ?>
        </div>
    </center>
    <div id="socialpanel">
      <div class="social-container">
        <center>
          <table id="socialbreak" width=100% style="position:relative; bottom: -200px; border-top: 3px solid white;">
            <tr>
              <td style="padding-left:45%;">
            <a id="Twitch" href="https://www.twitch.tv" style="text-decoration: none; font-size: 16px;">
              <img id="Twitch" src="https://www.freepnglogos.com/uploads/twitch-logo-png-6.png" alt="Twitch" width="30px"> Twitch&nbsp;&nbsp;
            </a>
              <a id="Twitter" href="https://twitter.com/twitch" style="text-decoration: none; font-size: 16px;">
              <img id="Twitter" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/738px-Twitter_bird_logo_2012.svg.png" alt="Twitter" width="30px"> Twitter&nbsp;&nbsp;
            </a>
              <a id="Facebook" href="https://www.facebook.com/Twitch" style="text-decoration: none; font-size: 16px;">
              <img id="Facebook" src="http://icons.iconarchive.com/icons/limav/flat-gradient-social/512/Facebook-icon.png" alt="Facebook" width="30px">  Facebook
            </a></td>
            </tr>
          </table>
        </center>
      </div>
    </div>
    <div class="footer">
      <p>
        Special Guests
      </p>
    </div>
  </body>
  <style>
  * {
    color: white;
    } /* Changes all text color to white */
  .header {
    top: 30px;
    z-index: 2;
    margin-left: 3%;
    } /* Changes DIV 'header' margin on the left by 3% */
  .logo {
    float: left;
    clear: left;
    } /* Changes DIV 'logo' to float left and clear everything to its left */
  .WebsiteName {
    -webkit-text-stroke-width: .5px;
    -webkit-text-stroke-color: #000;
    clear: right;
    font-size: 250%;
    font-family: Georgia, serif;
    } /* Changes DIV 'WebsiteName' text width to .5px, color to #000, clears everything to its right, font size to 40px and font to Georgia Serif */
  .navbar {
    position: -webkit-sticky;
    position: sticky;
    top: 0px;
    clear:both;
    font-size: 150%;
    width:100%;
    margin-left:0%;
    margin-right:0%;
    z-index: 1;
    }
  a.nav-link {
    text-decoration: none;
    align: center;
    }
  body, nav{
    background: #270f54;
    background: -moz-linear-gradient(left, #270f54 0%, #270f54 5%, #6441a5 30%, #6441a5 70%, #270f54 95%, #270f54 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, #270f54), color-stop(5%, #270f54), color-stop(30%, #6441a5), color-stop(70%, #6441a5), color-stop(95%, #270f54), color-stop(100%, #270f54));
    background: -webkit-linear-gradient(left, #270f54 0%, #270f54 5%, #6441a5 30%, #6441a5 70%, #270f54 95%, #270f54 100%);
    background: -o-linear-gradient(left, #270f54 0%, #270f54 5%, #6441a5 30%, #6441a5 70%, #270f54 95%, #270f54 100%);
    background: -ms-linear-gradient(left, #270f54 0%, #270f54 5%, #6441a5 30%, #6441a5 70%, #270f54 95%, #270f54 100%);
    background: linear-gradient(to right, #270f54 0%, #270f54 5%, #6441a5 30%, #6441a5 70%, #270f54 95%, #270f54 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#270f54', endColorstr='#270f54', GradientType=1 );
    }
  p {
    font-size: 112.5%;
    margin-left: 15%;
    margin-right: 15%;
    }
  .footer {
    position:fixed;
    bottom:30px;
    right: 30px;
    }
  input[type=text] {
  	color: black;
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  }
  .search {
    width: 100%;
    position: relative
    } /* Search Bar */
  .searchTerm {
    float: left;
    width: 100%;
    border: 3px solid #252525;
    padding: 5px;
    height: 20px;
    border-radius: 3px;
    outline: none;
    color: #9DBFAF;
    }
  .searchTerm:focus{
    color: #000;
    }
  .searchButton {
    position: absolute;
    right: -30px;
    width: 40px;
    height: 36px;
    border: 1px solid #252525;
    background: #252525;
    text-align: center;
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    font-size: 125%;
    }
  .wrap{
    position: relative;
    }
  </style>
</html>