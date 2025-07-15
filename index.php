<?php
require_once __DIR__ . '/handlers/pageData.handler.php';
require_once __DIR__ . '/components/head.component.php';
require_once __DIR__ . '/components/nav.component.php';
?>

<?php
head("Home", "home");
navHeader($navList);
?>
        <div id="main">
            <div id="hero-text">
                <h1>Welcome Programmer!</h1>
                <p>Discover the basics of PHP!</p>
                <p>Just another test</p>
                <a href="page/tutorial-page/index.php" class="btn"> PHP BASICS </a>
            </div>
            
        </div>
</body>
</html>