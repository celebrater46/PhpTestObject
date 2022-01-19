<?php

class Episode
{
//    public $novel_title; // 白金記
    public $title; // 第一話「訪問者」
    public $path; // "novels/shiroganeki/"
    public $link; // "novels/shiroganeki/1.txt
    public $chap_num;
    public $ep_num;

//    function __construct($folder, $chap_num, $ep_num){
//        $this->path = $folder;
//        $this->chap_num = $chap_num;
//        $this->ep_num = $ep_num;
//        if(file_exists($this->path . "list.txt")){
//            $temp = file($this->path . "list.txt");
//            $this->title = $temp[$this->ep_num];
//        } else {
//            $this->title = "list.txt が見つからないか、読み込めません。";
//        }
//        $this->link = $this->path . $this->ep_num . ".txt";
//    }

    function __construct($title, $path, $chap_num, $ep_num){
        $this->title = $title;
        $this->path = $path;
        $this->chap_num = $chap_num;
        $this->ep_num = $ep_num;
        $this->link = $this->path . $this->ep_num . ".txt";
    }
}