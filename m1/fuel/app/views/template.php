<head>
    <?php echo Asset::css('index.css'); ?>

    <title><?php echo $title; ?> </title>
    <meta charset="utf-16">
    <meta name="author" content="CS312 milestone1">
    <meta name="description" content="Color Coordinate">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
</head>
<header>
    <div id='smallLogo'>
        <?php echo Asset::img('SmallLogo.png', array('style' => 'width: 150', 'alt' => 'smallLogo'));?>
        <h1 id='websiteTitle'>Cat Midwife Finder</h1>
    </div>
    <nav>
        <ul id="top_menu">
            <li><a class=<?php echo $homeStyle;?> href="./index">Homepage</a></li>
            <li><a class=<?php echo $aboutStyle;?> href=<?=Uri::create('index.php/milestone/about')?>>About</a></li>
            <li><a class=<?php echo $colorStyle;?>
                    href=<?=Uri::create('index.php/milestone/color' . ( $content->rows && $content->colors ? ('?n_rows_cols=' .$content->rows . '&n_colors=' . $content->colors) : '') )?>>Color
                    Coordinate Page
                </a></li>
        </ul>
    </nav>
</header>


<body>
    <h2 id='pageTitle'> <?php echo $title; ?></h2>

    <div id='contentContainer'>
        <?php echo $content;?>
    </div>

</body>
<footer>
    CS312 Spring 2022
</footer>