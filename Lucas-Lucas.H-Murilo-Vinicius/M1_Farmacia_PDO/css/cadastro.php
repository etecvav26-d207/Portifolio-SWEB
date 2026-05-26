<?php
require_once 'config/conexao.php';
require_once 'includes/header.php';

$mensagem = '';
$tipo_mensagem = '';

// Processar formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $fabricante = $_POST['fabricante'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $estoque = $_POST['estoque'] ?? '';

    // Validação básica
    if (empty($nome) || empty($fabricante) || empty($preco) || empty($estoque)) {
        $mensagem = 'Todos os campos são obrigatórios!';
        $tipo_mensagem = 'danger';
    } else {
        try {
            $sql = "INSERT INTO produtos (nome, fabricante, preco, estoque) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nome, $fabricante, $preco, $estoque]);

            $mensagem = 'Produto cadastrado com sucesso!';
            $tipo_mensagem = 'success';

            // Limpar formulário
            $_POST = [];
        } catch (PDOException $e) {
            $mensagem = 'Erro ao cadastrar produto: ' . $e->getMessage();
            $tipo_mensagem = 'danger';
        }
    }
}
?>

<h2>➕ Novo Produto</h2>

<?php if (!empty($mensagem)): ?>
    <div class="alert alert-<?php echo $tipo_mensagem; ?>">
        <?php echo htmlspecialchars($mensagem); ?>
    </div>
<?php endif; ?>

<form method="POST">
    <div class="form-group">
        <label for="nome">Nome do Produto *</label>
        <input type="text" id="nome" name="nome" placeholder="Ex: Dipirona 500mg" value="<?php echo htmlspecialchars($_POST['nome'] ?? ''); ?>" required>
    </div>

    <div class="form-group">
        <label for="fabricante">Fabricante *</label>
        <input type="text" id="fabricante" name="fabricante" placeholder="Ex: Genérico" value="<?php echo htmlspecialchars($_POST['fabricante'] ?? ''); ?>" required>
    </div>

    <div class="form-group">
        <label for="preco">Preço (R$) *</label>
        <input type="number" id="preco" name="preco" placeholder="Ex: 15.50" step="0.01" value="<?php echo htmlspecialchars($_POST['preco'] ?? ''); ?>" required>
    </div>

    <div class="form-group">
        <label for="estoque">Quantidade em Estoque *</label>
        <input type="number" id="estoque" name="estoque" placeholder="Ex: 100" value="<?php echo htmlspecialchars($_POST['estoque'] ?? ''); ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">💾 Cadastrar Produto</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php require_once 'includes/footer.php'; ?>
