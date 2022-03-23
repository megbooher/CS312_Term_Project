<head>
<?php echo Asset::css($dir. '.css'); ?>

    <meta charset="utf-16">
    <meta name="author" content="CS312 lab2">
    <meta name="description" content="Megans homepage for cs312">
    <meta name="keywords" content="Homepage, HTML5, CS312, CSU">
    
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="./index.css" type="text/css">

</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>
    <nav>
        <ul>
            <li><?php echo "<a href= 'https://cs.colostate.edu:4444/~meganboo/cs312/fuelviews/index.php/eastwest/index?direction=$dir'>Home</a>" ?></li>
            <li><?php echo "<a href= 'https://cs.colostate.edu:4444/~meganboo/cs312/fuelviews/index.php/eastwest/one?direction=$dir'>One</a>" ?></li>
            <li><?php echo "<a href= 'https://cs.colostate.edu:4444/~meganboo/cs312/fuelviews/index.php/eastwest/two?direction=$dir'>Two</a>" ?></li>
            <li><?php echo "<a href= 'https://cs.colostate.edu:4444/~meganboo/cs312/fuelviews/index.php/eastwest/index?direction=$other'>$other</a>" ?></li>
        </ul>
    </nav>
    <main>
        <div>
            <img src="https://www.cs.colostate.edu:4444/~meganboo/cs312/fuelviews/assets/img/my_pic.jpeg" style="width: 500px"
            alt="Image of me" >
            <p>Hello I am Megan, this is a picture of Megan</p>
        </div>
        <div>
            <span><p>Here is a link to my summer research project at LANL
                <a href="https://www.lanl.gov/org/ddste/aldsc/hpc/recruiting/intern-showcase.php">here</a>
            </p></span>
            <span><p>Here is a random link so I have two links
                <a href="https://www.online.colostate.edu/courses/CS/CS312.dot">here</a>
            </p>

            </span>
        </div>
        <div>
            <h3>Things I am interested in:</h3>
            <ol>
                <li>Data Science</li>
                <li>AI/ML</li>
                <li>Hiking</li>
                <li>Camping</li>
                <li>Climbing</li>
                <li>Crocheting too much</li>

            </ol>
        </div>
    </main>
    <footer>
        <p>For CS312 spring 2022</p>
    </footer>
</body>