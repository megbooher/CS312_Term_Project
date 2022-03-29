<head>
    <title><?php echo $title; ?> </title>
    <meta charset="utf-8"></meta>
    <meta name="author" content="Megan Booher, Maggie Funston, Juan F Neira, Andrew Ricciardi"></meta>
    <meta name="description" content="Fuel Template"></meta>
    
    <?php  echo Asset::css('main.css')?>
</head>

<body>
<header>
    <div id="Company_logo">
        <img src="<?php echo Asset::img('companylogo.png') ?>" alt="Company Logo" width="450">
    </div>
    <div id="title">
        <h2> <?php echo $title; ?></h2>
    </div>
</header>

<?php echo $content; ?>

<br>
<hr>

<footer>
    Created by: JNP || Last Modified: Mar 27th 2022
</footer>
</body>
</html>
