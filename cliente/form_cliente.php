<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Cliente</title>
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
       input[type="email"],
       input[type="tel"],
       input[type="date"],
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
</body>
    <div class="container">
        <h1>Formulário do Cliente</h1>
        <form action="insert_cliente.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select id="estado" name="estado" required>
                    <option value="">Selecione</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf_cnpj">CPF/CNPJ:</label>
                <input type="text" id="cpf_cnpj" name="cpf_cnpj" required>
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input type="text" id="rg" name="rg" pattern="[0-9]{9}" title="O número do RG deve conter 9 dígitos numéricos, sem espaços ou caracteres especiais."  >
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                
               
            <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10}" title="O número de telefone deve conter 10 dígitos numéricos, sem espaços ou caracteres especiais.">
            
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="tel" id="celular" name="celular" pattern="[0-9]{11}" title="O número de telefone deve conter  11 dígitos numéricos, sem espaços ou caracteres especiais." >
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </div>
</body>
</html>