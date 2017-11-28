<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 28/11/2017
 * Time: 09:33
 */

namespace App;


class OutputAnalysisAction
{
    public function outputData($wordCount, $avgWordLength, $wordLengthFrequency, $mostCommonLengthFrequency, $lengthFrequencyList)
    {
        echo 'Word count is ' . $wordCount . '<br> Average  word  length  is ' . $avgWordLength . '<br>';
        foreach ($wordLengthFrequency as $length => $frequency) {
            echo "Number  of  words  of  length $length is $frequency <br>";
        }
        echo 'The  most  frequently  occurring  word  length  is ' . $mostCommonLengthFrequency . ',  for  word  lengths  of ' . $lengthFrequencyList;
    }
}