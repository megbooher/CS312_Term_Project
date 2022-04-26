<head>
    <?php echo Asset::css('index.css'); ?>

    <title><?php echo $title; ?> </title>
    <meta charset="utf-16">
    <meta name="author" content="CS312 milestone1">
    <meta name="description" content="Color Coordinate">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
</head>
<header>
    <h1 id='websiteTitle'>Website Title</h1>
    <div></div>
    <h2 id='pageTitle'> <?php echo $title; ?></h2>
</header>

<nav>
    <ul id="top_menu">
        <li><a href="./index">Homepage</a></li>
        <li><a href=<?=Uri::create('index.php/milestone/about')?>>About</a></li>
        <li><a
                href=<?=Uri::create('index.php/milestone/color' . (isSet($content->requestType) && $content->requestType === 'GET' && $content->rows && $content->colors ? ('?n_rows_cols=' .$content->rows . '&n_colors=' . $content->colors) : '') )?>>Color
                Coordinate Page
            </a></li>
    </ul>
</nav>



<body>
    <?php echo $content;?>
</body>

<footer>
    CS312 Spring 2022
</footer>