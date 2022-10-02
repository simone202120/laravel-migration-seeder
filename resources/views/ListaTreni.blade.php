<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Treni</title>
</head>
<body>
    <ul>
        @foreach($train as $treno)
            <li>{{$treno->azienda}} - {{$treno->stazione_partenza}} - {{$treno->stazione_arrivo}} - {{$treno->orario_partenza}} - {{$treno->orario_arrivo}} - {{$treno->orario_arrivo}} - {{$treno->codice_treno}} </li>
        @endforeach
    </ul>
</body>
</html>