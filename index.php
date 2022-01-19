<?php

require_once "Novel.php";

$SampleNovel = new Novel("サンプル小説", "sample");

echo $SampleNovel->title . PHP_EOL;
echo $SampleNovel->path . PHP_EOL;

var_dump($SampleNovel->caption);
