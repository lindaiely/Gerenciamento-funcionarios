<?php require_once "components/topo.php"; ?>

    <h2>BUSCAR FUNCIONÁRIO</h2>

    <form action="">
        <div class="w-50">
            <label for="nome">Nome do Funcionário:</label>
            <input type="text" name="nome" id="nome" class="field-form">
        </div>
        <div class="w-50">
            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo" class="field-form">
                <option value=""></option>
            </select>
        </div>
        <div class="clear"></div>
        <input type="submit" value="Buscar" class="btn">
    </form>

    <table class="my-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>SALÁRIO</th>
                <th>CARGO</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> - </th>
                <th> - </th>
                <th> - </th>
                <th> - </th>
                <th> - </th>
            </tr>
        </tbody>
    </table>

<?php require_once "components/rodape.php"; ?>