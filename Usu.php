<?php
	class Usu{
		private $nome;
		private $usu;
		private $email;
		private $sen;
		
		function __construct($nome, $usu, $email, $sen){
			$this->nome = $nome;
			$this->usu = $usu;
			$this->email = $email;
			$this->sen = $sen;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getUsu(){
			return $this->usu;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSen(){
			return $this->sen;
		}

		public function setUsu($r){
			$this->usu = $r;
		}
		public function setEmail($r){
			$this->email = $r;
		}
		public function setSenha($r){
			$this->sen = $r;
		}
		public function setNome($r){
			$this->nome = $r;
		}
		
	}
?>