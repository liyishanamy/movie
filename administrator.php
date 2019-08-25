
<!DOCTYPE html>
<html>
<title>Admin Mode</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="./smallLogo.png" style="width:100%">
    <a href="#Members" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>Members</p>
    </a>
    <a href="#TheatreInfo" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>TheatreInfo</p>
    </a>
    <a href="#NewMovie" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-eye w3-xxlarge"></i>
        <p>NewMovie</p>
    </a>
    <a href="#MovieStatus" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-eye w3-xxlarge"></i>
        <p>MovieStatus</p>
    </a>
    <a href="#MovieInfo" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>MovieInfo</p>
    </a>
    <a href="#History" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-archive w3-xxlarge"></i>
        <p>History</p>
    </a>
    <a href="#PopMovie" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-asterisk w3-xxlarge"></i>
        <p>PopMovie</p>
    </a>
    <a href="#PopTheatreC" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-diamond w3-xxlarge"></i>
        <p>PopTheatreC</p>
    </a>

    <a href=../action.php?logout=1" class="w3-bar-item w3-button w3-right w3-black w3-mobile">Login Out</a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#Members" class="w3-bar-item w3-button" style="width:25% !important">Members</a>
        <a href="#TheatreInfo" class="w3-bar-item w3-button" style="width:25% !important">TheatreInfo</a>
        <a href="#NewMovie" class="w3-bar-item w3-button" style="width:25% !important">NewMovie</a>
        <a href="#MovieStatus" class="w3-bar-item w3-button" style="width:25% !important">MovieStatus</a>
        <a href="#MovieInfo" class="w3-bar-item w3-button" style="width:25% !important">MovieInfo</a>
        <a href="#History" class="w3-bar-item w3-button" style="width:25% !important">History</a>
        <a href="#PopMovie" class="w3-bar-item w3-button" style="width:25% !important">PopMovie</a>
        <a href="#PopTheatreC" class="w3-bar-item w3-button" style="width:25% !important">PopTheatreC</a>
    </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small">Admin Mode</span></h1>
        <p>Team 33</p>
    </header>

    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="Members" >
        <h2 class="w3-text-light-grey">Members display and removal</h2>


        <ul>
            <li>In this section, we can list all of the OMTS members.</li>
            <li>We also have the authorities to remove bad account.</li>
        </ul>
        <br>
        <form action="./listMember.php" target="_blank">
            <p>

            <div class="w3-container">

                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> Show Members
                </button>


            </div>
            </p>
        </form>
        <!-- End Contact Section -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Contact Section -->


    <div class="w3-padding-64 w3-content w3-text-grey" id="TheatreInfo">
        <h2 class="w3-text-light-grey">Theatre / Complex Information Update</h2>


        <ul>
            <li>In this section, we can realize the functionalities of adding or updating the information for a theatre or <br>theatre complex.</li>
            <li>If one of our theatre complex would like to open a new theatre or upgrade a theatre, we will able to add <br>
                specific theatre info (e.g. screen size) by click "Update Theatre" button.</li>
            <li>If our Company decides to add a new theatre complex, we can add related information by click "Update <br>Theatre Complex" button.</li>
        </ul>

        <br>
        <form action="./updateTheatre.php" target="_blank">
            <p>
            <div class="w3-container">

                &nbsp&nbsp&nbsp&nbsp
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> Update Theatre Complex
                </button>

            </div>
            </p>
        </form>
        <!-- End Contact Section -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form action="./addMovie.php" target="_blank" id="NewMovie">
        <div class="w3-padding-64 w3-content w3-text-grey" id="NewMovie">
            <h2 class="w3-text-light-grey">Add new movie</h2>

            <ul>
                <li>In this section, you can add new movie here by</li>
                <li>providing the information of title, runningtime, rating</li>
                <li>plotSynopsis, startDate,endDate,and the state of movie</li>
            </ul>

            &nbsp&nbsp&nbsp&nbsp
                <br>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                <i class="fa fa-paper-plane"></i> Add new movie
            </button>

        </div>

    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="MovieStatus">
        <h2 class="w3-text-light-grey">Update Movies status</h2>

        <ul>
            <li>In this section, we can add new movies to our database or change outdated movies' status from "new" to "old".</li>
            <li>Movie information remains in the database even if the movie is no longer playing at any theatres.</li>
            <li>The outdated movies will be removed from customers' view.</li>
        </ul>
        <br>
        <form action="./updateMovie.php" target="_blank">
            <p>
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> Update Movies
                </button>
            </p>
        </form>
        <!-- End Contact Section -->


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-grey" id="MovieInfo">
            <h2 class="w3-text-light-grey">Update Showing Time and Location</h2>

            <ul>
                <li>A movie might have several showings whose running time or locations will be changed sometimes.</li>
                <li>Change showing information by click the button "Update Information".</li>
            </ul>
            <br>
            <form action="./updateMovieShowing.php" target="_blank">
                <p>
                <div class="w3-container">

                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> Update Information
                    </button>


                </div>
                </p>
            </form>
            <!-- End Contact Section -->
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-grey" id="History">
            <h2 class="w3-text-light-grey">User Rental History</h2>


            <ul>
                <li>For a particular customer, show their rental history, including current tickets held.</li>
            </ul>
            <br>

            <form action="./searchUser.php" target="_blank">
                <p>
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> Search History
                    </button>
                </p>
            </form>
            <!-- End Contact Section -->
        </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="PopMovie">
        <h2 class="w3-text-light-grey">Popular Movie</h2>


        <ul>
            <li>Find the movie that is the most popular.</li>
            <li>The most popular movie should have collected the most tickets across all theatres.</li>
            <li>The button below will trigger two kind of popular movies. One is the most popular movie <br>
                in recent 2 months and the other is most popular movie in the long run.</li>

        </ul>
        <br>

        <form action="./findPopularMovie.php" target="_blank">
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                <i class="fa fa-paper-plane"></i> Most popular Movie
            </button>
            </p>
        </form>
        <!-- End Contact Section -->
    </div>
    <!-- Contact Section -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="w3-padding-64 w3-content w3-text-grey" id="PopTheatreC">
        <h2 class="w3-text-light-grey">The Most Famous Theatre Complex</h2>


        <ul>
            <li>Find the Theatre Complex that is the most popular.</li>
            <li>It has sold the most tickets across all movies.</li>

        </ul>
        <br>

        <form action="./findPopularTheatre.php" target="_blank">
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                <i class="fa fa-paper-plane"></i> Find most popular Theatre Complex
            </button>
            </p>
        </form>
        <!-- End Contact Section -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
    <footer class="w3-padding-32 w3-black w3-center w3-margin-top">
        <p><a href="../action.php" class="w3-hover-text-green">Switch to Customer View </a></p>
    </footer>
    <!-- END PAGE CONTENT -->
</div>

</body>
</html>

