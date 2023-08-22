<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $host = "localhost";
    $dbname = "website";
    $username_db = "root";
    $password_db = "";

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", password_hash($password,PASSWORD_DEFAULT));
        $stmt->execute();

        echo "<h2>Registration Successful</h2>";
        echo "Thank you for registering " . $name . "<br>";
        echo "You'll be redirected to the LOGIN page...";
        header("refresh:3;url=login.html");
    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
}
?>
