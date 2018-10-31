<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <main role="main">
        @yield('content')

    </main>


    <footer class="row">

        @include('includes.footer')

    </footer>

    <jsfooter>
        @include('includes.jsfooter')
    </jsfooter>

</body>
</html>