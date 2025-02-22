<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category }} - Michie Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let dropdowns = document.querySelectorAll(".dropdown");
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener("click", function () {
                    let menu = this.querySelector(".dropdown-menu");
                    menu.classList.toggle("active");
                });
            });
        });
    </script>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="dropdown">
                <a href="#">Products</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('products.food-beverage') }}">Food & Beverage</a></li>
                    <li><a href="{{ route('products.beauty-health') }}">Beauty & Health</a></li>
                    <li><a href="{{ route('products.home-care') }}">Home Care</a></li>
                    <li><a href="{{ route('products.baby-kid') }}">Baby & Kid</a></li>
                </ul>
            </li>
            <li><a href="{{ route('user.profile', ['id' => 1, 'name' => 'Abhinaya']) }}">User</a></li>
            <li><a href="{{ route('transaction') }}">Transaction</a></li>
        </ul>
    </nav>

    <div class="container">
        <header class="header">
            <h1>{{ $category }}</h1>
        </header>

        <main class="main-content">
            <h2>Product List</h2>
            <ul>
                @foreach ($products as $product)
                    <li>{{ $product['name'] }} - Rp {{ number_format($product['price'], 0, ',', '.') }}</li>
                @endforeach
            </ul>
        </main>

        <footer class="footer">
            <p>&copy; 2025 by Owner Abhinaya. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
