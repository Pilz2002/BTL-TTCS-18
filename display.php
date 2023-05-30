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

    function SoDienTieuThu($last, $first)
    {
        return $last - $first;
    }

    function TinhTien($sodientieuthu)
    {
        $result = 0;
        if ($sodientieuthu <= 50) {
            $result = 1678 * $sodientieuthu;
        } else if ($sodientieuthu > 50 && $sodientieuthu <= 100) {
            $result = 1678 * 51 + ($sodientieuthu - 50) * 1734;
        } else if ($sodientieuthu > 100 && $sodientieuthu <= 200) {
            $result = 50 * 1678 + 51 * 1734 + ($sodientieuthu - 100) * 2014;
        } else if ($sodientieuthu > 200 && $sodientieuthu <= 300) {
            $result = 50 * 1678 + 51 * 1734 + 101 * 2014 + ($sodientieuthu - 200) * 2536;
        } else if ($sodientieuthu > 300 && $sodientieuthu <= 400) {
            $result = 50 * 1678 + 51 * 1734 + 101 * 2014 + 101 * 2536 + ($sodientieuthu - 300) * 2834;
        } else if ($sodientieuthu > 400) {
            $result = 50 * 1678 + 51 * 1734 + 101 * 2014 + 101 * 2536 + 101 * 2834 + ($sodientieuthu - 400) * 2927;
        }
        return $result += $result * 10 / 100;
    }

    require 'connect.php';

    $DisplaySql = "SELECT * FROM tblhousehold";
    $result = mysqli_query($conn, $DisplaySql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Month</th><th>Head Index</th><th>End index</th><th>Số điện tiêu thụ</th><th>Tiền phải trả</th><th>Hoạt động</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['month'] . "</td>";
            echo "<td>" . $row['firstindex'] . "</td>";
            echo "<td>" . $row['lastindex'] . "</td>";
            echo "<td>" . SoDienTieuThu($row['lastindex'], $row['firstindex']) . "</td>";
            echo "<td>" . TinhTien(SoDienTieuThu($row['lastindex'], $row['firstindex'])) . "</td>";
            echo "<td><input type='button' value='Sửa' name ='fix'><input type='button' value='Xóa' name ='delete'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results found";
    }
    ?>

    <input type="button" value="Thêm" name="add">
</body>

</html>