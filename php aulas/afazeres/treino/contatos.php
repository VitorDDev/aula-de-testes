<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geranciador de contatos</title>
    <!-- Incluindo o arquivo CSS -->
    <link rel="stylesheet" href="C:\laragon\www\php aulas\afazeres\template.css">
</head>
<body>
    <h1>Gerenciador de Contatos</h1>

    <!-- Formulário para adicionar novo contato -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>WhatsApp:</label>
        <input type="text" name="whatsapp"><br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade"><br><br>

        <label>UF:</label>
        <input type="text" name="uf" maxlength="2"><br><br>

        <button type="submit">Adicionar Contato</button>
    </form>

    <hr>

    <!-- Lista de contatos cadastrados -->
    <h2>Lista de Contatos</h2>
<?php include "template.php"; ?>
</body>
</html>