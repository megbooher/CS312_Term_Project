<header>
    <div id='smallLogo'>
        <?php echo Asset::img('SmallLogo.png', array('style' => 'width: 150', 'alt' => 'smallLogo'));?>
        <h1 id='title'>Cat Midwife Finder</h1>
    </div>
    <nav>
        <ul id="top_menu">
            <li><a class=<?php echo $homeStyle;?> href="./index">Homepage</a></li>
            <li><a class=<?php echo $aboutStyle;?> href=<?=Uri::create('index.php/milestone/about')?>>About</a></li>
            <li><a class=<?php echo $colorStyle;?>
                    href=<?=Uri::create('index.php/milestone/color' . ( isSet($rows) && isSet($colors) ? ('?n_rows_cols=' .$rows . '&n_colors=' . $colors) : '') )?>>Color
                    Coordinate Page
                </a></li>
        </ul>
    </nav>
</header>