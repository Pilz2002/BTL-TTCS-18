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
        $servername = "localhost";
        $username = "duclong1311";
        $password = "123456";
        $dbname = "myDB";

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if ($conn -> connect_error) {
            die("Connection error: " . $conn -> connect_error);            
        }    

        $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            //output result
            while ($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        }
        else {
            echo "0 ressult";
        }
        
        mysqli_close($conn);
    ?>
</body>
</html>