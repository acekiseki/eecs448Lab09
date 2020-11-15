<?php


    function collectionService($answer)
    {
        return $_POST[$answer];
    }


    function keyCheck($answer, $key) 
    {
        global $numCorrect;
        if ($answer == $key) 
        {
            $numCorrect++;
        }
    }

    $numCorrect = 0;


    echo "Q1: Who is the most useless person in this world? <br>";
    echo "You answered: ". collectionService("person") . "<br>";
    keyCheck(collectionService("person"), "Donald Trump");
    echo "Correct answer: Donald Trump <br> <br>";

    echo "Q2: Why do people exist on this planet? <br>";
    echo "You answered: ". collectionService("planet") . "<br>";
    keyCheck(collectionService("planet"), "No one knows");
    echo "Correct answer: No one knows <br> <br>";

    echo "Q3: What is Kujo Jotaro's Stand's name? <br>";
    echo "You answered: ". collectionService("JOJO") . "<br>";
    keyCheck(collectionService("JOJO"), "Star Platinum");
    echo "Correct answer: Star Platinum <br> <br>";

    echo "Q4: Why are you even doing this Quiz? <br>";
    echo "You answered: ". collectionService("why") . "<br>";
    keyCheck(collectionService("why"), "Because I have to");
    echo "Correct answer: Because I have to <br> <br>";

    echo "Q5: Does 1 + 1 = 2? <br>";
    echo "You answered: ". collectionService("math") . "<br>";
    keyCheck(collectionService("math"), "Yes");
    echo "Correct answer: Yes <br> <br> <br>";



    echo "You have correctly answered: <b>" . $numCorrect . "</b> Question(s)! <br>";
    echo "<b>You received a score of: " . ($numCorrect / 5 * 100) . "% <br>";

?>