<div class="codebox">
    <h4>Code:</h4>
    <h5><?= $snippet ?></h5>
    <button onclick="<?=$funcName?>()">Show Output</button>
    <div id="outputBox<?=$num?>">
        <?= $outputHtml ?>
    </div>
</div>