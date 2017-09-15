<?php
function print_numbers(){
    $card_numbers = range(1, 52);
    foreach($card_numbers as $card){
        echo $card;
    }
}

function displayCards(){
    $suite=rand(1,4);
    $card=rand(1,13);
    echo "<img id='$card' src='../img/cards/$suite/$card.png' alt='$card' title='". ucfirst($card) . "' width='70' />";
}
displayCards();
?>