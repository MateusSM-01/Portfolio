<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
       body {
           font-family: Arial, sans-serif;
           background-color: #f2f2f2;
           margin: 0;
           padding: 0;
       }
       .container {
           max-width: 600px;
           margin: 20px auto;
           background-color: #fff;
           padding: 40px;
           border: 3px solid #007bff;
           border-radius: 10px;
       }
       .form-group {
           margin-bottom: 20px;
       }
       label {
           display: block;
           font-weight: bold;
       }
       input[type="text"],
       input[type="senha"],
       input[type="id"],
       textarea,
       select,
       input[type="color"] {
           width: 100%;
           padding: 10px;
           border: 1px solid #ccc;
           border-radius: 5px;
           font-size: 16px;
       }
       input[type="submit"],
       input[type="reset"] {
           background-color: #007bff;
           color: #fff;
           padding: 10px 20px;
           border: none;
           border-radius: 5px;
           cursor: pointer;
           font-size: 18px;
       }
</style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="insert_login.php" method="post">
            <div class="form-group">
                <label for="CPF">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="Senha">Senha:</label>
                <input type="senha" id="senha" name="senha" required>
            </div>
            <div class="form-group">
            <input type="hidden" id="id" name="id">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
            </form>
        </form>
    </div>
</body>
</html>