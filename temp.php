<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Test Novel List</title>
</head>
<body>
<h1>Test Novel List</h1>


<?php for ($i = 0; $i < count($title_and_path); $i++) : ?>
    <hr>
    <h2>
        <a href="episodes.php?novel_id=<?php echo $i; ?>">
            <?php echo $title_and_path[$i][0]; ?>
        </a>
    </h2>
    <div class="caption">
        <?php foreach ($captions[$i] as $line) : ?>
            <p><?php echo $line ?></p>
        <?php endforeach; ?>
    </div>
<?php endfor; ?>



</body>
</html>
