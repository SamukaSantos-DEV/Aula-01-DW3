<?php if (isset($_GET['sucesso'])):  ?>
    <div style="background: #e9e9e9ff; position: fixed; top:0; left:0; right:0; text-align: center; padding:10px;">Cidade salva com sucesso!</div>
<?php endif; ?>
    

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Cidade - Imobiliária</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Nova Cidade</h2>

        <form action="index.php?route=store" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required id="nome" placeholder="Ex: São Paulo">
            </div>

            <div class="form-group">
                <label for="estado">Estado (UF)</label>
                <input type="text" name="estado" required maxlength="2" id="estado" placeholder="Ex: SP">
            </div>
            
            <button type="submit">Salvar Cidade</button>
        </form>
    </div>
</body>
</html>
