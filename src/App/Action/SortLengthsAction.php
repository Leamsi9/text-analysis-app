<?php

namespace App;


class SortLengthsAction
{
//missing: css transporting, interfaces, type hinting, docblocks removing redundant directories, readme, unit tests, browserstack.


    private $wordLengthFrequency;

    public function getWordLengthFrequency($wordLengthsArray)
    {
        $this->wordLengthFrequency = array_count_values($wordLengthsArray);
        ksort($this->wordLengthFrequency);
        return $this->wordLengthFrequency;
    }

    private $biggestWordLength;

    public function getBiggestWordLength($wordLengthFrequency)
    {
        $this->biggestWordLength = max($wordLengthFrequency);
        return $this->biggestWordLength;
    }

    private $lengthFrequencyList;

    public function listLengthFrequencies($wordLengthFrequency)
    {
        $highestFrequencies = array_keys($wordLengthFrequency, max($wordLengthFrequency));
        $this->lengthFrequencyList = implode(' & ', $highestFrequencies);
        return $this->lengthFrequencyList;

    }


    private $mostCommonLengthFrequency;

    public function getMostCommonLengthFrequency($wordLengthFrequency)
    {
        $this->mostCommonLengthFrequency = max($wordLengthFrequency);
        return $this->mostCommonLengthFrequency;
    }
}