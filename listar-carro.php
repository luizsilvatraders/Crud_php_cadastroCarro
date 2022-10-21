<h1>Listar Carros</h1>

<?php

    $sql = "SELECT * FROM categoria_carros";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print"<p>Encontrou <b>$qtd</b> Resultado(s)";

if ($qtd > 0) {
    print "<table class='table table-borderes table-striped table-hover' >";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Modelo do Carro</th>";
    print "<th>Marca do Carro</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->cod_carro . "</td>";
        print "<td>" . $row->nome_categoria_carro . "</td>";
        print "<td>" . $row->marca . "</td>";
        print "</tr>";
    }
    print"</table>";
} else {
    print"<p>Não encontrou resultados! </p>";
}
