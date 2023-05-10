<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel CRUD</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset("resources/img/favicon.ico") }}">
    @vite('resources/js/app.js')
</head>
<body>

    {{-- header  --}}
    @include('partials.header')
    {{-- /header  --}}
    
    {{-- main  --}}
    <main>
        @yield('page.main')
    </main>
    {{-- /main  --}}
    
    {{-- footer  --}}
    @include('partials.footer')
    {{-- /footer  --}}
    
</body>
</html>