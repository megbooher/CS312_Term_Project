<head>
    <?php echo Asset::css('index.css'); ?>

    <title><?php echo $title; ?> </title>
    <meta charset="utf-16">
    <meta name="author" content="CS312 milestone1">
    <meta name="description" content="Color Coordinate">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
</head>
<header>
    <div id='CSU_logo'>
        <?php echo Asset::img('csu_logo.png', array('style' => 'width: 450', 'alt' => 'csu logo'));?>
    </div>
    <div id="title">
        <h2> <?php echo $title; ?></h2>
    </div>
</header>

<nav>
    <ul id="top_menu">
        <li><a href="./index">Homepage</a></li>
        <li><a href="./about">About</a></li>
        <li><a
                href=<?=Uri::create('index.php/milestone/color' . (isSet($content->requestType) && $content->requestType === 'GET' && $content->rows && $content->colors ? ('?n_rows_cols=' .$content->rows . '&n_colors=' . $content->colors) : '') )?>>Color
                Coordinate Page
            </a></li>
    </ul>
    <hr>
</nav>



<body>
    <?php echo $content;?>
</body>

<footer>
    CS312 Spring 2022
</footer>