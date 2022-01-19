<?php

class Novel
{
    public $title;
    public $path; // "sample/"
    public $caption;
    public $episodes = [];

    function __construct($title, $folder_name){
        $this->title = $title;
        $this->path = $folder_name . "/";
        $this->caption = file($this->path . "caption.txt");
    }
}