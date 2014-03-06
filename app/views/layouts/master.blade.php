<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.header')
        <div class="maincontainer">
            {{$content}}
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </body>
</html>