<?php echo Asset::css('biography.css') ?>

<nav>
    <ul id="top_menu">
        <li><a href="./index">Home</a></li>
        <li><a href="./biography">Team Biography</a></li>
        <li><a href="./biography">Page</a></li>
    </ul>
    <hr>
</nav>

<body>
<section id="team_biographies">
    <div class="team_left_pos">
            <h2> Andrew Ricciardi </h2>
            <div class="floatClear"></div>
            <div id="AR_Photo">
                <?php echo Asset::img('AR_Photo.jpg') ?>
            </div>
            <p>
                Andrew is a 4th year computer science student at Colorado State University with a concentration in human
                centered computing. He currently lives in an apartment with his girlfriend and dog, but hopes they can
                afford to move into a house one day and find jobs that allow them to work remotely from home.
            </p>
            <div class="floatClear"></div>
    </div>

    <div class="team_right_pos">
        <h2> Juan Felipe Neira </h2>
        <div class="floatClear"></div>
        <div id="JN_Photo">
            <?php echo Asset::img('JN_Photo2.jpg') ?>
        </div>
        <p>
            Juan is a Biomedical Engineer who graduated in 2020 from the Florida Institute of Technology. He is
            currently pursuing a post-bachelor’s degree in computer science at CSU Online. Ideally, before he
            graduates, he would like to gain experience in app development and data analysis applicable to a healthcare
            and engineering setting.
        </p>
        <div class="floatClear"></div>
    </div>

    <div class="team_left_pos">
        <h2> Maggie Funston </h2>
        <div class="floatClear"></div>
        <div id="MF_Photo">
            <?php echo Asset::img('MF_Photo.jpg') ?>
        </div>
        <p>
            Maggie is a senior Computer Science major with a concentration in Networks and Security. She is currently
            working at a real estate tech startup and a consulting company she founded with friends. She will be
            graduating in May, and continue to work for these companies.
        </p>
        <div class="floatClear"></div>
    </div>

    <div class="team_right_pos">
        <h2> Megan Booher </h2>
        <div class="floatClear"></div>
        <div id="MB_Photo">
            <?php echo Asset::img('MB_Photo.jpg') ?>
            <div class="floatClear_"></div>
        </div>
        <p>
            Megan is a senior in Computer Science with a Statistics minor. She is passionate about machine learning
            a data science, and is excited to work on wild fire research/simulations after she graduates in May.

        </p>
        <div class="floatClear"></div>
    </div>
</section>


</body>