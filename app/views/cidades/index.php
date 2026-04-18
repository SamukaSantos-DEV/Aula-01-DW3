<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades - Imobiliária</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="list-container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2 style="margin-bottom: 0;">Cidades Cadastradas</h2>
            <a href="index.php?create" class="btn-icon btn-edit" style="padding: 0.5rem 1rem; text-decoration: none;">+ Nova Cidade</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th style="text-align: right;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cidades as $cidade): ?>
                    <tr>
                        <td><span class="badge">#<?= $cidade->getId(); ?></span></td>
                        <td><?= $cidade->getNome(); ?></td>
                        <td><?= $cidade->getEstado(); ?></td>
                        <td>
                            <div class="actions">
                                <a href="index.php?edit&id=<?= $cidade->getId() ?>" class="btn-icon btn-edit" title="Editar">
                                    Editar
                                </a>
                                <a href="#" class="btn-icon btn-delete" title="Excluir">
                                    Excluir
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
