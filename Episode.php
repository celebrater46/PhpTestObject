<?php

class Episode
{
    public $title; // 第一話「訪問者」
    public $path; // "novels/shiroganeki/"
    public $link; // "novels/shiroganeki/1.txt
    public $chap_num;
    public $ep_num;

    function __construct($title, $path, $chap_num, $ep_num){
        $this->title = $title;
        $this->path = $path;
        $this->chap_num = $chap_num;
        $this->ep_num = $ep_num;
        $this->link = $this->path . $this->ep_num . ".txt";
    }
}