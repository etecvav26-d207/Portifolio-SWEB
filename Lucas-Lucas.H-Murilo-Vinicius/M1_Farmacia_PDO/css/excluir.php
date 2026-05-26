<?php
require_once 'config/conexao.php';

// Validar ID
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    $_SESSION['mensagem'] = 'ID do produto inválido!';
    $_SESSION['tipo_mensagem'] = 'danger';
    header('Location: index.php');
    exit;
}

// Excluir produto
try {
    $sql = "DELETE FROM produtos WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['mensagem'] = 'Produto excluído com sucesso!';
        $_SESSION['tipo_mensagem'] = 'success';
    } else {
        $_SESSION['mensagem'] = 'Produto não encontrado!';
        $_SESSION['tipo_mensagem'] = 'danger';
    }
} catch (PDOException $e) {
    $_SESSION['mensagem'] = 'Erro ao excluir produto: ' . $e->getMessage();
    $_SESSION['tipo_mensagem'] = 'danger';
}

header('Location: index.php');
exit;
?>
