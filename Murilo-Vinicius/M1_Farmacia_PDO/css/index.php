<?php
require_once 'config/conexao.php';
require_once 'includes/header.php';

// Buscar todos os produtos
try {
    $sql = "SELECT * FROM produtos ORDER BY nome ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $produtos = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Erro ao buscar produtos: " . $e->getMessage() . "</div>";
    $produtos = [];
}
?>

<h2>📋 Listagem de Produtos</h2>

<?php if (empty($produtos)): ?>
    <div class="alert alert-info">
        Nenhum produto cadastrado. <a href="cadastro.php" class="btn btn-primary">Cadastrar Produto</a>
    </div>
<?php else: ?>
    <!-- Tabela para Desktop -->
    <div class="table-responsive" style="display: none;">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($produto['id']); ?></td>
                        <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                        <td><?php echo htmlspecialchars($produto['fabricante']); ?></td>
                        <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                        <td>
                            <?php 
                            $estoque = $produto['estoque'];
                            $classe = $estoque > 10 ? 'alert-success' : ($estoque > 0 ? 'alert-warning' : 'alert-danger');
                            ?>
                            <span class="alert <?php echo $classe; ?>" style="padding: 0.25rem 0.5rem; display: inline-block;">
                                <?php echo $estoque; ?> un.
                            </span>
                        </td>
                        <td>
                            <a href="editar.php?id=<?php echo $produto['id']; ?>" class="btn btn-warning" style="font-size: 0.9rem;">Editar</a>
                            <a href="excluir.php?id=<?php echo $produto['id']; ?>" class="btn btn-danger" style="font-size: 0.9rem;" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Cards para Mobile -->
    <div class="cards-container">
        <?php foreach ($produtos as $produto): ?>
            <div class="card">
                <div class="card-header">
                    <h3><?php echo htmlspecialchars($produto['nome']); ?></h3>
                </div>
                <div class="card-body">
                    <p><strong>Fabricante:</strong> <?php echo htmlspecialchars($produto['fabricante']); ?></p>
                    <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <p>
                        <strong>Estoque:</strong>
                        <?php 
                        $estoque = $produto['estoque'];
                        $classe = $estoque > 10 ? 'alert-success' : ($estoque > 0 ? 'alert-warning' : 'alert-danger');
                        ?>
                        <span class="alert <?php echo $classe; ?>" style="padding: 0.25rem 0.5rem; display: inline-block;">
                            <?php echo $estoque; ?> unidades
                        </span>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="editar.php?id=<?php echo $produto['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir.php?id=<?php echo $produto['id']; ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
