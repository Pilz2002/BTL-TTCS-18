<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="nhap" action="">
        <tr>
            <td>
                Nhập số n: <input type="text" name="n">
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    if (isset($_POST['n']) && is_numeric($_POST['n'])) {
                    $total = 1;
                    $n = (int) $_POST['n']; 
                    function f($n) {
                        if ($n == 1)
                            return 1 + 1 / 3;
                        else 
                            return 1 + 1/ ($n * $n + 2 * $n);
                    }           
                    for ($i = 1; $i <= $n; $i++) {
                        //$total *= (1 + 1/ ($i * $i + 2 * $i));
                        $total *= f($i);  
                    }
                }
                else {
                    echo "Dữ liệu không hợp lệ";
                }
                ?>
                Kết quả: <input type="text" name="kq" value="<?php echo $total?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="tính">
            </td>
        </tr>
    </form>

</body>
</html>