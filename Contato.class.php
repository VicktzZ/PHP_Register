<?php 
class Contato{
	private $pdo;

	function __construct(){
		$dns ="mysql:dbname=contato;host=localhost";
		$dbUser = "root";
		$dbPass = "";

		try {
			$this->pdo = new PDO($dns,$dbUser,$dbPass);
		} catch (Exception $e) {
			echo "<h1>Não consegui Conectar. Tente mais tarde";
		}
	}

	public function adicionar($email, $senha){
		$sql = "INSERT INTO usuarios set email = :n, senha = :s";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":n",$email);
		$sql->bindValue(":s",$senha);

		$value = $sql->execute();
		
	}

	public function getAll(){
		$sqld = "SELECT * FROM usuarios";
		$sql = $this->pdo->query($sql);
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}
	
}








