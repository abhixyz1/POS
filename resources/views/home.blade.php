<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michie Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Tambahkan Menu Navigasi -->
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
            <h1>Michie Store</h1>
        </header>

        <main class="main-content">
            <!-- Tambahkan Section Welcome dengan Foto dan Tulisan -->
            <section class="welcome-section hidden">
                <div class="welcome-content">
                    <img src="https://i.pinimg.com/736x/87/9b/a5/879ba55cbf849f640562d883b1827b2d.jpg" alt="Michie Store" class="welcome-image">
                    <div class="welcome-text">
                        <h2>Welcome to Michie Store...</h2>
                        <p>Your one-stop shop for all your daily needs. Explore our wide range of products and enjoy a seamless shopping experience.</p>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer hidden">
            <p>&copy; 2025 by Owner Abhinaya. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            const fadeElements = document.querySelectorAll('.hidden');
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>
</body>

</html>
