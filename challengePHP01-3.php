<?php

function getGreeting($name) {
    $date = date("H");
    if ($date < 12) {
        return "Good morning " . $name;
    } elseif ($date >= 12 && $date < 19) {
        return "Good afternoon " . $name;
    } else {
        return "Good evening " . $name;
    }
}

$voters = [
    "Marija" => "false,5",
    "Nikola" => "true,8",
    "Angela" => "false,90",
    "Tamara" => "true,7",
  
];

foreach ($voters as $voterName => $voterData) {
    list($vote, $rating) = explode(",", $voterData); 

    $vote = filter_var($vote, FILTER_VALIDATE_BOOLEAN);

    echo getGreeting($voterName) . ",<br>";

    if (is_numeric($rating) && intval($rating) >= 1 && intval($rating) <= 10) {
        if ($vote) {
            echo "You already voted with a $rating.<br><br>";
        } else {
            echo "Thanks for voting with a $rating.<br><br>";
        }
    } 
    else {
        echo "<br><u>Invalid rating, only numbers between 1 and 10.</u><br><br>";
    }
}
?>
