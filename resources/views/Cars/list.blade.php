<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('cars.create') }}">Nowa pozycja</a>

        <h3>Samochody</h3>
        <div class="cars">
            <form action="{{ route('cars.list') }}" method="get">
                <div style="margin-top:10px">
                    <label for="vin">Vin</label>
                    <input type="text" name="vin" id="vin">
                </div>
                <div style="margin-top:10px">
                    <label for="color">Kolor</label>
                    <input type="text" name="color" id="color">
                </div>
                <div style="margin-top:10px">
                    <label for="minPrice">Minimalna cena</label>
                    <input type="text" name="minPrice" id="minPrice">
                </div>
                <div style="margin-top:10px">
                    <label for="description">Opis</label>
                    <input type="text" name="description" id="description">
                </div>
                <div style="margin-top:10px">
                    <button type="submit">Filtruj</button>
                </div>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>lp</th>
                        <th>Vin</th>
                        <th>Opis</th>
                        <th>Kolor</th>
                        <th>Cena</th>
                        <th>Szczegoly</th>
                        <th>Edycja</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->vin }}</td>
                            <td>{{ $car->description }}</td>
                            <td>{{ $car->color }}</td>
                            <td>{{ $car->price }}</td>
                            <td>
                                <a href="{{ route('cars.show', ['id' => $car->id]) }}">Zobacz</a>
                            </td>
                            <td><a href="{{ route('cars.update', ['id' => $car->id]) }}">Edytuj</a></td>
                            <td>
                                <form action={{ route('cars.destroy', ['id' => $car->id]) }} method="post">
                                    @csrf
                                    <button type="submit">usuń</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
        </div>
        </tbody>
        </table>

    </div>
</body>

</html>
