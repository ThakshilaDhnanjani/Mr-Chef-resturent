<?php
 session_start();
 require_once("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
     * {
    padding: 0px;
    margin: 0px;
}
body {
    background-image: url(https://t4.ftcdn.net/jpg/06/29/46/85/360_F_629468587_V0B6P2JRCXqUq3WsG5OugBFU5nv4x92a.jpg);
}
header {
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 15vh;
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
	repeat:none;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-image: url(https://cdn2.vectorstock.com/i/1000x1000/02/01/restaurant-background-vector-400201.jpg);
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}
.info_div {
    letter-spacing: 1px;
}
.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
}
    </style>
</head>

<body>
    <header>
        <img src="logo2.png" height="100px" width="100px">
        <h1>mr.chef</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="code_reg.php" method="POST">
            <div class="form_div">
                <label>Username</label>
                <input class="field_class" name="username" type="text" placeholder="username" required>
                <label>E-mail</label>
                <input class="field_class" name="email" type="email" placeholder="Email" required>
                <label>Password:</label>
                <input id="pass" class="field_class" name="password" type="password" placeholder="password" required>
                <label>Confirm Password:</label>
                <input id="confirm_pass" class="field_class" name="cpassword" type="password" placeholder="password" required>
                <button class="submit_class" type="submit" name="signup">signup</button>
            </div>
            <div class="info_div">
                <p><span style="color: #fff;">Already have an account</span><a href="login.php">Log In</a></p>
            </div>
        </form>
    </main>

</body>
</html>
