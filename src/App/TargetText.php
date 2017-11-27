<?php

namespace App;

use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;

class TargetText
{
    public $string;

    public function targetString()
    {
        if (isset($_POST['string'])) {
            $this->string = $_POST['target_text'];
        }
        return $this->string;
    }


    public function __construct()
    {
        $this->targetFile();
    }

    public $url = '';
    public $text;

    public function targetFile()
    {
        if (isset($_POST ['file'])) {
            $this->url = $_POST['user_url'];
//        var_dump($this->url);
            $this->text = file_get_contents($this->url);
//        var_dump($this->file);
        }
        return $this->text;
    }
}

class WordFinder
{
    private $wordArray;

    public function wordArray($text)
    {
        $this->wordArray = preg_split("/[\s.,;:'\"\(\)\+-]+/", $text);
//        var_dump($this->wordArray); /\
        return $this->wordArray;
    }
}

class WordCounter
{
    private $wordCount;

    public function wordCount(array $wordArray)
    {
        $this->wordCount = count($wordArray);
        print_r('word count: ' . $this->wordCount . PHP_EOL);
        return $this->wordCount;
    }
}

class SentenceCounter
{
    private $sentenceCount;

    public function sentenceMatch($string)
    {
        $this->sentenceCount = preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $string);
//        print_r($this->sentenceCount);
        return $this->sentenceCount;
    }
}

class WordLengthCalculator
{
//$wordLength = wordLengths($targetTextWords);
    /**
     * @param $wordArray
     * @return int (character length of each word)
     */

    private $charCount;

    public function textLength($text)
    {
        $this->charCount = strlen($text);
//        print_r($this->charCount . PHP_EOL);
        return $this->charCount;
    }

    private $avgWordLength;

    public function avgWordLength($charCount, $wordCount)
    {
        $this->avgWordLength = round($charCount / $wordCount, 3);
        print_r('avg word length: ' . $this->avgWordLength . PHP_EOL);
        return $this->avgWordLength;
    }

    private $longestWordLength = 0;
    private $longestWord = '';

    public function longestWord($wordArray)
    {
        foreach ($wordArray as $word) {
            if (strlen($word) > $this->longestWordLength) {
                $this->longestWordLength = strlen($word);
                $this->longestWord = $word;
            }
        }
        print_r('longest word: ' . $this->longestWord . PHP_EOL);
        return $this->longestWord;
    }
}

//private $length = 0;
//public function wordLengths($wordArray)
//{
//    foreach ($wordArray as $word) {
//        $this->length = strlen($word);
//    }
//    var_dump($this->length);
//    return $this->length;
//}
