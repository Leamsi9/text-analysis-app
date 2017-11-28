<?php


namespace tests\App;

use PHPUnit\Framework\TestCase;

require "../../../src/App/Action/FindWordsAction.php";

class FindWordsActionTest extends TestCase
{
    public function testFindWordsAction()
    {
    $wordAction = new \App\FindWordsAction();
    $this->assertTrue(is_object($wordAction));
    }

    public function testGetWordArray()
    {
        $text = "Hello world & good morning. The date is 18/05/2016";
        $wordAction = new \App\FindWordsAction();
        $wordArray = $wordAction->getWordArray($text);
        $this->assertTrue(is_array($wordArray));
    }

    public function testArrayContent()
    {
        $text = "Hello world & good morning. The date is 18/05/2016";
        $wordAction = new \App\FindWordsAction();
        $wordArray = $wordAction->getWordArray($text);
        $arrayString = implode("", $wordArray);
        $this->assertFalse(strpos( $arrayString, "/[\s.,;:\'\"\(\)\+-]+/" ));
    }
}