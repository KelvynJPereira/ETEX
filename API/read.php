<?php

// Envio de header
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");

// Inclusao do banco de dados e criacao do objeto
require __DIR__ . '/../.config/Database.class.php';
$db_connection = new Database();
$conn = $db_connection->dbConexao();

// Verificacao de parametro
if (isset($_GET['id'])) {
    //IF HAS ID PARAMETER
    $alunos_id = filter_var($_GET['id'], FILTER_VALIDATE_INT, [
        'opcoes' => [
            'default' => 'todos_alunos',
            'min_range' => 1
        ]
    ]);
} else {
    $alunos_id = 'todos_alunos';
}

// Criacao da query
// Se enviado um parametro, mostra o aluno, caso nao, mostra todos os alunos
$sql = is_numeric($alunos_id) ? "SELECT * FROM `alunos` WHERE id_aluno='$alunos_id'" : "SELECT * FROM `alunos`";

$stmt = $conn->prepare($sql);

$stmt->execute();

// Verifica a quantidade de alunos encontrados
if ($stmt->rowCount() > 0) {
    // Criacao do array de alunos
    $alunos_array = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $dados_alunos = [
            'id' => $row['id_aluno'],
            'matricula' => $row['matricula_aluno'],
            'nome' => $row['nome_aluno'],
            'sobrenome' => $row['sobrenome_aluno'],
            'nascimento' => $row['nascimento_aluno'],
            'sexo' => $row['sexo_aluno'],
            'cor' => $row['cor_aluno'],
            'cpf' => $row['cpf_aluno'],
            'email' => $row['email_aluno'],
            'numero_endereco' => $row['numero_endereco_aluno'],
            'rua_endereco' => $row['rua_endereco_aluno'],
            'bairro_endereco' => $row['bairro_endereco_aluno'],
            'cidade_endereco' => $row['cidade_endereco_aluno'],
            'estado_endereco' => $row['estado_endereco_aluno'],
            'pais_endereco' => $row['pais_endereco_aluno'],
            'cep_endereco' => $row['cep_endereco_aluno'],
            'foto_aluno' => $row['foto_aluno']      
        ];
        // Insercao array de alunos e dados 
        array_push($alunos_array, $dados_alunos);
    }
    // Exibicao de dados em formato json
    echo json_encode($alunos_array);
} else {
    // Se nao parametro nao encontrado, exibe mensagem
    echo json_encode(['message' => 'Aluno não encontrado!']);
}
?>