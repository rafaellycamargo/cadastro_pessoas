<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <script src="js/jquery-3.5.1.js"></script>
		
		<script>
            //comecando parte de ajax
			$(document).ready(function() {
                //click - executar ao clicar
				$('#estados').click(function() {

                    //guardando valor na variável
					var estados = $('#estados').val();
                    
                    //mandando valor para ajuda.php
					$.post( 'ajuda.php', 
							{parametro: estados},
							function (banco, status) {
								$('#resultado').html(banco);
					});
				});
			});
		</script>
    </head>
    <body>

        <!--criando formulário-->
        <form action="cad_pessoa.php" method="post">

            <!--criando os campos-->
            <label>Nome:</label>
            <input type="text" name="nome" id="nome"/></br>

            <label>Telefone:</label>
            <input type="text" name="telefone" id="telefone"/></br>

            <label>Estado:</label>
            <?php
                //conectando com o banco
                include "inc/cabecalho_con.inc";

                //selecionando id e nome da tabela estados
                $SQL = "SELECT id, nome FROM estados";

                //executando comando 
                $dados_recuperados = mysqli_query($con , $SQL);
                if(mysqli_num_rows($dados_recuperados)>0){
                    echo'<select name="estados" id="estados">
                        <option>Selecione seu Estado</option>';
                    while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
                        echo'<option value="'.$resultado['id'].'">'.$resultado['nome'].'</option>';
                    }
                    echo'</select>';
                    }
                
                //fechando conexao com banco
                mysqli_close($con);

            ?>
        <div id="resultado"></div>
        <!--botão-->
		<br/><input type="submit" value="Cadastrar"/>
    </body>
</html>