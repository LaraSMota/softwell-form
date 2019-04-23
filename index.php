<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <!-- 1ª parte bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>"Ficha do Usuário"</title>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#"><img src="img/logo.png" width="150"></a>
        </nav>
        
        <h1 id="titulo">Ficha de Detalhamento de Perfil do Candidato</h1>

        <!-- Formulário -->
        <form method="POST" action="processa.php">

            <!-- 1ª linha: Nome e E-mail -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6" class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>                 
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label for="email">E-mail: </label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                    </div>
                </div>

                <!-- 2ª linha: Telefone e Data de nascimento -->
                <div class="row">
                    <div class="col-md-6" class="form-group">
                        <label for="telefone">Telefone: </label>
                        <input type="tel" class="form-control" name="telefone" required>
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label for="data-nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control" name="data-nascimento" required><br>
                    </div>
                </div>

                <!-- 3ª linha: Sexo e Quantidade de Fihos -->
                <div class="row">
                    <div class="col-md-6" class="form-group">
                        <label for="sexo">Sexo: </label>
                        <select class="form-control" name="sexo" required>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Não binário">Não binário</option>
                            <option value="Prefiro não declarar">Prefiro não declarar</option>
                        </select>
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label for="filhos">Filhos: </label>
                        <input type="number" class="form-control" name="filhos" required><br>
                    </div>
                </div>

                <!-- 4ª linha: Estado Civil e Renda Familiar -->
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-check-label" for="estado-civil">Estado Civil: </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado-civil" value="Solteiro" checked="checked">
                            <label class="form-check-label" for="estado-civil">Solteiro</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado-civil" value="Casado">
                            <label class="form-check-label" for="estado-civil">Casado</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado-civil" value="Divorciado">
                            <label class="form-check-label" for="estado-civil">Divorciado</label>
                        </div>
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label for="renda">Renda familiar: </label>
                        <select class="form-control" name="renda" required>
                            <option value="" selected="selected">Selecione</option>
                            <option value="até um salário minimo">até um salário minimo</option>
                            <option value="entre um e três salários minimo" >entre um e três salários minimo</option>
                            <option value="mais de três salários minimos" >mais de três salários minimos</option>
                        </select>
                    </div>
                </div>

                <!-- 5ª linha: Atividades de Lazer e Esportes -->
                <div class="row">
                    <div class="col-md-6"  class="form-group">
                        <label for="atividades-lazer">Atividades de Lazer: </label>
                        <textarea class="form-control" name="atividades-lazer" rows="3" required></textarea>
                    </div>
                    <div class="col-md-6" class="form-group">
                        <label for="esportes">Esportes: </label>
                        <textarea class="form-control" name="esportes" rows="3" required></textarea>
                    </div>
                </div>
            </div>
        
            <!-- Mensagem de erro ou sucesso ao tentar registrar no banco (processa.php) -->
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>

            <!-- Botão de Enviar -->
            <div class="container" id="submit-button">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
        </form>

        <!-- Rodape -->
        <footer>
            Softwell Solutions<br>
            +55 (71) 2108 3800<br>
            Parque Tecnológico da Bahia - Salas 204, 205 e 206 CEP: 41.730-101 Salvador
        </footer>

        <!-- 2ª parte bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>