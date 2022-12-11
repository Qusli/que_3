<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">

    <title>Document</title>
</head>
<body style="background-color: #000000;">
    <? require "struct/header.php"; ?>
    <section id="text_header">
        <h1>Sign up</h1>
        <p>Fill all field for create an account.</p>
    </section>
    <form id="form" method="POST">
        <article>
            <span style="display: block;">
                <input type="text" name="Username" placeholder="Username" class="username"/>
                <input type="text" name="Email Address" placeholder="Email Address" class="email"/>
            </span>
            <span style="display: block;">
                <input type="text" name="Password" placeholder="Password" class="password"/>
                <input type="submit" class="submit" value="Sign Up"/>
            </span>
        </article>
    </form>
    <section id="SingUp">
        <h1>Or</h1>
        <p>Sign up with...</p>
        <article class="button">
            <a href=""><button class="fecebook">Sign up with Apple</button></a>
            <a href=""><button class="google">Sign up with Facebook</button></a>
            <a href=""><button class="apple">Sign up with Google</button></a>
        </article>
        <a href="/login.php">Already have an account? Please Log in.</a>
    </section>
</body>
</html>

<?php

$user = $_POST["Username"];
$password = $_POST["Password"];
$email = $_POST["Email Address"];


?>