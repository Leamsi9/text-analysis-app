<?php


namespace App;


class TargetStringAction
{
    public $string;

    public function getTargetString()
    {
        $this->string = $_POST['string'];
        return $this->string;
    }
}
