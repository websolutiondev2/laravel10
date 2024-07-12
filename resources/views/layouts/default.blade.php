<!DOCTYPE html>
<html lang="en">
<head>
    @include ('includes.head')
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="row">
             @include ('includes.header')
        </header>
        <div id="main" class="row">
            @yield('123')

        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>