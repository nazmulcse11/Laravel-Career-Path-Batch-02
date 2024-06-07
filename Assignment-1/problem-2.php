<?php

//Problem 2:
//Given a few paragraphs in a file, read the file and count how many words are there.
//For example, if there is a file with the following contents:
//
//Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.
//
//You need to output: 10
//
//Because there are 10 words.
//Note: There can be multiple paragraphs. You need to count all of the words from all of the paragraphs.
//You need to read the data from a file.


// Function to count words in a given file
function countWordsInFile($filename) {
    $content = file_get_contents($filename);
    $words = str_word_count($content);
    return $words;
}

$filename = "./files/paragraph.txt";
$totalWords = countWordsInFile($filename);

echo "Total number of words: " . $totalWords;

?>