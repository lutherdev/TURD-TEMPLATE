<?php 
function navHeader($navList){
?>
    <div id="navbar">
        <div class="sitename">LEARNPHP</div>
        <div class="buttons">
            <?php foreach($navList as $nav): ?>
            <a href="<?php echo $nav["url"]; ?>" target="_self" class="btn"><?php echo $nav["label"]; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
<?php
}
?>