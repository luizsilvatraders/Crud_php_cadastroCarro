<?php

    $sql = "INSERT INTO peca(
        categoria_cod_carro,
        nome_peca,
        descricao_peca,
        valor_peca

    ) VALUES (
        " . $_POST["categoria_cod_carro"] . ",
        '" . $_POST["nome_peca"] . "',
        '" . $_POST["descricao_peca"] . "',
        " . $_POST["valor_peca"] . "
    )";

    $res = $conn->query($sql);

if ($res == true) {
    print"<script>alert('Cadastrou com sucesso!');</script>";
    print"<script>location.href='?page=listar-peca';</script>";
} else {
    print"<script>alert('Não foi possível cadastrar!');</script>";
    print"<script>location.href='?page=listar-peca';</script>";
}
