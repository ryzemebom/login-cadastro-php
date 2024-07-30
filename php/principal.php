<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background: url(fundo-de-papel-de-parede-colorido-embacado-artistico_58702-8342.avif);
            text-align: center;
            padding: 100px;
            margin-top: 130px;
            background-size: 140%; 
            background-position: center;
            background-repeat: no-repeat;
        }
        h2{
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
    
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 3px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }  
    .login-box input[type="submit"]{
        width: 100%;
            padding: 10px;
            border: none;
            background-color: #7718d1;
            color: white;
            margin-top: 10px;
            cursor: pointer;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-radius: 3px;
    }
    </style>
<body>
<div class="login-box">
        <h2>Inicio</h2>
        <div class="text">
            <form action="index.php" method="post">
                <input type="submit" value="Login">
                </form> 
                <form action="cadastro.php" method="post">
                <input type="submit" value="Cadastro">
                </form>
          
            </div>
        </div>
    </div>
</body>
</html>