<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 28/11/2017
 * Time: 09:28
 */

namespace App;


class CalculateWordLengthsAction
{
    private $charCount;

    public function getTextLength($wordArray)
    {
        $stringChars = implode("", $wordArray);
        $this->charCount = strlen($stringChars);
        return $this->charCount;
    }

    private $avgWordLength;

    public function getAvgWordLength($charCount, $wordCount)
    {
        $this->avgWordLength = round($charCount / $wordCount, 3);
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
        return $this->longestWord;
    }

    private $wordLengthsArray;

    public function getLengthsArray($wordArray)
    {
        $this->wordLengthsArray = array_map('strlen', $wordArray);
        return $this->wordLengthsArray;
    }
}