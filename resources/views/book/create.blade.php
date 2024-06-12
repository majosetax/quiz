<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book</title>
</head>
<body>

    <h1>Create Book</h1>
    <br>
    <form action="{{route('book.store')}}" method="POST">

@csrf

<label>
    Titulo
    <input type="text" name="title">
</label>
<br>
<label>
    ISBN
    <input type="text" name="ISBN">
</label>
<br>
<label>
    Editorial
    <input type="text" name="editorial">
</label>
<br>
<label>
    Paginas
    <input type="number" name="pages">
</label>
<br>
<button type="submit">Enviar</button>
    </form>
</body>
</html>