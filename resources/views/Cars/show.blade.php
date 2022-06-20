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
        <h1>{{ $car->vin }}</h1>
        <h3>Szczegoly</h3>
        <ul>
            <li>Kolor: {{ $car->color }}</li>
            <li>Cena: {{ $car->price }}</li>
            <li>Opis: {{ $car->description }}</li>
            <li>Marka: {{ $car->brand->name }}</li>
            <li>Model: {{ $car->model->name }}</li>
        </ul>
        @if ($car->photo)
            <img src="/storage/{{ $car->photo }}" alt="" width="200">
        @endif


        <form action="{{ route('cars.addPhoto') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="">Załącz plik</label>
                <input type="file" name="file" id="file" accept="image/jpeg">
            </div>

            <div>
                <button type='submit'>Dodaj</button>
            </div>
            <input type="hidden" name="id" value="{{ $car->id }}">
        </form>
    </div>
</body>

</html>
