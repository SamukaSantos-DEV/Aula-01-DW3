<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cidade - Imobiliária</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Editar Cidade</h2>

        <form action="index.php?route=update" method="post">
            <input type="hidden" name="id" value="<?= $cidade->getId(); ?>">
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required id="nome" value="<?= $cidade->getNome(); ?>">
            </div>

            <div class="form-group">
                <label for="estado">Estado (UF)</label>
                <input type="text" name="estado" required maxlength="2" id="estado" value="<?= $cidade->getEstado(); ?>">
            </div>
            
            <button type="submit">Atualizar Cidade</button>
            
            <div style="margin-top: 1.5rem; text-align: center;">
                <a href="index.php" style="color: var(--text-muted); text-decoration: none; font-size: 0.875rem;">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
