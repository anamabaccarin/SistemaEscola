<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     
        @if(!$erro)
            <h1> O aluno: {{$aluno->nome}} foi cadastrado com sucesso! </h1>        
        @else 
            <h1> Erro ao cadastrar o aluno: {{$aluno->nome}} no banco de dados! </h1>
        @endif
</body>
</html>