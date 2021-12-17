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
    <title>Christian and Jada | 10/29/22</title>
</head>
<body class="antialised bg-cj-blue">
    <div id="app">
        <div 
        class="relative 
        flex 
        items-top 
        mx-auto 
        flex-col j
        ustify-center 
        sm:items-center 
        py-4 
        bg-cj-cream 
        max-w-7xl 
        sm:pt-0"
        >
        @include('header')
        {{ $content }}
        </div>
    </div>
    @if( session()->has('message') )
        <div class="fixed bottom-3 right-3 mb-4 mr-4 p-4 bg-cj-orange text-white rounded-xl shadow text-sm">
            <p>{{ session()->get('message') }}</p>
        </div>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>