<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cadastro de Clientes </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2> Cadastro de Clientes</h2>
            <form method="post" action="{{action('ExemploController@grava')}}">
                {{ csrf_field() }}                
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail do cliente">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </body>
</html>