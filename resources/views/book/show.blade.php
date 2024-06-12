<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Book</title>
</head>
<body>
    <h1>Book show</h1>
    <br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>ISBN</th>
            <th>Editorial</th>
            <th>Paginas</th>
            
        </tr>
        <tr>
            <td>{{$book->title}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->editorial}}</td>
            <td>{{$book->pages}}</td>
        </tr>
    </table>
</body>
</html>