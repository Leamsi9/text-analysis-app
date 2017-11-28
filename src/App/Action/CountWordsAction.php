<?php


namespace App;


class CountWordsAction
{
    private $wordCount;

    public function getWordCount(array $wordArray)
    {
        $this->wordCount = count($wordArray);
        return $this->wordCount;
    }
}