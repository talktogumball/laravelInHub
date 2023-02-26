<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listes des notes</h1>
    <input type="text" name="noterecherche" id="">
    <input type="button" value="Rechercher">
    <table border="1">
        <thead><th>Name</th><th>notes</th></thead>
@foreach ($notes as $n=>$val)
        <tbody><tr><td>{{$n}}</td><td>{{$val}}</td></tr>
@endforeach
</tbody>
</table>
</body>
</html>