<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro Gorila</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
<body>
    <div class="container">
        @component('componet_navbar')
            @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
<script src="{{ asset('js/app.js') }}" type="text/application/javascript"></script>
</body>
</html>