<?php
require_once 'config/conexao.php';
require_once 'includes/header.php';

$mensagem = '';
$tipo_mensagem = '';
$produto = null;

// Validar ID
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    echo "<div class='alert alert-danger'>ID do produto inválido!</div>";
    require_once 'includes/footer.php';
    exit;
}

// Buscar produto
try {
    $sql = "SELECT * FROM produtos WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $produto = $stmt->fetch();

    if (!$produto) {
        echo "<div class='alert alert-danger'>Produto não encontrado!</div>";
        require_once 'includes/footer.php';
        exit;
    }
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar produto: " . $e->getMessage() . "</div>";
    require_once 'includes/footer.php';
    exit;
}

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
            $sql = "UPDATE produtos SET nome = ?, fabricante = ?, preco = ?, estoque = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nome, $fabricante, $preco, $estoque, $id]);

            $mensagem = 'Produto atualizado com sucesso!';
            $tipo_mensagem = 'success';

            // Atualizar dados do produto
            $produto = [
                'id' => $id,
                'nome' => $nome,
                'fabricante' => $fabricante,
                'preco' => $preco,
                'estoque' => $estoque
            ];
        } catch (PDOException $e) {
            $mensagem = 'Erro ao atualizar produto: ' . $e->getMessage();
            $tipo_mensagem = 'danger';
        }
    }
}
?>

<h2>✏️ Editar Produto</h2>

<?php if (!empty($mensagem)): ?>
    <div class="alert alert-<?php echo $tipo_mensagem; ?>">
        <?php echo htmlspecialchars($mensagem); ?>
    </div>
<?php endif; ?>

<form method="POST">
    <div class="form-group">
        <label for="nome">Nome do Produto *</label>
        <input type="text" id="nome" name="nome" placeholder="Ex: Dipirona 500mg" value="<?php echo htmlspecialchars($produto['nome']); ?>" required>
    </div>

    <div class="form-group">
        <label for="fabricante">Fabricante *</label>
        <input type="text" id="fabricante" name="fabricante" placeholder="Ex: Genérico" value="<?php echo htmlspecialchars($produto['fabricante']); ?>" required>
    </div>

    <div class="form-group">
        <label for="preco">Preço (R$) *</label>
        <input type="number" id="preco" name="preco" placeholder="Ex: 15.50" step="0.01" value="<?php echo htmlspecialchars($produto['preco']); ?>" required>
    </div>

    <div class="form-group">
        <label for="estoque">Quantidade em Estoque *</label>
        <input type="number" id="estoque" name="estoque" placeholder="Ex: 100" value="<?php echo htmlspecialchars($produto['estoque']); ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">💾 Atualizar Produto</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php require_once 'includes/footer.php'; ?>
