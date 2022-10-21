<?php

    $sql = "INSERT INTO categoria_carros
        (nome_categoria_carro,
        marca

    )VALUES (
        '" . $_POST["nome_categoria_carro"] . "',
        '" . $_POST["marca"] . "')";

    $res = $conn->query($sql);


if ($res == true) {
    print" <script>alert('Cadastrou com sucesso!');</script>";
    print" <script>location.href='?page=listar';</script>";
} else {
    print" <script>alert('Não foi possível cadadastar!');</script>";
    print" <script>location.href='?page=listar';</script>";
}
