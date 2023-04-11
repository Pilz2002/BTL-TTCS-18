<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="nhap" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <td>
                    Nhập số n: <input type="text" name="input_n">
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        if (isset($_POST['input_n']) && is_numeric($_POST['input_n'])) {
                            $total = 0;
                            $n = (int) $_POST['input_n'];
                            for ($i = 1; $i <= $n; $i++) {
                                $tg = 1;
                                for ($j = 1; $j <= $i; $j++) {
                                    $tg *= $j;
                                }
                                $total += $tg;
                            }
                        }
                        else {
                            echo "Dữ liệu không hợp lệ<br>";
                        }
                   ?>
                    Kết quả là: <input type="number" name="result_n" value="<?php echo $total; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
