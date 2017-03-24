<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Exemplos: PHP Laravel </title>
    </head>
    <body>
        <h1> Exemplos de View PHP </h1>
        <h2> Uso do Framework Laravel </h2>
        <hr>       

        <hr>
        <ul>
            @foreach ($prods as $p)
            <li> {{$p->nome}} </li>
            @endforeach
        </ul>
        
        
    </body>
</html>
