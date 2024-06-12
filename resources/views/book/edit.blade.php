<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
</head>
<body>
    <h1>Book edit</h1>
    <br>
    <form action="{{route('book.update',$book->id)}}" method="post">
        @csrf
        @method('put')

        <label>
            Titulo
            <input type="text" name="title" value="{{old('Title:',$book->title)}}">
        </label>
<br>
        <label>
            ISBN
            <input type="text" name="ISBN" value="{{old('ISBN:',$book->ISBN)}}">
        </label>
<br>
<label>
    Editorial
    <input type="text" name="editorial" value="{{old('Editorial:',$book->editorial)}}">
</label>
<br>
<label>
    Paginas
    <input type="number" name="pages" value="{{old('Pages:',$book->pages)}}">
</label>
<br>

<button type="submit">Enviar</button>
    </form>
</body>
</html>