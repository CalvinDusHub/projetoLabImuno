    <?php

    require_once __DIR__ . '/../model/Pessoa.php';
    require_once __DIR__ . '/ConnectionFactory.php';

    class PessoaDao {

        public function inserir(Pessoa $pessoa) {
            try {
                $sql = "INSERT INTO pessoa (nome, Data_nascimento, telefone, email) 
                        VALUES (:nome_completo, :Data_nascimento, :telefone, :email)";

                $con = ConnectionFactory::getConnection()->prepare($sql);
                $con->bindValue(":nome_completo", $pessoa->getNome());
                $con->bindValue(":Data_nascimento", $pessoa->getData_Nascimento());
                $con->bindValue(":telefone", $pessoa->getTelefone());
                $con->bindValue(":email", $pessoa->getEmail());

                return $con->execute();
            } catch (PDOException $ex) {
                echo "<p>Erro ao inserir pessoa: {$ex->getMessage()}</p>";
                return false;
            }
        }

        public function read() {
            try {
                $sql = "SELECT * FROM pessoa";
                $stmt = ConnectionFactory::getConnection()->query($sql);
                $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $pessoaList = [];

                foreach ($lista as $linha) {
                    $pessoaList[] = $this->mapearPessoa($linha);
                }

                return $pessoaList;
            } catch (PDOException $ex) {
                echo "<p>Erro ao buscar pessoas: {$ex->getMessage()}</p>";
                return [];
            }
        }

        public function buscaPorId($id) {
            try {
                $sql = "SELECT * FROM pessoa WHERE id = :id";
                $con = ConnectionFactory::getConnection()->prepare($sql);
                $con->bindValue(":id", $id);
                $con->execute();
                $linha = $con->fetch(PDO::FETCH_ASSOC);

                if (!$linha) return null;

                return $this->mapearPessoa($linha);
            } catch (PDOException $ex) {
                echo "<p>Erro ao buscar pessoa: {$ex->getMessage()}</p>";
                return null;
            }
        }

        private function mapearPessoa($linha) {
            $pessoa = new Pessoa(
                $linha['nome'],
                $linha['Data_nascimento'],
                $linha['telefone'],
                $linha['email']
            );
            return $pessoa;
        }
    }
