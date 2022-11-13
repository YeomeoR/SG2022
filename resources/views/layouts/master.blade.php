<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ URL('/images/favicon.ico') }}" type="image/x-icon">
    <title>Square Gain</title>
    @vite('resources/js/app.js') <!-- This line brings in the css for tailwindcss and needed in each page -->
</head>
<header class="sticky top-0">
    @include('includes.header')
</header>
<body class="bg-gray-100 flex h-screen flex-col">
    <div class="container">


        <div class="about-container flex justify-center flex-col">
            @yield('content')
        </div>


        <div class="container signup mb-4">
            @include('includes.signup')
        </div>
    </div>

    <div class="spacer"></div>

</body>


</html>
