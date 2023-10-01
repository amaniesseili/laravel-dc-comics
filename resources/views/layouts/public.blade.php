<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand me-5" href="#">DC Comics </a>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active me-3" aria-current="page" href="#">HOME</a>
                        <a class="nav-link me-4" href="#">CHARACTERS</a>
                        <a class="nav-link me-4" href="#">MOVIES</a>
                        <a class="nav-link me-4" href="#">TV</a>
                        <a class="nav-link me-4" href="#">GAMES</a>
                        <a class="nav-link me-4" href="#">COLLECTIBLES</a>
                        <a class="nav-link me-4" href="#">VIDEOS</a>
                        <a class="nav-link me-4" href="#">FAN</a>
                        <a class="nav-link me-4" href="#">NEWS</a>
                        <a class="nav-link me-4" href="#">SHOP</a>
                        

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
