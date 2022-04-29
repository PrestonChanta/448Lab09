<?php
    $math = $_POST["math"];
    $quarterback = $_POST["quarterback"];
    $city = $_POST["city"];
    $food = $_POST["food"];
    $planet = $_POST["planet"];
    $right = 0;

    if($math == "4")
    {
        $right++;
    }
    if($quarterback == "Patrick Mahomes")
    {
        $right++;
    }
    if($city == "City of Fountains")
    {
        $right++;
    }
    if($food == "Churches Chicken")
    {
        $right++;
    }
    if($planet == "Mercury")
    {
        $right++;
    }

    function percent($x)
    {
        return ($x/5)*100;
    }

    $percent = percent($right);

    echo "<p>Question 1: What is 2+2?<br>&emsp;You answered: $math<br>&emsp;Correct answer: 4</p>";
    echo "<p>Question 2: Who is the quarterback for the Kansas City Chiefs?<br>&emsp;You answered: $quarterback<br>&emsp;Correct answer: Patrick Mahomes</p>";
    echo "<p>Question 3: What nickname correlates to Kansas City?<br>&emsp;You answered: $city<br>&emsp;Correct answer: City of Fountains</p>";
    echo "<p>Question 4: What fast food restaurant was founded in April 17, 1952?<br>&emsp;You answered: $food<br>&emsp;Correct answer: Churches Chicken</p>";
    echo "<p>Question 5: What planet is closest to the sun?<br>&emsp;You answered: $planet<br>&emsp;Correct answer: Mercury</p>";
    echo "<p style='font-weight: bold'>Score: $right/5<br>Percent: $percent%</p>";
?>