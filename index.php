<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3 Wiktor Nowicki</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="title-box">
            <h1>Logowanie</h1>
        </div>
        <div class="input-box">
            <form method="post">
                <input name="login" id="login" type="text" required>
                <input name="password" id="password" type="password" required>
                <button type="sumbit" id="button-login">Zaloguj</button>
            </form>
        </div>
    </div>

<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "praktyki";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if ($conn->connect_error) {
        die($conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $conn->real_escape_string($_POST["login"]);
        $haslo = $conn->real_escape_string($_POST["password"]);
        $query = "SELECT * FROM users WHERE login='$login' AND password='$haslo'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<script type='text/javascript'>alert('Zalogowano!');</script>";
        }else {
            echo "<script type='text/javascript'>alert('Zły login albo hasło!');</script>";
        }
        $conn->close();
    }
?>

</body>
</html>