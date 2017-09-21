<?php
    $card_numbers = range(1, 52);
function displayCards(){
    $names = array("Chris", "Cynthia", "Nolan", "Raeleen");
    $users = array("Chris", "Cynthia", "Nolan", "Raeleen");
    $users = array_fill_keys($users, 0);
    foreach($names as $player){
        $users[$player] = getCards($player);
    }
}

function getCards($user){
    global $card_numbers;
    $lowercase = strtolower($user);
    echo "<img id='users' src='img/$lowercase.jpg' title='$user' alt='$user'/>";
    $total = 0;
    while($total < 35){
        $card = rand(1, 13);
        $suite = rand(1, 4);
        if($card_numbers[($card * $suite) - 1] != 0){
            $card_numbers[($card * $suite) - 1] = 0;
            $total += $card;
            echo "<img id='$card' src='img/cards/$suite/$card.png' alt='$card' title='' width='70' />";
        }
    }
    echo "<span id='score'>Score: $total</span>";
    echo "<br>";
    return $total;
}
?>