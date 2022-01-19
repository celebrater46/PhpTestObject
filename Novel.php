<?php

class Novel
{
    public $title;
    public $path; // "samples/shiroganeki/"
    public $caption;
    public $episodes = [];

    function __construct($title, $folder_name){
        $this->title = $title;
        $this->path = "samples/" . $folder_name . "/";
        $this->caption = file($this->path . "caption.txt");
    }
}