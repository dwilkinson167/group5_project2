<!doctype html>
<?php include 'bobsBurgersItems.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <!--Remy Sharp Shim -->
    <!--[if lte IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
    </script>
    <![endif]-->

    <link href="css/reset.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
    <link href="css/styles.css" type="text/css" rel="stylesheet">


</head>

<body>
<div id="wrapper">
    <header>
        <img src="images/logo.JPG" alt="Logo" />
    </header>
    <nav>
        <ul>
            <li>
                Menu
            </li>
            <li>
                <a href="#">
                    About
                </a>
            </li>
            <li>
                <a href="#">
                    Contact
                </a>
            </li>
            <li>
                <a href="#">
                    Hours
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <h2>
            Menu!
        </h2>
        <?php
        global $config;
        foreach($config->items as $item) {
            // leave the four periods they're meant to be a spacer between the burger name and price
            echo '<div id="MenuItem">

                <h4>' . $item->Name . ' .... Price: $' . $item->Price . '</h4>
                <p>' . $item->Description . '</p>' ; }  ?>
        <!-- There is no PHP for the extra on the next line under this one. It's a heading for the site-->
        <p id="extra"><strong>Extras</strong></p>
        <!-- ++ PHP will need to go here for the extra's ++ -->
        <ul>
            <li>
                Onion <input id="Checkbox1" type="checkbox" />
            </li>
            <li>
                Tomato <input id="Checkbox1" type="checkbox" />
            </li>
            <li>
                Pickles <input id="Checkbox1" type="checkbox" />
            </li>
            <li>
                Jalapenos <input id="Checkbox1" type="checkbox" />
            </li>
            <li>
                Katsup <input id="Checkbox1" type="checkbox" />
            </li>
        </ul>
</div>
</main>
</div>
</body>
</html>