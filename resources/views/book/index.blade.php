<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Book</title>
</head>
<body>
    <h1>Index Book</h1>
    <br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>ISBN</th>
            <th>Editorial</th>
            <th>Paginas</th>
            <th>Mostrar</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        <tr>
            @foreach ($books as $book)
                <td>{{$book->title}}</td>
                <td>{{$book->ISBN}}</td>
                <td>{{$book->editorial}}</td>
                <td>{{$book->pages}}</td>
                <td><form action="{{route('book.show',$book->id)}}" method="get">
                    @csrf
                    <button type="submit">Show</button>
                </form></td>
                <td><form action="{{route('book.edit',$book->id)}}" method="get">
                    @csrf
                    <button type="submit">Editar</button>
                </form></td>
                <td><form action="{{route('book.destroy',$book->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form></td>
            
        </tr>
        @endforeach
    </table>
    <br>
    <form action="{{route('book.create')}}" method="GET">
        @csrf
        <button type="submit">Crear</button>
    </form>
</body>
</html>