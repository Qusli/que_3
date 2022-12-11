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
        <h1>Log in</h1>
        <p>Login into existing account.</p>
    </section>
    <form id="form">
        <article>
            <span style="display: flex;">
                <input type="text" name="Username" placeholder="Username" class="username"/>
                <input type="text" name="Password" placeholder="Password" class="password" style="margin: 0;"/>
            </span>
            <span style="width:100%;display:flex;justify-content: center; margin-top:64px;">
                <input type="submit" class="submit" value="Log In" style="padding-left:80px;"/>
            </span>
        </article>
    </form>
    <section id="SingUp">
        <h1>Or</h1>
        <p>Log in with...</p>
        <article class="button">
            <a href=""><button class="fecebook">Log in with Apple</button></a>
            <a href=""><button class="google">Log in with Facebook</button></a>
            <a href=""><button class="apple">Log in with Google</button></a>
        </article>
        <a href="/singUp.php">Don’t have an account? Create One.</a>
    </section>
</body>
</html>