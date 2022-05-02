<head>
    <?php echo Asset::css('index.css', array('id' => 'cssfile')); ?>

    <meta charset="utf-16">
    <meta name="author" content="CS312 milestone1">
    <meta name="description" content="Color Coordinate">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
</head>

<?php echo $header;?>



<body>
    <h2 id='title'><?php echo $title;?></h2>
    <div id='contentContainer'>
        <?php echo $content;?>
    </div>

</body>
<footer>
    CS312 Spring 2022
</footer>