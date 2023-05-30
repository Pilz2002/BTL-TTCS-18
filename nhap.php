<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="add.php">
        <table>
            <tr>
                <td>
                    Họ tên: <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Tháng: <input type="int" name="month">
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số đầu: <input type="int" name="firstindex">
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số cuối: <input type="int" name="lastindex">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Thêm" name="add">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>