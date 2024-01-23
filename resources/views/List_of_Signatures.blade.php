<!-- signatures/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signature List</title>
</head>

<body>
    <h1>Signature List</h1>

    @foreach ($signatures as $signature)
        <div>
            <img src="{{ $signature->image_path }}" alt="Signature">
        </div>
    @endforeach
</body>

</html>
