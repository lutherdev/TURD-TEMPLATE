<?php
$pageTitle = "My Simple PHP Home Page";
$welcomeMessage = "Welcome to My Website!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1><?= $pageTitle ?></h1>
    </header>

    <main class="main">
        <div class="card">
            <p><?= $welcomeMessage ?></p>
            <p>This page uses Flexbox and external CSS.</p>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; <?= date("Y") ?> My Website</p>
    </footer>
</body>
</html>
