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
        $n = 3;
        function factorial($n) {
            if ($n == 1 )
                return 1;
            else 
                return $n * factorial($n - 1);
        }
        // $total = factorial($n);
        for ($i = 1; $i <= $n; $i++) {
            $total += factorial($i);
        }
        echo "kết quả biểu thức là: ". $total;
    ?>
</body>
</html>