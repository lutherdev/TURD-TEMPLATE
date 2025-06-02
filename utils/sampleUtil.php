<?php

function capitalizeFLetter($studarray){
    foreach ($studarray as $stud):
        echo "Output: " . ucwords($stud) . "<br>";
    endforeach;
}

?>