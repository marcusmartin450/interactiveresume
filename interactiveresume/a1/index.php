<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Marcus Martin">
    <link rel="icon" href="favicon.ico">

    <title>My Online Portfolio</title>

    <?php include_once("../css/include_css.php"); ?>

    <!-- Carousel and Additional Styling -->
    <style type="text/css">
        h2 {
            margin: 0;
            color: #666;
            padding-top: 50px;
            font-size: 52px;
            font-family: "Trebuchet MS", sans-serif;
        }
        .item {
            background: #333;
            text-align: center;
            height: 300px !important;
        }
        .carousel {
            margin: 20px 0px 20px 0px;
        }
        .bs-example {
            margin: 20px;
        }
        /* Navbar Styling */
        .navbar {
            background-color: orange !important;
            border-bottom: 2px solid white;
            min-height: 60px; /* Adjust navbar height */
        }
        .navbar-nav li a {
            font-size: 18px; /* Increase navbar text size */
            color: orange !important;
            text-shadow: 1px 1px 4px white;
        }
        .navbar-nav li {
            border-right: 4px solid black; /* Add dividers */
            padding-right: 20px;
        }
        .navbar-nav li:last-child {
            border-right: none; /* Remove border from last item */
        }
    </style>
</head>

<body>

    <?php include_once("../global/nav_global.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?>
            </div>

            <p class="text-justify">
                <strong>Description:</strong> I am a passionate sports enthusiast with an analytical mind and love for understanding probabilities. Through leveraging data analytics, Python and web development programming, and data visualization, I have been able to combine my passions for sports and programming in a culmination of insightful analyses of professional football and basketball that can be used to leverage team success or find the best value in sports betting. Explore my portfolio to see how I have been able to leverage my skills and combine my personal interests into actionable work.
            </p>

            <!-- Start Bootstrap Carousel  -->
            <div class="bs-example">
                <div id="myCarousel" class="carousel" data-interval="3000" data-pause="hover" data-wrap="true" data-keyboard="true" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item" style="background: url(img/orangecode.jpg) no-repeat center; background-size: cover;">
                            <a href="https://www.linkedin.com/in/marcus-martin-303a8a23b/" target="_blank" style="font-size: 20px; color: white; text-decoration: none;">Click me </a>
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3>Welcome to my Portfolio</h3>
                                    <p class="lead">View my LinkedIN</p>
                                </div>
                            </div>
                        </div>

                        <div class="item" style="background: url(img/bitbucket.jpg) no-repeat center; background-size: cover;">
                            <a href="https://bitbucket.org/marcus_martin/workspace/overview/" target="_blank" style="font-size: 20px; color: white; text-decoration: none;">Click me </a>
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3>Bitbucket Repo</h3>
                                    <p>View my BitBucket Repo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item" style="background: url(img/orangefile.jpeg) no-repeat center; background-size: cover;">
                            <h2 style="color: white; text-shadow: 2px 2px 4px orange;">Learn Web Development</h2>
                            <div class="carousel-caption">
                                <h3>Free Resources for Web Development</h3>
                                <p>Click the picture to view free resources</p>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- End Bootstrap Carousel  -->

            <?php include_once "global/footer.php"; ?>

        </div> <!-- end starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript -->
    <?php include_once("../js/include_js.php"); ?>

</body>
</html>
