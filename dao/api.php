<?php
class PacienteDao{

    public function inserir(Paciente $pac){
        $url = "http://localhost:3000/pacientes";
        $dados = [
            //"registro" => $pac->getId(),        
            "nome" => $pac->getNome(),
            "telefone" => $pac->getTelefone(),
            "data" => $pac->getData(),
            "periodo" => $pac->getPeriodo(),
            "nomeMae" => $pac->getNomeMae(),
            "examesSolicitados" => $pac->getExamesSolicitados(),
            "Email" => $pac->getEmail(),
            "Data_Nascimento" => $pac->getData_Nascimento()
        ];

        $options = [
            "http" => [
                "header"  => "Content-Type: application/json\r\n",
                "method"  => "POST",
                "content" => json_encode($dados)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result ? json_decode($result, true) : false;
    }

    // Executa SELECT * FROM no banco
    public function read(){
        $url = "http://localhost:3000/pacientes";
        $result = file_get_contents($url);
        $pacList = array();
        $lista = json_decode($result, true);
        foreach ($lista as $pac):
            $pacList[] = $this->listaPaciente($pac);
        endforeach;
        return $pacList;
    }

    // Converter uma linha em obj
    public function listaPaciente($row){
        $paciente = new Paciente();
        $paciente->setRegistro(htmlspecialchars($row['registro']));
        $paciente->setNome(htmlspecialchars($row['nome']));
        $paciente->setTelefone(htmlspecialchars($row['telefone']));
        $paciente->setData(htmlspecialchars($row['data']));
        $paciente->setPeriodo(htmlspecialchars($row['periodo']));
        $paciente->setNomeMae(htmlspecialchars($row['nomeMae']));
        $paciente->setExamesSolicitados(htmlspecialchars($row['examesSolicitados']));
        $paciente->setEmail(htmlspecialchars($row['Email']));
        $paciente->setData_Nascimento(htmlspecialchars($row['Data_Nascimento']));
        return $paciente;
    }

    public function editar(Paciente $pac){
        $url = "http://localhost:3000/pacientes/".$pac->getRegistro();
        $dados = [
            "nome" => $pac->getNome(),
            "telefone" => $pac->getTelefone(),
            "data" => $pac->getData(),
            "periodo" => $pac->getPeriodo(),
            "nomeMae" => $pac->getNomeMae(),
            "examesSolicitados" => $pac->getExamesSolicitados(),
            "Email" => $pac->getEmail(),
            "Data_Nascimento" => $pac->getData_Nascimento(),

        ];

        $options = [
            "http" => [
                "header"  => "Content-Type: application/json\r\n",
                "method"  => "PUT",
                "content" => json_encode($dados)
                //,"ignore_errors" => true
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        
        if ($result === FALSE) {
            return ["erro" => "Falha na requisição PATCH"];
        }

        return json_decode($result, true);
    }

    public function buscarPorRegistro($registro){
        $url = "http://localhost:3000/pacientes/" . urlencode($registro);
        try {
            // @file_get_contents() para evitar warnings automáticos.
            $response = @file_get_contents($url);
            if ($response === FALSE) {
                return null; // ID não encontrado ou erro na requisição
            }
            $data = json_decode($response, true);
            if ($data) {
                return $this->listaPaciente($data);
            }
            return null;
        } catch (Exception $e) {
            echo "<p>Erro ao buscar paciente por ID: </p> <p>{$e->getMessage()}</p>";
            return null;
        }
    }

} // Fecha a classe Dao
?>
