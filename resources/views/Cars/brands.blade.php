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
        <h3>Marki</h3>
        <div class="brands">
            <table>
                <thead>
                    <tr>
                        <th>lp</th>
                        <th>Marka</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $brand->name }}</td>

                            <td>
                                <form action="{{ route('brands.destroy', ['id' => $brand->id]) }}" method="get">
                                    <button type="submit">usuń</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
        </div>
        </tbody>
        </table>

    </div>

    </div>

</body>

</html>
