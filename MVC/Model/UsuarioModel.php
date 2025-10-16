<?php
class UsuarioModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarTodos(): array {
        $stmt = $this->pdo->query('SELECT * FROM produtos');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function buscarUsuario($id): array {
        $stmt = $this->pdo->query("SELECT * FROM produtos WHERE id = $id");
        return $stmt->fetch  (PDO::FETCH_ASSOC);
    }






    public function cadastrar($nome,$descricao,$quantidade,$codigobarra,$preco,$nomepagamento,$tipo){
$sql = "INSERT INTO produtos (nome, descricao, quantidade, codigobarra, preco,nomepagamento,tipo) VALUES (:nome, :descricao, :quantidade, :codigobarra, :preco,:nomepagamento,:tipo)";
$stmt = $this->pdo->prepare($sql);
     $stmt->execute([
    ':nome' => $nome,
     ':descricao' => $descricao,
      ':quantidade' => $quantidade,
      ':codigobarra' => $codigobarra,
      ':preco' => $preco,
      ':nomepagamento' => $nomepagamento,
      ':tipo' => $tipo
]);


    }


   public function editar($nome,$descricao,$quantidade,$codigobarra,$preco,$nomepagamento,$tipo,$id){
$sql = "UPDATE produtos SET nome=?, descricao=?, quantidade=?, codigobarra=?, preco=?, nomepagamento=?, tipo=? WHERE id=?";
$stmt = $this->pdo->prepare($sql);
return $stmt->execute([$nome,$descricao,$quantidade,$codigobarra,$preco,$nomepagamento,$tipo,$id]);


    }



    public function deletar($id){
$sql = "DELETE FROM produtos WHERE id = ?";
$stmt = $this->pdo->prepare($sql);
return $stmt->execute([
   $id
]);  }


}



?>