<?php

namespace App;


class TextContainer
{
    public $text;

    public function __construct()
    {
        if (isset($_POST ['string'])) {
            $targetString = new TargetStringAction();
            $targetString->getTargetString();
            $this->text = $targetString->string;
        } elseif (isset($_POST['file'])) {
            $targetFile = new TargetFileAction();
            $targetFile->getTargetFile();
            $this->text = $targetFile->file;
        }
    }
}