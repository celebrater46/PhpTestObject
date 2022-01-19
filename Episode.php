<?php

class Episode
{
//    public $novel_title; // 白金記
    public $title; // 第一話「訪問者」
    public $path; // "novels/shiroganeki/"
    public $link; // "novels/shiroganeki/1.txt
    public $ep_num;

    function __construct($folder, $num){
        $this->path = $folder;
        $this->ep_num = $num;
        if(file_exists($this->path . "list.txt")){
            $temp = file($this->path . "list.txt");
            $this->title = $temp[$num];
        } else {
            $this->title = "list.txt が見つからないか、読み込めません。";
        }
        $this->link = $this->path . $num . ".txt";
    }
}