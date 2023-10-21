<?php
function obterIdPeloCPF($cpf, $conn) {
   $sql = "SELECT id FROM clientes WHERE cpf_cnpj = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s", $cpf);
   $stmt->execute();
   $result = $stmt->get_result();
   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       $userId = $row["id"];
   } else {
       $userId = null;
   }
   return $userId;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'Localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'form_cliente';

    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $conn = new mysqli($host, $usuario, $senha, $banco);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    } 
   
    $userId = obterIdPeloCPF($cpf, $conn);
    if ($userId !== null) {
       
        $senhaValida = validarSenha($userId, $senha, $conn);
        if ($senhaValida) {
           
            $sql = "INSERT INTO login (id) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                echo "Login bem-sucedido. ID do usuário: " . $userId;
            } else {
                echo "Falha ao salvar o ID do usuário.";
            }
        } else {
            echo "Senha inválida.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
    $conn->close();
}

function validarSenha($userId, $senha, $conn) {
    $sql = "SELECT senha FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senhaArmazenada = $row["senha"];
        return password_verify($senha, $senhaArmazenada);
    }
    return false;
}
?>

