<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>            
  
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

         <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required><br>

         <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required><br>

        <label for="codigobarra">Código de Barras:</label>
        <input type="text" name="codigobarra" required><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" required><br>

        <br><br>
      <label for="nomepagamento">Nome Pagamento:</label>
      <select name="nomepagamento" value="<?= $usuario['nomepagamento']; ?>" required><br>
        <option value="mastercard">Cartao MasterCard</option>
        <option value="visa">Cartao Visa</option>
        <option value="pix">PIX</option>
        <option value="dinheiro">Dinheiro</option>
      </select>
      <br><br>

      <label for="tipo">Tipo Pagamento:</label>
      <select name="tipo" value="<?= $usuario['tipo']; ?>" required><br>
        <option value="credito">CRÉDITO</option>
        <option value="debito">DÉBITO</option>
        <option value="pix">PIX</option>
        <option value="vista">À vista</option>
      </select><br><br>


        <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/turma1/xampp/htdocs/aula_09_10_2025/MVC/Controller/UsuarioController.php";
require_once "C:/turma1/xampp/htdocs/aula_09_10_2025/MVC/DB/DataBase.php";

$UsuarioController = new UsuarioController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $quantidade = $_POST['quantidade'];
  $codigobarra = $_POST['codigobarra'];
  $preco = $_POST['preco'];
  $nomepagamento = $_POST['nomepagamento'];
  $tipo = $_POST['tipo'];


  $UsuarioController -> cadastrar( $nome, $descricao, $quantidade, $codigobarra, $preco,$nomepagamento,$tipo);
  header("Location: ../../index.php");
}
 


?>