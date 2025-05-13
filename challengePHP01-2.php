<?php

$name = 'Kathrin'; 
$rating = 7; 
$date = date("H"); 

if ($date < 12) {
    echo "Good morning " . $name;
} elseif ($date >= 12 && $date < 19) {
    echo "Good afternoon " . $name;
} else {
    echo "Good evening " . $name;
}

echo '<br>';

$rated = false; 
if (is_numeric($rating) && intval($rating) >= 1 && intval($rating) <= 10) {
    if ($rated) {
        echo "You already voted with a $rating.<br><br>";
    } else {
        echo "Thanks for voting with a $rating.<br><br>";
    }
} 
else {
    echo "<br><u>Invalid rating, only numbers between 1 and 10.</u><br><br>";
}
