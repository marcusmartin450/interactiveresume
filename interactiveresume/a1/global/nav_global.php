<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: orange !important; border-bottom: 2px solid white; min-height: 80px;">
    <div class="container">
        <div class="navbar-header text-center" style="width: 100%;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" target="_self">
                <img src="img/favicon.ico" alt="Home" style="height: 30px; width: 30px;"/> <!-- Favicon path -->
            </a>
        </div>

        <div id="navbar" class="collapse navbar-collapse text-center">
            <ul class="nav navbar-nav" style="display: flex; justify-content: center; width: 100%; padding-top: 15px;">
                <li style="border-right: 4px solid black; padding-right: 20px;">
                    <a href="a1/index.php" style="color: orange; text-shadow: 1px 1px 4px white; font-size: 22px; font-weight: bold;">Home</a>
                </li>
                <li style="border-right: 4px solid black; padding-right: 20px;">
                    <a href="a2/index.php" style="color: orange; text-shadow: 1px 1px 4px white; font-size: 22px; font-weight: bold;">Experience</a>
                </li>
                <li>
                    <a href="a3/index.php" style="color: orange; text-shadow: 1px 1px 4px white; font-size: 22px; font-weight: bold;">Project</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<?php
date_default_timezone_set('America/New_York');
$today = date("m/d/y g:ia");
echo "<div style='text-align: center; margin-top: 20px; font-size: 18px; font-weight: bold;'>$today</div>";
?>
