<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http - equiv ="X - UA - Compatible" content=" ie= edge ">
    <link rel="shortcut icon" href="../../assets/icon.png" type="image/x-icon">
    <title>Miyamoto Musashi</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <header class="masthead mb-auto">
            <h1>O SAMURAI</h1>
        </header>
    </div>
    <div class="container-fluid">
        <main role="main" class="py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>
    <div class="container-fluid">
        <div class="card-footer">
            <p>©Copright, direitos dados a Miyamoto Musashi</p>
        </div>
    </div>
</body>
</html>