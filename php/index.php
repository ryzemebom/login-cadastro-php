<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background:url(fundo-de-papel-de-parede-colorido-embacado-artistico_58702-8342.avif);
            text-align: center;
            margin-top: 130px;
            background-size: 140%; 
            background-position: center;
            background-repeat: no-repeat;
        }
        h2{
            color: antiquewhite;
        }
        .login-box {
            margin-top: 100px;
            width: 300px;
            margin: auto;
            margin-top: 10px;
            background: linear-gradient(to bottom right, #60478a, #054a7e);
            padding: 80px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgb(0, 17, 255);
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: calc(100%);
            padding: 14px;
            height: 60px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .login-box input[type="submit"] {
            width: 100%;
            padding: 20px;
            border: none;
            height: 60px;
            background-color: #431cc4;
            color: white;
            text-align: center;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 3px;
        }
        .login-box input[type="submit"]:hover {
            background-color: #5c2d7c;
        }
        
    </style>
<body>



<div class="login-box">
        <h2>Login</h2>
        <form action="sucesso.php" method="post">
            <input type="text" name="username" placeholder="Usuário" required><br>
            <input type="password" name="password" placeholder="Senha" required><br>
            <input type="submit" value="Login">
        </form>
        <form action="principal.php" method="post">
        <input type="submit" value="Sair">
        </form>
    </div>
</body>
</html>