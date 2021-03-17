<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    @foreach ($cars as $car)
        <div>
            {{$car->id}} <br>
            {{$car->producer}} <br>
            {{$car->model}} <br>
            {{$car->power}} Kw <br>
            {{$car->max_speed}} Km/h <br>
            {{$car->acceleration}} s <br>
        </div>
        <br><br><br>
    @endforeach
</body>
</html>