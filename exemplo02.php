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
                            <label>Nome completo</label>
                            <input type="text" class="form-control" required="" placeholder="Seu nome" name="txtNome">
                        </div>
                        
                        <div class="form-group">
                            <label>Nome completo - Conferência</label>
                            <input type="text" class="form-control" required="" placeholder="Seu nome" name="txtNomeConferir">
                        </div>
                        
                           <div class="form-group">
                            <label>Login</label>
                            <input type="text" class="form-control" required="" placeholder="Seu login" name="txtLogin">
                        </div>
                        
                           <div class="form-group">
                            <label>Senha</label>
                            <input type="text" class="form-control" required="" placeholder="Sua senha" name="txtSenha">
                        </div>
                        
                           <div class="form-group">
                            <label>Confirmar senha</label>
                            <input type="text" class="form-control" required="" placeholder="Confirmar senha" name="txtSenhaConfirmar">
                        </div>
                        
                           <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control" required="" placeholder="CPF" name="txtCPF">
                        </div>
                        
                           <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" required="" placeholder="Telefone" name="txtTelefone">
                        </div>
                        
                        <div class="form-group">
                            
                            <input type="checkbox"   name="checkAceito"> Aceito os termos do contrato.
                        </div>
                        
                        <div class="form-group">

                            <input type="button" value="Confirmar" class="btn btn-info" name="btCalcular"  >
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
