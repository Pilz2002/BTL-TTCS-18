<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Đăng ký tài khoản</h2>
    <form method="post" action="reg.php">
        <table>
            <tr>
                <td>
                    Họ và tên: <input type="text" name="Name">
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>
                    Tên đăng nhập: <input type="text" name="UserName">
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>
                    Mật khẩu: <input type="password" name="Pass">
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>
                    Email: <input type="text" name="Email">
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>
                    Giới tính
                    <br>
                    <input type="radio" name="Gender" value="Male"> Nam
                    <input type="radio" name="Gender" value="Fmale"> Nữ
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ: <input type="text" name="Add">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Đăng ký" name="Submit">
                </td>
                <td>
                    <input type="submit" value="Xuất dữ liệu" name="Print">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>