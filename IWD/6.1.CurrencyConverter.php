<?php

function NoteCalculator($Value){
    $Convert = [];
    $Notes = [100, 50, 20, 10, 5, 2, 1];
    
    foreach($Notes as $note){
        if($Value >= $note){
            $Convert[$note] = intdiv($Value, $note);
            $Value = $Value % $note;        }
    }

    print_r($Convert);
}

$Ramu = 345;
NoteCalculator($Ramu);

?>

