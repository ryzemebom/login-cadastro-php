<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(fundo-de-papel-de-parede-colorido-embacado-artistico_58702-8342.avif);
            text-align: center;
            margin-top: 130px;
            display: flex;
            justify-content: center;
            background-size: 140%; 
            background-position: center;
            background-repeat: no-repeat;
        }
        .login-box {
            margin-top: 100px;
            width: 300px;
            margin: auto;
            background: linear-gradient(to bottom right, #60478a, #054a7e);
            padding: 80px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgb(0, 17, 255);
        }
        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: calc(100%);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #3a3a3a;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #431cc4;
            color: white;
            cursor: pointer;
          margin-top: 10px;
            border-radius: 3px;
        }
        .login-box input[type="submit"]:hover {
            background-color: #6e1a98;
        }
    </style>d
<body>



<div class="login-box">
        <h2>Cadastro</h2>
        <form action="sucesso_cadastro.php" method="post">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Senha" required><br>
            <input type="password" name="password" placeholder="Repita a senha" required><br>
            <input type="submit" value="Login">
            </form>
            <form action="index.php" method="post">
            <input type="submit" value="Retornar" >
            </form>
        
    </div>
</body>
</html>