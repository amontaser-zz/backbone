<?php

/** backbone test project
    1 - front end will be as in https://coding-exercises.udemy.com/ruby.html done 18/8/2017
    2 - the site will include register system - blog - search - cp -
    3 - convert it to mvc
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Backbone</title>

    <link rel="stylesheet" href="css/style.css?v=<?=time();?>">
</head>
<body>
    <div class="wrapper">
        <div class="main-sidebar">
            <div id="main-search-input" role="search">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Type to search"></input>
            </div>
            <nav role="navigation">
                <ul class="summary">
                <li><a class="active" href="#">Hello</a></li>
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">three</a></li>
                <li><a href="#">Four</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-body">
            <div class="body-inner">
                <div class="page-header role="navigation">
                    <a href="#" class="btn pull-left"><i class="fa fa-align-justify"></i></a>
                    <h1>Backbone</h1>
                </div>
                <div class="page-body">
                    <h1>This is Headar</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum similique ex alias tempore voluptate iusto voluptas iste mollitia quo ipsum, incidunt facilis modi blanditiis nihil praesentium placeat quis eveniet laborum?  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus veritatis in tempore asperiores quaerat et reiciendis libero rem iste culpa molestiae debitis molestias omnis temporibus expedita maxime, dolores! Quos, deleniti!</p>
                </div>
            <footer>
                <span>&copy; All rights reserved <?php echo date('Y')?></span>
            </footer>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
