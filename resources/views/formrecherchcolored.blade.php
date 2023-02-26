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
    <input type="text" name="noterecherche" >
    <input type="button" value="Rechercher">
    <table border="1">
        <thead><th>Name</th><th>notes</th></thead>
        <tbody>
@foreach ($note as $n=>$val)
@if($val>10)
    <tr style="background-color: lightgreen;"><td>{{$n}}</td><td>{{$val}}</td></tr>
@elseif (8<=$val && $val<=10)
    <tr style="background-color: orange;"><td>{{$n}}</td><td>{{$val}}</td></tr>
@else
    <tr style="background-color: red;"><td>{{$n}}</td><td>{{$val}}</td></tr>
@endif
@endforeach
</tbody>
</table>
</body>
</html>