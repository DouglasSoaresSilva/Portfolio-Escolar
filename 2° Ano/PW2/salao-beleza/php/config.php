<?php
// =============================================
// Conexão com o banco de dados (PDO + MySQL)
// Incluído por index.php e agendamento.php via require_once.
// Expõe a variável $pdo pronta para consultas preparadas.
// =============================================

// Credenciais do XAMPP padrão (ajuste se o seu ambiente for diferente)
$host     = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'salao_beleza';

try {
    $pdo = new PDO(
        // DSN: driver + host + banco + charset UTF-8 completo (acentos OK)
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha,
        array(
            // Lança exceção em erro SQL (facilita depurar em vez de falhar em silêncio)
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            // Resultados como array associativo: $linha['cliente']
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // Usa prepares nativos do MySQL (mais seguros contra SQL injection)
            PDO::ATTR_EMULATE_PREPARES   => false
        )
    );
} catch (PDOException $e) {
    // Sem banco não há app: interrompe e exibe o motivo
    die('Erro na conexão com o banco de dados: ' . $e->getMessage());
}
?>
