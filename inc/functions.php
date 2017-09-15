<?php
function print_numbers(){
    $card_numbers = range(1, 52);
    foreach($card_numbers as $card){
        echo $card;
    }
}
?>