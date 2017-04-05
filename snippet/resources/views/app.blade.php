<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Snippet')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">

        <link rel="stylesheet" href="{{ asset('highlight/styles/github.css') }}">
        <link rel="stylesheet" href="{{ asset('css/snippet.css') }}">
        @yield('head','')
    </head>
    <body>
        @yield('navigation','')        
        @yield('content','')
        <footer class="footer">
          <div class="container">
            <p class="text-muted">&copy; 2016 juhara.com</p>
          </div>
        </footer>        
        <script src="{{ asset('js/jquery-2.0.2.min.js') }}"></script>        
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>    
        <script src="{{ asset('highlight/highlight.pack.js') }}"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        @yield('js','')
    </body>
</html>
