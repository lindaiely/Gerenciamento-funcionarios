<?php require_once "components/topo.php"; ?>

    <h2>CADASTRAR FUNCIONÁRIO</h2>

    <form action="">
        <div class="w-100">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="field-form">
        </div>
        <div class="w-50">
            <label for="cpf">Cpf</label>
            <input type="text" name="capf" class="field-form">
        </div>
        <div class="w-50">
            <label for="email">Email</label>
            <input type="text" name="email" class="field-form">
        </div>

        <div class="clear"></div>

        <div class="w-50">
            <label for="dtnascimento">Data de Nascimento</label>
            <input type="text" name="dtnascimento" class="field-form">
        </div>
        <div class="w-50">
            <label for="salario">Salário</label>
            <input type="text" name="salario" class="field-form">
        </div>

        <div class="clear"></div>

        <div class="w-50">
            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo" class="field-form">
                <option value=""></option>
            </select>
        </div>
        <div class="w-50">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="field-form">
        </div>
        
        <div class="clear"></div>

        <div class="w-50">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="field-form">
        </div>
        <div class="w-50">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="field-form">
                <option value=""></option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MT">MT</option>
                <option value="MG">MG</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>
        </div>

        <div class="clear"></div>
        <input type="submit" value="Cadastrar Funcionário" class="btn">
    </form>

<?php require_once "components/rodape.php"; ?>