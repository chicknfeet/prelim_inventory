<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<style>
    header{
        background-color: black;
        padding: 1.5rem;
    }

    nav a{
        color: white;
    }

    hover
</style>
<body>
<header>
    <div class="container">
        <div>
            <nav>
                <a class="p-3" href="{{ route('product') }}">Products</a>
                <a class="p-3" href="{{ route('supplier') }}">Supplier</a>
                <a class="p-3" href="{{ route('category') }}">Category</a>
                <a class="p-3" href="{{ route('order') }}">Order</a>
                <a class="p-3" href="{{ route('customer') }}">Customer</a>
                <a class="p-3" href="{{ route('orderdetail') }}">Order Detail</a>
            </nav>
        </div>
    </div>
</header>

    @yield('content')
    </body>
</html>