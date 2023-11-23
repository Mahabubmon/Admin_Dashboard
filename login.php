<?php
require_once 'config.php';
if (isset($_POST["login"])) {
    if ($_POST["userName"] == "" or $_POST["password"]) {
        alert("input cannot be empty");
    } else {
        $username = trim($_POST["userName"]);
        $password = strip_tags(trim($_POST["password"]));
        $query = $db->prepare("SELECT * FROM login WHERE email=? AND password=?");
        $query->execute(array("email" => $username, "password" => $password));
        $control = $query->fetch(PDO::FETCH_ASSOC);
        if ($control > 0) {
            $_SESSION["userName"] = $username;
            header("Location:index.php");


        }
        alert("incorrect Password");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="text" id="loginform" method="post">
            <input class="input1" id="userName" type="text" placeholder="Username" name="userName" required>
            <input class="input2" id="pass" type="password" placeholder="Password" name="password" required>
            <p>Forgot Password</p>
            <input type="submit" name="login" id="submitLogin" value="Login" onclick="loginForm()">
            <p>Not A Mamber? <span>register</span></p>
        </div>
    </div>

    <script src="main.js"></script>

</body>

</html>

<script>

    function loginForm() {

    }

</script>