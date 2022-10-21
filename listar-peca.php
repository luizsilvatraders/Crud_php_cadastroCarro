<h1>Listar Peças</h1>

<?php

    $sql = "SELECT * FROM peca AS p
            INNER JOIN categoria_carros AS c
            ON p.categoria_cod_carro = c.cod_carro";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print"<p>Encontrou <b>$qtd</b> Resultado(s)";

if ($qtd > 0) {
    print "<table class='table table-borderes table-striped table-hover' >";
    print "<tr>";
    print "<th>#ID Peça</th>";
    print "<th>#ID Carro</th>";
    print "<th>Carro</th>";
    print "<th>Peça</th>";
    print "<th>Descrição</th>";
    print "<th>Valor</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->cod_peca . "</td>";
        print "<td>" . $row->cod_carro . "</td>";
        print "<td>" . $row->nome_categoria_carro . "</td>";
        print "<td>" . $row->nome_peca . "</td>";
        print "<td>" . $row->descricao_peca . "</td>";
        print "<td>" . $row->valor_peca . "</td>";
        print "</tr>";
    }
    print"</table>";
} else {
    print"<p>Não encontrou resultados! </p>";
}
