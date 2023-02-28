<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Javascript - Exemplos</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    </head>
    <body>
        <form name="formExemplo" action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Exemplos javascript</h2>
                        <div class="form-group">
                            <label>Biblioteca String</label>
                            <input type="text" class="form-control" required="" placeholder="Seu nome" name="txtSeuNome">
                        <br />
                         <input type="button" value="Obter informações" class="btn btn-info" name="btObterInformacoes"  > 
                        <h3 id="txtDadosString"></h3>
                        </div>
                        
                        <div class="form-group">
                            <label>Operações com data e hora</label>
                            <h3 id="txtDataHora"></h3>
                        </div>
                        
                         <div class="form-group">
                            <label>Biblioteca matemática (math)</label>
                            <input type="text" class="form-control" required="" placeholder="Informe um valor" name="txtValor">
                            <br />
                         <input type="button" value="Calcular" class="btn btn-info" name="btCalcular"  > 
                         <h3 id="txtCalculosMatematicos"></h3>
                         </div>
                        
                        
                           
                        
                        <div class="form-group">

                            <input type="button" value="Abrir janelas" class="btn btn-info" name="btAbrir"  >
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
