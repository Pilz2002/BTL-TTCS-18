<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $total = 0;
    $n = 10;
    if ($n < 1){
        $total = 15000;
    }
    else if ($n > 1 && $n <= 5) {
        $total = 15000 + ($n - 1) * 12000; 
    }
    else if ($n > 6 && $n <= 140) {
        $total = 15000 + ($n - 5) * 9000;
    }
    else if ($n > 140) {
        $total = (15000 + 4 * 12000 + 134 * 9000 + 9000 * ($n - 140)) * 88/100;
    }
    echo "tổng số tiền là: $total";
    ?>
</body>
</html>