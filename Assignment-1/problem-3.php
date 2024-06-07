<?php
//Problem 3:
//Given a sentence, keep the order of the words same, but reverse the characters of each word.
//For example, if the given sentence is: ‘I love programming’
//The result should be: ‘I evol gnimmargorp’
//
//Here the order of the words is the same as the given sentence, but the order of the characters in the words is reversed.




// Function to reverse characters of each word in a sentence
function reverseWords($sentence) {
    $words = explode(" ", $sentence);

    $reversedWords = array();
    foreach ($words as $word) {
        $reversedWord = strrev($word);
        $reversedWords[] = $reversedWord;
    }

    $reversedSentence = implode(" ", $reversedWords);
    return $reversedSentence;
}

// Given sentence
$sentence = 'I love programming';
$reversedSentence = reverseWords($sentence);

// Output the result
echo "Given sentence: $sentence\n";
echo "Reversed sentence: $reversedSentence\n";

?>
