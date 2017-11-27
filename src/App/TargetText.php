<?php

namespace App;

use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;

class TargetText
{
    public $string;

    public function getTargetString()
    {
        if (isset($_POST['string'])) {
            $this->string = $_POST['string'];
        }
        return $this->string;
    }


    public function __construct()
    {
        $this->getTargetFile();
    }

    public $url = '';
    public $file;

    public function getTargetFile()
    {
        if (isset($_POST ['file'])) {
            $this->url = $_POST['user_url'];
//        var_dump($this->url);
            $this->file = file_get_contents($this->url);
//        var_dump($this->file);
        }
        return $this->file;
    }
}

class WordFinder
{
    private $wordArray;

    public function getWordArray($text)
    {
        $this->wordArray = preg_split("/[\s.,;:'\"\(\)\+-]+/", $text);
//        var_dump($this->wordArray);
        return $this->wordArray;
    }
}

class WordCounter
{
    private $wordCount;

    public function getWordCount(array $wordArray)
    {
        $this->wordCount = count($wordArray);
        print_r('word count: ' . $this->wordCount . '<br>');
        return $this->wordCount;
    }
}

//class SentenceCounter
//{
//    private $sentenceCount;
//
//    public function sentenceMatch($string)
//    {
//        $this->sentenceCount = preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $string);
////        print_r($this->sentenceCount);
//        return $this->sentenceCount;
//    }
//}

class WordLengthCalculator
{
    private $charCount;

    public function getTextLength($wordArray)
    {
        $stringChars = implode("", $wordArray);
        $this->charCount = strlen($stringChars);
        print_r('chars:    ' . $this->charCount . '<br>');
        return $this->charCount;
    }

    private $avgWordLength;

    public function getAvgWordLength($charCount, $wordCount)
    {
        $this->avgWordLength = round($charCount / $wordCount, 3);
        print_r('avg word length: ' . $this->avgWordLength . '<br>');
        return $this->avgWordLength;
    }

    private $longestWordLength = 0;
    private $longestWord = '';

    public function getLongestWord($wordArray)
    {
        foreach ($wordArray as $word) {
            if (strlen($word) > $this->longestWordLength) {
                $this->longestWordLength = strlen($word);
                $this->longestWord = $word;
            }
        }
        print_r('longest word: ' . $this->longestWord . '<br>');
        return $this->longestWord;
    }

    private $wordLengthsArray;

    public function getLengthsArray($wordArray)
    {
        $this->wordLengthsArray = array_map('strlen', $wordArray);
//        echo'wordLengthsArray: '; var_dump($this->wordLengthsArray); echo '<br>';
        return $this->wordLengthsArray;
    }
}

class LengthSorter
{
//missing: lengths section, autoloader fixing, css transporting, containers, interfaces, type hinting, removing redundant directories, readme, unit tests, browserstack.


    private $wordLengthFrequency;

    public function getWordLengthFrequency($wordLengthsArray)
    {
        $this->wordLengthFrequency = array_count_values($wordLengthsArray);
        ksort($this->wordLengthFrequency);
//        echo 'wordLengthFrequency '; var_dump($this->wordLengthFrequency); '<br>';
        return $this->wordLengthFrequency;
    }

    private $biggestWordLength;

    public function getBiggestWordLength($wordLengthFrequency)
    {
        $this->biggestWordLength = max($wordLengthFrequency);
        print_r('<br> biggestWordLength:' . $this->biggestWordLength . '<br>');
        return $this->biggestWordLength;
    }

    private $lengthFrequencyList;

    public function listLengthFrequencies($wordLengthFrequency)
    {
        $highestFrequencies = array_keys($wordLengthFrequency, max($wordLengthFrequency));
        $this->lengthFrequencyList = implode(' & ', $highestFrequencies);
        print_r('frequencyList' . $this->lengthFrequencyList);
        return $this->lengthFrequencyList;

    }
//$lengthFrequencyList = array_keys($lengthFrequency, max($lengthFrequency));

    private $mostCommonLengthFrequency;

    public function getMostCommonLengthFrequency($wordLengthFrequency)
    {
        $this->mostCommonLengthFrequency = max($wordLengthFrequency);
        print_r('<br> most common Length frequency: ' . $this->mostCommonLengthFrequency . '<br>');
        return $this->mostCommonLengthFrequency;
    }
}


