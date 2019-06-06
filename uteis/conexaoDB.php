<?
	class conexaoDB{
		//propriedades
		private $host     = 'localhost';
		private $user     = 'root';
		private $senha    = '';
		private $database = 'umcplay';

		public function conecta_db(){
			//cria conexão
			$conexao = mysqli_connect($this->host, $this->user, $this->senha, $this->database);

			//ajustar o charset de comunicação entre a aplicação e o BD
			mysqli_set_charset($conexao, 'utf8');

			//verificar se houve erro de conexão
			if (mysqli_connect_errno()) {
				echo 'Erro ao tentar conectar com o banco de dados!<br> Erro: ' .mysqli_connect_error();
			}

			return $conexao;
		}  
	}
?>