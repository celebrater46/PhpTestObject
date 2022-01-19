<?php

require_once "Episode.php";

class Novel
{
    public $id;
    public $title;
    public $path; // "samples/shiroganeki/"
    public $caption;
    public $episodes = [];
    public $test_show_list;
    public $test_create_episode;

    function __construct($id, $title, $folder_name){
        $this->id = $id;
        $this->title = $title;
        $this->path = "samples/" . $folder_name . "/";
        $this->caption = file($this->path . "caption.txt");
    }

    function get_episodes(){
        $list = file($this->path . "list.txt");
        $this->test_show_list = $list;
        for ($i = 0; $i < count($list); $i++){
            $temp = explode("|", $list[$i]); // 1, 001, "第一話「訪問者」"
            array_push(
                $this->episodes,
                new Episode($temp[2], $this->path, $temp[0], $temp[1])
            );
        }
    }

    function test_create_episode(){
        $this->test_create_episode = new Episode("第一話「訪問者」", $this->path, 1, 1);
    }
}