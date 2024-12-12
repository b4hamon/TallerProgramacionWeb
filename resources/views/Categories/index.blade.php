<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Author</h1>
    <ul>
        <div>
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">

                <label for="description">Descripcion</label>
                <input type="text" name="description" id="description">
                <input type="submit" value="Guardar">
            </form>
        </div>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach

        @foreach ($categories as $category)
        <li>{{ $category->description }}</li>
        
    @endforeach
    </ul>
</body>
</html>