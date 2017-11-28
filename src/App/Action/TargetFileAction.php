<?php

namespace App;


class TargetFileAction
{
    public function __construct()
    {
        $this->getTargetFile();
    }

    public $file;
    public $url = '';

    public function getTargetFile()
    {
        $this->url = $_POST['user_url'];
        $this->file = file_get_contents($this->url);
        return $this->file;
    }

}