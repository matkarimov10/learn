<?php
$n = isset($_POST['number']) ? $_POST['number'] : '';

for ($i = 0; $i < $n; $i+=5) {

    print $i . '<br>';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number">
    <button type="submit">Submit</button>
    <h2><?=$i?></h2>
</form>
</body>
</html>