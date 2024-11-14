<?php
    class Cliente{
       public $id;
       public $nome;
       public $email;
       public $senha;

    function adicionarPDO($conexao){

      $sql = "INSERT INTO clientes(email, nome, senha)
      VALUES (?, ?, ?)";

      $stmt = $conexao -> prepare ($sql);
      $stmt -> bindParam(1, $this->email);
      $stmt -> bindParam(2, $this->nome);
      $stmt -> bindParam(3, $this->senha);
     

      if($stmt->execute()){
          echo"<div style='color:#fa6095' align='center'><h1>CONTATO CADASTRADO </h1> ";
      } else {
        echo"<div style='color:#fa6095' align='center'><h1>CONTATO NÃO CADASTRADO </h1> ";
      }
    }



    public function listarContatos($conexao){
      $listaContatos = [];
      $sql = "SELECT * FROM clientes";
      $rs = $conexao ->query($sql);
      while($contato = $rs ->fetch (PDO::FETCH_OBJ) ){
        array_push($listaContatos, $contato);
      }
      return $listaContatos;
    }
     


    public function exibeContato($conexao, $id){
      $listaContatos = [];
      $sql = "SELECT * FROM clientes WHERE id = :id";
      
      $stmt = $conexao ->prepare($sql);
      while($contato = $stmt ->fetch(PDO::FETCH_OBJ)){
        array_push($listaContatos, $contato);
      }
      return $listaContatos; 
    }



    public function alterarContato($conexao, $id, $nome, $email, $senha)
{
    $sql = "UPDATE clientes SET nome = :nome, email = :email";
   

    if ($senha !== "") {
        $senhaC = md5($senha);
        $sql .= ", senha = :senha";
        $parametros[':senha'] = $senhaC;
    }

    $sql .= " WHERE id = :id";
    $parametros[':id'] = $id;

    $stmt = $conexao->prepare($sql);
    $resultado = $stmt->execute($sql);

    return $sql;
}


    public function logarPDO($conexao, $senha, $email){
      
      $sql ="SELECT * FROM clientes where email = :email AND senha = :senha";
      $sql = $conexao->prepare($sql);
      $sql->bindValue("email", $email);
      $sql->bindValue("senha", md5($senha));
      
      if($sql->rowCount() > 0 ){
        $dado = $sql->fetch();
  
        $_SESSION['idUser'] = $dado['id'];
        
        return true;
        } else{
          return false;
        }
  
      }

    }

  