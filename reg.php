<?php

require 'connect.php';

if (isset($_POST['Submit'])) {    
    // validate input data
    if (empty($name) || empty($username) || empty($password) || empty($email) || empty($gender) || empty($address)) {
        echo "Please fill in all fields.";
        exit;
    }

    $name = $_POST['Name'];
    $username = $_POST['UserName'];
    $password = $_POST['Pass'];
    $email = $_POST['Email'];
    $gender = $_POST['Gender'];
    $address = $_POST['Add'];

    // check if username already exists
    $checkUserSql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkUserSql);
    if ($result->num_rows > 0) {
        echo "Username already exists.";
        exit;
    }
    // hash password for security
    $hashedPassword = md5($password);

    // prepare and execute insert statement
    $insertsql = "INSERT INTO users (`fullname`, `username`,`password`,  `gender`, `email`, `address`) 
        VALUES('$name', '$username', '$hashedPassword', '$gender','$email','$address') ";

    if ($conn->query($insertsql) === true) {
        echo "add a new record sucessfully";
    } else {
        echo "error" . $insertsql . "<br>" . $conn->error;
    }
}

if (isset($_POST['Print'])) {
    // Print the data in table   
    $PrintSql = "SELECT * FROM users";
    $result = mysqli_query($conn, $PrintSql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>User ID</th><th>Full Name</th><th>User Name</th><th>Gender</th><th>Email</th><th>Address</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".  $row['Uid'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results found";
    }
}
