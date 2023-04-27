<?php
$numbers = isset($_POST['numbers']) ? $_POST['numbers'] : '';
$array = explode(',', $numbers);
$array = array_filter($array);
$max = max($array);

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
<form method="post" action="">
    <input type="text" name="numbers">
    <button type="submit">Submit</button>
    <h1>Katta raqam: <?php echo $max?></h1>
</form>

</body>
</html>
