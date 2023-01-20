<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $p)
            <div style="margin: 15px" >

                <div>Nome: {{$p->name}} </div>
                <a href="/alterar/{{$p->id}}"> alterar </a>
                <a href="/deletar/{{$p->id}}"> deletar </a>

            </div>
            <div class="post">Post: {{$p->mensagem}}</div>


    @endforeach

    <a href="/create"> cria Post</a>
</body>
</html>
