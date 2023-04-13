<?php require_once "components/topo.php"; ?>

    <h2>CARGOS</h2>

    <form action="save_cargo.php" method="post">
        <div class="w-100">
            <label for="cargo">Cadastrar Cargo</label>
            <input type="text" name="nomecargo" id="nomecargo" class="field-form">
        </div>

        <div class="clear"></div>
        <input type="submit" value="Salvar" class="btn">
    </form>

    <?php
        require_once "conexao/db.php";

        $sql = "SELECT * FROM cargos ORDER BY nomecargo";
        $result = $conn->query($sql);
        $totalRegistros = mysqli_num_rows($result);

        if($totalRegistros > 0){
    ?>

    <table class="my-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME CARGO</th>
            </tr>
        </thead>
        <tbody>
            <?php while($registro = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <th><?=$registro["idcargo"]?></th>
                    <th><?=$registro["nomecargo"]?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php } ?>

<?php require_once "components/rodape.php"; ?>