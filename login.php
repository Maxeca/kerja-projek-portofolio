<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>admin</title>
    <style>*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

body{
    background-color: #092131;
    color: white;
}

.login{
    margin: auto;
    align-items: center;
    padding: 20%  25%;
    display: flex;
}

.login b{
    margin-right: 15px;
}
.login-box h1{
    font-size: 50px;
    text-align: center;
    padding-bottom: 15px ;
}

.login-box input{
    width: 700px;
    height: 40px;
    padding: 0 20px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid purple;
}

.login-box input:focus{
    border: 2px solid purple;
    outline: 0;
}

.login-box button{
    border: 0;
    padding: 10px 30px;
    background-color: purple;
    font-size: 18px;
    border-radius: 5px;
    color: #092131;
    text-decoration: none;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 0 10-x rgba(0,0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
}
.login-box button:hover {
box-shadow: 0 0 20px purple;
-webkit-transform: scale(1.1);
transform: scale(1.1);
}</style>

</head>
<body>
<form action="proses-login.php" method="POST">
    <div class ="login">
        <div class="login-box">
            <h1>LOGIN</h1>
            <form>

                <label for="admin"><b>username</b></label>
                <input type="text" placeholder="Name/Nickname. . ." name="nama" required>

                <div class="password">
                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>
                <button type="submit" name="submit">login</button>
            </form>
        </div>
    </div>
</form>
</body>