<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="nhap" action ="" method="post">        
            <tr>
                <td>
                    Nhập số n: <input type="text" name="n">  
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả là: <input type="text" name="n">  
                </td>
            </tr>            
            <tr>
                <td>&nbsp; <input type="submit" value="tính"></td>                                            
            </tr>       
    </form>
    <?php

        if (isset($_POST['n']) && is_numeric($_POST['n'])) {
                $total = 0;
                $n = (int) $_POST['n'];
                for ($i = 1; $i <= $n; $i++) {
                    $tg = 1;
                    for ($j = 1; $j <= $i; $j++) {
                        $tg *= $j;
                    }
                    $total += $tg;
                }     
                echo "<tr>
                    <td>
                        Kết quả: <input type='text' name='n' value='$total'>
                    </td>
                </tr>";               
            }
            else {
                echo "Dữ liệu không hợp lệ </ br>";
             }
              
     ?>     
</body>
</html>