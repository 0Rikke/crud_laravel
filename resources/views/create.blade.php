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
    <form action="/store" method="post">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
        <label for="nome">Nome</label>
        <input name="name" type="text">
        <label for="mensagem">Mensagem:</label>
        <input name="mensagem" type="text">
        
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
