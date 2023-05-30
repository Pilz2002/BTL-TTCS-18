<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "duclong1311";
    $password = "123456";
    $dbname = "myDB";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }
    echo "Connect successfully";

    ?>

    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <?php
    //define variables
    $NameErr = $CountryErr = $AddressErr = $CityErr = $StateErr = $PostalCodeErr = $PhoneNumberErr = "";
    $Name = $Country = $Address = $City = $State = $PostalCode = $Phone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $NameErr = "Name is required";
        } else {
            $name = test_input($_POST["Name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $NameErr = "Only letters and whitespaces are allowed";
            }
        }
        if (empty($_POST["Country"])) {
            $CountryErr = "Country is required";
        } else {
            $Country = test_input($_POST["Country"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $Country)) {
                $CountryErr = "Only letters and whitespaces are allowed";
            }
        }
    }
    ?>

    <h2> PHP form </h2>
    <input type="radio" name="account" <?php ?> value="Company_account"> Company account
    <input type="radio" name="account" <?php ?> value="Personal_account"> Personal account

    <p><span class="error">* require field</span></p>
    <form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Full Name: <input type="text" name="name">
        <span class="error">*<?php echo $NameErr; ?></span>
        <br><br>
        Country: <input type="text" name="Country">
        <span class="error">*<?php echo $CountryErr; ?></span>
        <br><br>
        Address: <input type="text" name="address">
        <span class="error">*<?php echo $AddressErr; ?></span>
        <br><br>
        City: <input type="text" name="city">
        <span class="error">*<?php echo $CityErr; ?></span>
        <br><br>
        State/Province or Region: <input type="text" name="state">
        <span class="error">*<?php echo $StateErr; ?></span>
        <br><br>
        Postal Code: <input type="text" name="postalCode">
        <span class="error">*<?php echo $PostalCodeErr; ?></span>
        <br><br>
        Phone Number: <input type="text" name="phoneNumber">
        <span class="error">*<?php echo $PhoneNumberErr; ?></span>
        <br><br>
        <input type="submit" value="submit" name="submit">

        <?php
        // prepare a binding
        $sql = "INSERT INTO profile (Full_Name, Country, Address, City, State, Postal_Code, Phone_Number)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // set parameters and execute
        $Name = $_POST['Name'];
        $Country = $_POST['Country'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $PostalCode = $_POST['PostalCode'];
        $Phone = $_POST['Phone'];

        $stmt->bind_param("sssssss", $Name, $Country, $Address, $City, $State, $PostalCode, $Phone);
        $stmt->execute();

        echo "New record created successfully";

        $stmt->close();
        $conn->close();
        ?>

</body>

</html>