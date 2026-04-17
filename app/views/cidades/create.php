<H2>Nova Cidade</H2>

<?php if (isset($_GET['sucesso'])): ?>
    <p style="color: green;">Cidade salva com sucesso!</p>
<?php endif; ?>

<form method="POST" action="">
    <label>Nome:</label><BR>
    <input type="text" name="nome" required>
    <BR><BR>
    <label>Estado</label><BR>
    <input type="text" name="estado" maxlength="2" required>
    <BR><BR>
    <button type="submit">Salvar</button>
</form>