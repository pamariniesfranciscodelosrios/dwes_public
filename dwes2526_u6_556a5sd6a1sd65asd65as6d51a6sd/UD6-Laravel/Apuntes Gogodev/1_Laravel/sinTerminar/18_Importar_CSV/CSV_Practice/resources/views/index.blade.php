<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>
    <h1>Bienvenido a la práctica 18_CSV</h1>
<header>
    <form action="{{ route('export') }}">
        <h3>Export CSV</h3>
        @csrf
        <button type="submit">Export CSV</button>
    </form>
    <form method="POST", action="{{ route('import') }}" enctype="multipart/form-data">
        <h3>Import CSV</h3>
        @csrf
        <input type="file" name="document_csv" />
        <button type="submit">Import CSV</button>
    </form>
</header>
<main>
    <h3>Products</h3>
    <ul>
    @forelse($products as $product)
        <li>{{ $product->name }} {{ $product->description }} {{ $product->price }}$</li>
    @empty
        <p>No data</p>
    @endforelse
    </ul>
</main>
</body>
</html>

<style>
    h1 {
        margin-bottom: 0;
    }

    body>header {
        padding: 0;
    }

    form {
        margin-bottom: 40px;
    }

    form h3 {
        margin-bottom: 10px;
    }

    input{
        margin-bottom: 1px;
    }

    button {
        width: auto;
        margin-bottom: 1px;
    }

    body>main {
        padding: 0;
    }
</style>
