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
        <li><?php echo "<a href= 'https://www.cs.colostate.edu:4444/~meganboo/CS312_Term_Project/m1/index.php/milestone/color?n_rows_cols=$rows&n_colors=$colors'>Color Coordinate Page</a>" ?></li>
        <li><a href="https://www.colostate.edu/">CSU Home</a></li>
        <li><a href="https://www.cs.colostate.edu/">CS Dept</a></li>
        <li><a href="https://www.online.colostate.edu/">CSU Online</a></li>
    </ul>
    <hr>
</nav>



<body>
    <div id='logo'>
        <?php echo Asset::img('companylogo.png', array('style' => 'width: 500px', 'alt' => 'company logos'));?>
    </div>
    <p>We believe that expecting mothers deserve as much support as possible regardless of species. At catmidwifefinder.com we are committed to match you to the ideal midwife for your feline companion in under 24 hours.</p>
</body>

<footer>
CS312 Spring 2022
</footer>
