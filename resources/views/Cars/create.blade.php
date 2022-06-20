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
        <form action="{{ route('cars.create') }}" method="post">
            @csrf
            <input type="integer" name="user_id" id="user_id" value="1">
            <div>

                <label for="vin">Vin</label>
                <input type="text" name="vin" id="vin">
            </div>
            <div>
                <label for="description">Opis</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="color">Kolor</label>
                <input type="text" name="color" id="color">
            </div>
            <div>
                <label for="price">Cena</label>
                <input type="text" name="price" id="price">
            </div>
            <div>
                <label for="registration">Rejestracja</label>
                <input type="text" name="registration" id="registration">
            </div>
            <div>
                <label for="model_id">id modelu</label>
                <input type="text" name="model_id" id="model_id">
            </div>
            <div>
                <label for="brand_id">id marki</label>
                <input type="text" name="brand_id" id="brand_id">
            </div>

            <div>
                <button type="submit">Dodaj</button>
            </div>
        </form>
    </div>

</body>

</html>
