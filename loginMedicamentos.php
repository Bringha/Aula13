<!-- PROCESSAMENTO DE LOGIN -->
 <?php

session_start();

require_once "config/database.php";


$email = trim($_POST['email']);
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":email", $email);
$stmt->execute();

$usuario = $stmt->fetch();

if($usuario){
    if(password_verify($senha, $usuario['senha'])){
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

        header("Location: medicamentos\index.php");
        exit();
    }else{
        $_SESSION['erro'] = "Senha inválida!";
    }
}else{
    $_SESSION['erro'] = "E-mail inválido!";
}

header("Location: index.php");
exit();
?>