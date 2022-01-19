<?php

require_once "Novel.php";

$Shiroganeki = new Novel("白金記", "shiroganeki");
$Gokuraku = new Novel("極楽戦争", "gokuraku");

//echo $SampleNovel->title . PHP_EOL;
//echo $SampleNovel->path . PHP_EOL;
//
//var_dump($SampleNovel->caption);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Test Novel List</title>
</head>
<body>
    <h1>Test Novel List</h1>

    <h2><?php echo $Shiroganeki->title; ?></h2>
    <h3><?php echo $Shiroganeki->path; ?></h3>
    <?php foreach ($Shiroganeki->caption as $line) : ?>
        <p><?php echo $line; ?></p>
    <?php endforeach; ?>


    <h2><?php echo $Gokuraku->title; ?></h2>
    <h3><?php echo $Gokuraku->path; ?></h3>
    <?php foreach ($Gokuraku->caption as $line) : ?>
        <p><?php echo $line; ?></p>
    <?php endforeach; ?>

</body>
</html>
