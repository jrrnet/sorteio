<?php

  class Sorteio {
	  
	  private $pdo;
	  
	  // Construtor para conexao com o banco
	  public function __construct() {
		  
		  try {
			  
			  $this->pdo = new PDO("mysql:dbname=sorteio;host=localhost", "root", "");
			  
		  } catch(PDOException $e) {
			  echo "ERRO: ".$e->getMessage();
			  exit;
		  }
	  }
	  
	  // Consulta no banco o usuario sorteado aleatorio
	  public function sortear() {
		  $sql = "SELECT email FROM premio ORDER BY RAND() LIMIT 1";
		  $sql = $this->pdo->query($sql);
		  
		  if($sql->rowCount() > 0) {
			  $sql = $sql->fetch();
			  $email = explode("@", $sql['email']);
			  
			  return $email[0]."@...";			  
		  }
	  }	  
  }