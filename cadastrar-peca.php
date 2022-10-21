<h1>Cadastrar Peças</h1>
<form action="?page=salvar-peca" method="POST">
    <div class="mb-3">
        <label>Modelo do Carro</label>
        <select name="categoria_cod_carro" class="form-control">
            <!--chave estrangeira-->
            <option>Escolha Modelo do Carro</option>
            <?php
                $sql = "SELECT * FROM categoria_carros";
                $res = $conn->query($sql);
            while ($row = $res->fetch_object()) {
                print "<option value='" . $row->cod_carro . "'>";
                print $row->nome_categoria_carro . "</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Nome da Peça</label>
        <input type="text" name="nome_peca" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição da Peça</label>
        <input type="text" name="descricao_peca" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor da Peça</label>
        <input type="text" name="valor_peca" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Efetuar Cadastro</button>
    </div>
</form>