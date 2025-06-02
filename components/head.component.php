<?php
function head($pageTitle, $pageRef){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="assets/css/<?php echo $pageRef;?>.css">
    </head>
    <body>
            <?php
}
?>


