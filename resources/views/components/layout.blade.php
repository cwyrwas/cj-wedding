<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Gwendolyn:wght@400;700&display=swap" rel="stylesheet"> 
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
    <title>Christian and Jada | 10/29/22</title>
</head>
<body class="antialised bg-cj-blue">
    <div id="app">
        <div 
        class="relative flex flex-col py-4 mx-auto items-top sm:items-center bg-cj-cream sm:pt-0"
        >
        @include('header')
        {{ $content }}
        </div>
    </div>
    @if( session()->has('message') )
        <div class="fixed p-4 mb-4 mr-4 text-sm text-white shadow bottom-3 right-3 bg-cj-orange rounded-xl">
            <p>{{ session()->get('message') }}</p>
        </div>
    @endif
    
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>