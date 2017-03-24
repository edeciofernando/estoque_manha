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
        <p> Autor: <?php echo $autor ?> </p>
        <p> Autor: <?= $autor ?> </p>
        <p> Autor: {{$autor}}  </p>        
        
        <hr>
        <ul>
            @foreach ($cidade as $c)
            <li> {{$c}} </li>
            @endforeach
        </ul>
        
        
    </body>
</html>
