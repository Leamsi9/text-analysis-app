<?php

namespace App;


class AnalyseTextAction
{
    public function analyseText($text)
    {
        $wordFinder = new \App\FindWordsAction;
        $wordList = $wordFinder->getWordArray($text);
        $wordCounter = new \App\CountWordsAction();
        $this->wordCount = $wordCounter->getWordCount($wordList);
        $lengthCalculator = new \App\CalculateWordLengthsAction();
        $this->charCount = $lengthCalculator->getTextLength($wordList);
        $this->avgWordLength = $lengthCalculator->getAvgWordLength($this->charCount, $this->wordCount);
        $this->longestWord = $lengthCalculator->getLongestWord($wordList);
        $wordLengths = $lengthCalculator->getLengthsArray($wordList);
        $lengthsSorter = new \App\SortLengthsAction();
        $this->wordLengthFrequency = $lengthsSorter->getWordLengthFrequency($wordLengths);
        $this->maxWordLength = $lengthsSorter->getBiggestWordLength($wordLengths);
        $this->mostCommonLengthFrequency = $lengthsSorter->getMostCommonLengthFrequency($this->wordLengthFrequency);
        $this->lengthFrequencyList = $lengthsSorter->listLengthFrequencies($this->wordLengthFrequency);
    }
}