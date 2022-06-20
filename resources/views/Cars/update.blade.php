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
        <div class="nav" style="margin-bottom:15px">
            <a href="{{ route('cars.list') }}">Lista</a>
        </div>
        <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
            @csrf
            <div>

                <label for="vin">Vin</label>
                <input type="text" name="vin" id="vin" value={{ $car->vin }}>
            </div>
            <div>
                <label for="description">Opis</label>
                <input type="text" name="description" id="description" value={{ $car->description }}>
            </div>
            <div>
                <label for="color">Kolor</label>
                <input type="text" name="color" id="color" value={{ $car->color }}>
            </div>
            <div>
                <label for="price">Cena</label>
                <input type="text" name="price" id="price" value={{ $car->price }}>
            </div>

            <div>
                <button type="submit">Dodaj</button>
            </div>
        </form>
    </div>

</body>

</html>
