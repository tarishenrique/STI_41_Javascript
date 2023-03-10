<!DOCTYPE html>

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
        <script src="./js/funcoes.js" type="text/javascript"> </script>
    </head>
    <body>
        <form name="formExemplo" action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Exemplos javascript</h2>
                        <div class="form-group">
                            <label>Nímero 1</label>
                            <input type="text" class="form-control" required="" placeholder="Número 1" name="txtNumero1">
                        </div>
                        
                        <div class="form-group">
                            <label>Número 2</label>
                            <input type="text" class="form-control" required="" placeholder="Número 2" name="txtNumero2">
                        </div>
                        
                         <div class="form-group">
                            <label>Resultados</label>
                            <input type="text" class="form-control" required="" placeholder="Resultado" name="txtResultado" >
                        </div>
                         <div class="form-group">
                            <label>ResultadosSoma</label>
                            <input type="text" class="form-control" required="" placeholder="Resultado2" name="resultadoSoma">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="checkAceito" /> Aceito os Termos de Uso
                        </div>
                        
                        <div class="form-group">
                            <input type="button" value="Calcular" class="btn btn-info" name="btAbrir" onclick="validar();" >
                        </div>

                        <div class="form-group">
                            <input class="btn btn-danger" type="button" value="Modificar" name="btModificar" onclick="modificar();">
                            <h1 id="atencao" ></h1>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
