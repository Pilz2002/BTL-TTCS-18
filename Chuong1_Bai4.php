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
    //kiểm tra số nguyên tố
    $n = 11;
    $count = 1;
    for ($i = 1; $i <= sqrt($n); $i++){
        if ($n % $i == 0)
            $count ++;
    }
    if ($count <= 2)
        echo "$n là số nguyên tố";
    else 
        echo "$n không phải số nguyên tố";
    ?>
</body>
</html>