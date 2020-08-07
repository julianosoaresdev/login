<?php

namespace CR\Login;


use CR\Helper\Helper;
use CR\Conexao\Conexao;


Class Login extends Conexao 
{
	public function logar($login, $pw)
	{
		$Helper = new Helper();
		$data = [
			'vlogin' => $login
		];
		$sql = "SELECT * FROM `login` WHERE user = :vlogin";
		$stmt = $this->db->prepare($sql);
		$stmt->execute($data);
		$retorno = 0;
		if($stmt->rowCount() > 0){
			foreach($stmt->fetchAll() as $COL){
				if (password_verify($pw, $COL["password"])){
					$retorno = 1;
					$_SESSION["LOGADO"] = "OK";
				}
			}
		}
		return $retorno;
	}
	
}

?>