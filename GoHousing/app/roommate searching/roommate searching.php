

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Housin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="roommate%20searching.css">


</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="../../index.html">GoHousin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="../information%20review/information%20review.html" class="nav-link">Information Reivew</a></li>
                <li class="nav-item"><a href="../information%20sharing/index.php" class="nav-link">Information Sharing</a></li>
                <li class="nav-item"><a href="../roommate%20searching/roommate%20searching.php" class="nav-link">Roommate Searching</a></li>
                <li class="nav-item"><a href="../aboutus/about.html" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="../contact/contact.php" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->




<div class="block-30 block-30-sm item"  data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <h2 class="heading">Roommate Searching</h2>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<?php

session_start();
if(!$_SESSION['loggedin']) {
    print( "<center><a class=\"navbar-brand\" href=\"http://gohousin.com/profile.php\">Sign In To Search For Roommate</a></center>");
}else {
?>
    <div class = "gapbetween2">
        <h4>Click here to fill out the survey</h4>
        <p class="card-text">Your survey result will be shown to those who match with you.</p>
        <a href="survey.html" class="btn btn-info">Survey</a>
    </div>
    <br>
    <br>
<?php
}

?>

 <div class="container mt-40 mb-30">
            <h3 class="text-center">Hover Effect Style : Demo - 21</h3>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">willimson</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-2.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">Kristiana</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">Kristiana</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>

</body>

</html>

