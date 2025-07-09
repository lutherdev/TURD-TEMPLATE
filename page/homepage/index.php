<?php
$pageTitle = "My Simple PHP Home Page";
$cards = [
    "Welcome to My Website!",
    "Explore our services and features.",
    "Built with PHP and Flexbox layout.",
    "Fully responsive and easy to customize."
];
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
        <div class="card-container">
            <?php foreach ($cards as $text): ?>
                <div class="card">
                    <p><?= $text ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; <?= date("Y") ?> My Website</p>
    </footer>
</body>
</html>
