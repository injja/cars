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
        <h3>Modele</h3>
        <table>
            <thead>
                <tr>
                    <th>lp</th>
                    <th>Modele</th>
                    <th>Usuń</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($models as $model)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $model->name }}</td>
                        <td>
                            <form action="{{ route('models.destroy', ['id' => $model->id]) }}">
                                <button type="submit">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
