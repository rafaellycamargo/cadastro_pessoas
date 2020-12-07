<?php
    include("inc/cabecalho_con.inc");

    $parametro = $_POST['parametro'];

    //criando select para a cidade
    $select = "<label>Cidade:</label>
                <select name=\"cid\" id=\"cid\">
                <option>Selecione sua Cidade</option>";

    //if - parametro não for vazio, então deve entrar no banco e selecionar as cidades com id_estado igual ao id do estado escolhido
    if($parametro !="") {
        $SQL = "SELECT id, nome FROM cidades WHERE id_estado = '$parametro%'";
        $resultado = mysqli_query($con, $SQL);
        while(($salva = mysqli_fetch_assoc($resultado)) != null) {
            $select .= '<option value="'.$salva['id'].'">'.$salva['nome'].'</option>';
        }
    }
    $select .="</select>";
    echo $select;
    mysqli_close($con);
?>