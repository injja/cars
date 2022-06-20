<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3>{{ $brand->id }}</h3>
        <div>{{ $brand->name }}</div>
        <ol>
            @foreach ($brand->cars as $car)
                <li><strong>Vin: </strong>{{ $car->vin }}</li>
            @endforeach
        </ol>
    </div>
</body>

</html>
