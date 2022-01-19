<?php

require_once "Novel.php";

$Shiroganeki = new Novel(1, "白金記", "shiroganeki");
$Gokuraku = new Novel(2, "極楽戦争", "gokuraku");

$Shiroganeki_eps = $Shiroganeki->get_episodes();

$Test_Ep = $Shiroganeki->test_create_episode();
$Ep = $Shiroganeki->test_create_episode;

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

    <p><?php var_dump($Shiroganeki_eps); ?></p>
    <p><?php var_dump($Shiroganeki->test_show_list); ?></p>
    <p><?php var_dump($Ep); ?></p>

    <?php foreach ($Shiroganeki_eps as $ep) : ?>
        <p><?php echo $ep->title . ", " . $ep->link; ?></p>
    <?php endforeach; ?>



    <h2><?php echo $Gokuraku->title; ?></h2>
    <h3><?php echo $Gokuraku->path; ?></h3>
    <?php foreach ($Gokuraku->caption as $line) : ?>
        <p><?php echo $line; ?></p>
    <?php endforeach; ?>


</body>
</html>
