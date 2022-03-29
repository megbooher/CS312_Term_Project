<<<<<<< HEAD
<head>

    <meta charset="utf-16">
    <meta name="author" content="CS312 milestone1">
    <meta name="description" content="Color Coordinate">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
    
    <title><?php echo $title; ?></title>


</head>
<body>
    <header>
        <h1>COLOR COORDINATE PAGE</h1>
    </header>
</body>
=======
<head>
    <title><?php echo $title; ?> </title>
    <meta charset="utf-8"></meta>
    <meta name="author" content="Juan F Neira"></meta>
    <meta name="description" content="Fuel Template"></meta>
    
    <?php  echo Asset::css('east.css')?>
</head>

<body>
<header>
    <div id="CSU_logo">
        <img src="<?php echo Asset::img('CSU-Official-wrdmrk-357-Rev.png') ?>" alt="Colostate Logo" width="450">
    </div>
    <div id="title">
        <h2> <?php echo $title; ?></h2>
    </div>
</header>

<?php echo $content; ?>

<br>
<hr>

<footer>
    Created by: JNP || Last Modified: Feb 15th 2022
</footer>
</body>
</html>
>>>>>>> 3fc329f3b4679a121a3a2ee91721cfbb97fd38d6
