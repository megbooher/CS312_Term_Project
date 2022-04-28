<head>
    <?php echo Asset::css('index.css'); ?>

    <meta charset="utf-16">
    <meta name="author" content="CS312 milestone1">
    <meta name="description" content="Color Coordinate">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
</head>

<?php if(isset($header)) echo $header;?>



<body>
    <?php if(isset($title))
    {
        ?>

    <h1><?php echo $title;?></h1>

    <?php
        }
?>

    <div id='contentContainer'>
        <?php echo $content;?>
    </div>

</body>
<footer>
    CS312 Spring 2022
</footer>