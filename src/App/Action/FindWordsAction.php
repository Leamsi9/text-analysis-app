<?php


namespace App;


class FindWordsAction
{
    private $wordArray;

    public function getWordArray($text)
    {
        $this->wordArray = preg_split("/[\s.,;:'\"\(\)\+-]+/", $text);
        return $this->wordArray;
    }
}